<?php

namespace App\Http\Controllers\back;

use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\fileExists;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|min:2',
            'subcategory_id' =>'exists:subcategories,id',
            'type' => 'required|numeric|in:0,1',
            'email' =>'required|email|unique:users',
            'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'phone' =>'required|min:11',
            'additional_phone' =>'min:11',
            'gender' => 'required|string|in:male,female',
            'birth_of_year' =>'numeric',
            'years_of_experience' => 'numeric',
            'education' =>'min:3|max:1000',
            'experience' =>'min:3|max:1000',
            'image' =>'required|image|mimes:jpg,png,jpeg|max:2048',
            'education_certificate' =>'image|mimes:jpg,png,jpeg|max:2048',
            'experience_certificate' =>'image|mimes:jpg,png,jpeg|max:2048',

        ]);

        if ($request->hasfile('image')) {
            $image = uploadImage('users',$request->image);

        }
        if ($request->hasfile('education_certificate')) {
            $user_education_image = uploadImage('user_education',$request->education_certificate);

        } 
        if ($request->hasfile('experience_certificate')) {
            $user_experience_image = uploadImage('user_experience',$request->experience_certificate);

        }   

          User::create([
            'category_id'=>$request->category_id,
            'name' =>$request->name,
            'type'=>$request->type,
            'email' =>$request->email,
            'password'=>Hash::make($request->password),
            'phone' =>$request->phone,
            'additional_phone'=>$request->additional_phone,
            'gender' =>$request->gender,
            'birth_of_year'=>$request->birth_of_year,
            'years_of_experience' =>$request->years_of_experience,
            'education'=>$request->education,
            'experience' =>$request->experience,
            'image' =>$image,
            'education_certificate' =>$user_education_image,
            'experience_certificate' =>$user_experience_image,

        ]);

       
      
        return redirect()->route('users.index')->with('message','User  Added Successfully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.pages.settings.edit',compact('setting'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'site_title' => 'required|string|min:2',
            'whatsApp' =>'required|min:11',
            'social_media' => 'required|array|max:255',
            'about_us' =>'min:3|max:1000',
            'terms_conditions' =>'min:3|max:1000',
            'site_logo' =>'image|mimes:jpg,png,jpeg|max:2048',

        ]);
        $setting = Setting::find($id);
        if ($request->has('site_logo')) {
            if($setting->site_logo !=''){
                if(fileExists($setting->site_logo)){
                    unlink($setting->site_logo);
                }  
            }
            $fileImagePath = uploadImage('settings',$request->site_logo);
            $setting->site_logo = $fileImagePath;
        }    
        $setting->site_title = $request->site_title;
        $setting->whatsApp = $request->whatsApp;
        $setting->social_media = $request->social_media;
        $setting->terms_conditions = $request->terms_conditions;
        $setting->about_us = $request->about_us;      
        $setting->save();

        return redirect()->back()->with('message','setting  Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->image!=''){
            if(fileExists($user->image)){
                unlink($user->image);
            }  
        }
        if($user->education_certificate!=''){
            if(fileExists($user->education_certificate)){
                unlink($user->education_certificate);
            }  
        }
        if($user->experience_certificate!=''){
            if(fileExists($user->experience_certificate)){
                unlink($user->experience_certificate);
            }  
        }
        $user->delete();
        return redirect()->back()->with('message','user Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;


class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::all();
        return view('admin.pages.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.sliders.create');

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
           
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

            
        if ($request->hasfile('image')) {
            
            $fileImagePath = uploadImage('sliders',$request->image);
        }
         Slider::create([
            'image'=>$fileImagePath
        ]);

       
      
        return redirect()->route('sliders.index')->with('message','Slider Info Added Successfully');
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
        $slider = Slider::find($id);
        return view('admin.pages.sliders.edit',compact('slider'));

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
            
           'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $slider = Slider::find($id);
        

        if ($request->has('image')) {
            if($slider->image!=''){
                if(fileExists($slider->image)){
                    unlink($slider->image);
                }  
            }
            $image = uploadImage('sliders', $request->image);
            $slider->image = $image;
        }
        
        

        $slider->is_active = $request->status;
        $slider->save();

        return redirect()->route('sliders.index')->with('message','Sliders  Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if($slider->image!=''){
            if(fileExists($slider->image)){
                unlink($slider->image);
            }  
        }
        
        
        $slider->delete();
        return redirect()->back()->with('message','Slider Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers\back;

use App\Models\User;
use App\Mail\DemoMail;
use App\Models\Contact;
use App\Models\Category;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use function PHPUnit\Framework\fileExists;


class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = Contact::all();
        return view('admin.pages.contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.contacts.create');

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
            'email' =>'required|email|unique:users', 
            'message' =>'min:3|max:1000',
            
        ]);

      

          Contact::create([
            'name' =>$request->name,
            'email' =>$request->email,  
            'message'=>$request->message,
            

        ]);
        // $mailData = [
        //     'email' => $request->email,
        //     'name' => $request->name,
        //     'message' => $request->message
        // ];
         
        // Mail::to('support_info@wood.amlakyeg.com')->send(new DemoMail($mailData,$request->name));
       
      
        return redirect()->route('contacts.index')->with('message','Contact  Added Successfully');
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
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        
        $contact->delete();
        return redirect()->back()->with('message','contact Deleted Successfully');
    }
}

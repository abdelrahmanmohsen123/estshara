<?php

namespace App\Http\Controllers\back;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\BlogCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function PHPUnit\Framework\fileExists;


class BlogCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogcategories = BlogCategory::all();
        return view('admin.pages.blogcategories.index',compact('blogcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.blogcategories.create');

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
        ]);

            
          BlogCategory::create([
            'name' =>$request->name
        ]);

       
      
        return redirect()->route('blogcategories.index')->with('message','blog category  Info Added Successfully');
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

        $blogcategory = BlogCategory::find($id);
        return view('admin.pages.blogcategories.edit',compact('blogcategory'));

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
            'name' => 'required|string|min:2',
        ]);
        $blogcategory = BlogCategory::find($id);
        $blogcategory->name = $request->name;
        $blogcategory->is_active = $request->status;
        $blogcategory->save();

        return redirect()->route('blogcategories.index')->with('message','blog category  Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogcategory = BlogCategory::find($id);
        $blogcategory->delete();
        return redirect()->back()->with('message','blog category Deleted Successfully');
    }
}

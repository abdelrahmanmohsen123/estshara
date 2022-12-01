<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.pages.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.categories.create');

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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

            
        if ($request->hasfile('image')) {
            $fileImagePath = uploadImage('categories',$request->image);

        }
          Category::create([
            'image'=>$fileImagePath,
            'name' =>$request->name
        ]);

       
      
        return redirect()->route('categories.index')->with('message','Category Info Added Successfully');
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
        $category = Category::find($id);
        return view('admin.pages.categories.edit',compact('category'));

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
            'name' => 'string|min:2',
           'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $category = Category::find($id);
        

        if ($request->has('image')) {
            if($category->image!=''){
                if(fileExists($category->image)){
                    unlink($category->image);
                }  
            }
            $fileImagePath = uploadImage('categories',$request->image);
            $category->image = $fileImagePath;
        }
        
        
        $category->name = $request->name;
        $category->is_active = $request->status;
        $category->save();

        return redirect()->route('categories.index')->with('message','category  Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category->image!=''){
            if(fileExists($category->image)){
                unlink($category->image);
            }  
        }
        
        
        $category->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
}

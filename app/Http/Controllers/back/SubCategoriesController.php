<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Models\Category;

use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;


class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategories = Subcategory::all();
        return view('admin.pages.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.pages.subcategories.create',compact('categories'));

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
            'category_id' =>'required|exists:categories,id',
        ]);

            
          Subcategory::create([
            'category_id'=>$request->category_id,
            'name' =>$request->name
        ]);

       
      
        return redirect()->route('subcategories.index')->with('message','Sub Category Info Added Successfully');
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
        $categories =Category::all();
        $subcategory = Subcategory::find($id);
        return view('admin.pages.subcategories.edit',compact('subcategory','categories'));

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
            'category_id' =>'required|exists:categories,id',
        ]);
        $subcategory = Subcategory::find($id);
        
        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->is_active = $request->status;
        $subcategory->save();

        return redirect()->route('subcategories.index')->with('message','subcategory  Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        return redirect()->back()->with('message','subcategory Deleted Successfully');
    }
}

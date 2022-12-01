@extends('admin.layouts.master')
@section('title','All sub categories')

@section('content') 




<div class="container-fluid">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-8">
        <h3>All sub categories</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">sub categories</li>
        </ol>
      </div>
        <!-- Bookmark Start-->
      <div class="col-3">
          <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Add New Category</a></span>

      </div>

        <!-- Bookmark Ends-->
     
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid ">
<div class="row">
   <!-- Feature Unable /Disable Order Starts-->
   <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5>All Sub Categories</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="display" id="basic-2">
            <thead>
              <tr>
                <th>Name</th>
                <th>category</th>
                <th>status</th>
                <th >actions</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($subcategories as $subcategory)
              <tr>
                <td>{{$subcategory->name}}</td>
                <td>{{$subcategory->category->name}}</td>
                <td>{{$subcategory->is_active == 0 ?   'غير مفعل' :'مفعل'}}</td>
                <td>
                  <a class="btn btn-outline-info btn-sm" type="button" href="{{ route('subcategories.edit',$subcategory->id) }}" data-original-title="btn btn-danger btn-sm" title="">Edit</a>

                  <form action="{{ route('subcategories.destroy',$subcategory->id) }}" method="post"
                      class="d-inline">
                      @csrf
                      @method("DELETE")
                      <button class="btn btn-outline-danger btn-sm">Delete</button>
                  </form>
                </td>
                
              </tr>
              @endforeach
       
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature Unable /Disable Ends-->
</div>


</div>
<!-- Container-fluid Ends-->

@endsection
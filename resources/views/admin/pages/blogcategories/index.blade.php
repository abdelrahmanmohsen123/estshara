@extends('admin.layouts.master')
@section('title','All blogcategories')

@section('content') 




<div class="container-fluid">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-8">
        <h3>All  blogcategories</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"> blogcategories</li>
        </ol>
      </div>
        <!-- Bookmark Start-->
      <div class="col-3">
          <a href="{{ route('blogcategories.create') }}" class="btn btn-primary">Add Blog Category</a></span>

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
        <h5>All Blog Category</h5>
      </div>
      @if (session('message'))
      <div class="alert alert-success text-center">
          {{ session('message') }}
      </div>
    @endif
      <div class="card-body">
        <div class="table-responsive">
          <table class="display" id="basic-2">
            <thead>
              <tr>
                <th>Name</th>
                <th>status</th>
                <th >actions</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($blogcategories as $blogcategory)
              <tr>
                <td>{{$blogcategory->name}}</td>
                <td>{{$blogcategory->is_active == 0 ?   'غير مفعل' :'مفعل'}}</td>

                <td>
                  {{-- <a class="btn btn-outline-secondary btn-sm" type="button" href="{{ route('contacts.show',$contact->id) }}" data-original-title="btn btn-primary btn-sm" title="">Show</a> --}}

                  <a class="btn btn-outline-info btn-sm" type="button" href="{{ route('blogcategories.edit',$blogcategory->id) }}" data-original-title="btn btn-danger btn-sm" title="">Edit</a>

                  <form action="{{ route('blogcategories.destroy',$blogcategory->id) }}" method="post"
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
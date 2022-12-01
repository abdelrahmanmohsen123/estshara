@extends('admin.layouts.master')
@section('title','All categories')

@section('content') 




<div class="container-fluid">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-8">
        <h3>All categories</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">categories</li>
        </ol>
      </div>
        <!-- Bookmark Start-->
      <div class="col-3">
          <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a></span>

      </div>

        <!-- Bookmark Ends-->
     
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid user-card text-center">
  @if (session('message'))
    <div class="alert alert-success text-center">
        {{ session('message') }}
    </div>
  @endif
  <div class="row">
  @forelse ($categories as $category)

      <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
        <div class="card custom-card" style="max-height: 300px">
          {{-- <div class="card-header m-3 " style="height: 200px;"><img  class="img-fluid mb-3" src="{{asset($category->image)}}" height="200px" alt="{{ $category->title }}"></div> --}}
          <div class="card-profile"><img class="" src="{{asset($category->image)}}" ></div>
          <div class="text-center profile-details mt-4">
            <h5>الاسم : {{ $category->name }}</h5>  
            <h6> الحاله : <span style="color: blue">{{$category->status == 0 ? 'فعال' : 'غير فعال'}}</span></h6>
            
          </div>
          <div class="card-footer row">
            <div class="col-12 col-sm-12">
              
              <a class="btn btn-info btn-sm" type="button" href="{{ route('categories.edit',$category->id) }}" data-original-title="btn btn-danger btn-sm" title="">تعديل</a>

                  <form action="{{ route('categories.destroy',$category->id) }}" method="post"
                      class="d-inline">
                      @csrf
                      @method("DELETE")
                      <button class="btn btn-outline-danger btn-sm">Delete</button>
                  </form>
                  
            </div>
          </div>
        </div>
      </div>

      
    
  @empty
      <div class="text-center alert alert-warning row m-4" >
         <h5 >
            There is No categories
        </h5> 

      </div>
            

  @endforelse
</div>  

</div>
<!-- Container-fluid Ends-->

@endsection
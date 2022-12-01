@extends('admin.layouts.master')
@section('title','All sliders')

@section('content') 




<div class="container-fluid">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-8">
        <h3>All sliders</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">sliders</li>
          <li class="breadcrumb-item active">slider Cards</li>
        </ol>
      </div>
        <!-- Bookmark Start-->
      <div class="col-3">
          <a href="{{ route('sliders.create') }}" class="btn btn-primary">Add New Slider</a></span>

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
  @forelse ($sliders as $slider)

      <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
        <div class="card custom-card">
          {{-- <div class="card-header m-3 " style="height: 200px;"><img  class="img-fluid mb-3" src="{{asset($slider->image)}}" height="200px" alt="{{ $slider->title }}"></div> --}}
          <div class="card-profile"><img class="" src="{{asset($slider->image)}}" ></div>
          <div class="text-center profile-details mt-4">
              <h4> الحاله : <span style="color: blue">{{$slider->status== 0 ? 'فعال' : 'غير فعال'}}</span></h4>
            
          </div>
          <div class="card-footer row">
            <div class="col-12 col-sm-12">
              
              <a class="btn btn-info btn-sm" type="button" href="{{ route('sliders.edit',$slider->id) }}" data-original-title="btn btn-danger btn-sm" title="">تعديل</a>

                  <form action="{{ route('sliders.destroy',$slider->id) }}" method="post"
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
            There is No sliders
        </h5> 

      </div>
            

  @endforelse
</div>  

</div>
<!-- Container-fluid Ends-->

@endsection
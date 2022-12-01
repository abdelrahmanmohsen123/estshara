@extends('admin.layouts.master')
@section('title','Edit Category')

@section('content') 
    <div class="container-fluid">
        <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
            <h3>Edit Category</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Edit Category</li>
            </ol>
            </div>
            <div class="col-sm-6">
            <!-- Bookmark Start-->
            <div class="bookmark">
                <ul>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                    <form class="form-inline search-form">
                    <div class="form-group form-control-search">
                        <input type="text" placeholder="Search..">
                    </div>
                    </form>
                </li>
                </ul>
            </div>
            <!-- Bookmark Ends-->
            </div>
        </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                <h5>Edit Category </h5>
                </div>
                <div class="card-body add-post">
                <form action="{{ route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data" class="row needs-validation"   novalidate="">
                    @csrf
                    @method('PUT')                    
                    <div class="col-12">
                        <label  for="name">Category Name</label>
                        <input name="name"   class="form-control" value="{{$category->name }}" for="name">
                    </div>
                    <div class="col-sm-12">
                        <div class="email-wrapper">
                            <div class="theme-form">
                                <div class="form-group">
                                    <label>category status:</label>
                                    <select name="status" id="" class="form-control">                  
                                        <option value="1" @if($category->is_active==1)  {{'selected'}} @endif > فعال </option>
                                        <option value="0" @if($category->is_active==0)  {{'selected'}} @endif >غير فعال </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <input name="image" type="file" class="custom-file-input d-none" id="inputGroupFile01"
                                onchange="previewImage(event)">
                            <label for="inputGroupFile01"> <img for="inputGroupFile01" id="image"
                                    src="{{ asset($category->image) }}" class="w-100"
                                    alt="" style="cursor: pointer;max-height:300px"> </label>
                        </div>
                    </div>
                    <div class="btn-showcase">
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Update Category</button>

                          <a href="{{ route('categories.index') }}" type="submit" class="btn btn-info">Back</a>
                      </div>
                    </div>
                </form>                
                </div>
            </div>
            </div>
        </div>
        </div>
    <!-- Container-fluid Ends-->
    </div>

@endsection  
@section('js')
    <script>
        var previewImage = function(event) {
            var output = document.getElementById('image');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection   
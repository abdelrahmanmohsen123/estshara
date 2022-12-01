@extends('admin.layouts.master')
@section('title','Edit Slider')

@section('content') 
    <div class="container-fluid">
        <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
            <h3>Edit Slider</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Edit Slider</li>
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
                <h5>Edit Slider </h5>
                </div>
                <div class="card-body add-post">
                <form action="{{ route('sliders.update',$slider->id) }}" method="POST" enctype="multipart/form-data" class="row needs-validation"   novalidate="">
                    @csrf
                    @method('PUT')
                    <div class="col-sm-12">
                    
                   
                    
                    
                    <div class="email-wrapper">
                        <div class="theme-form">
                        <div class="form-group">
                            <label>Slider status:</label>
                            <select name="status" id="" class="form-control">
                               
                                <option value="1" @if($slider->is_active==1)  {{'selected'}} @endif > فعال </option>

                                    <option value="0" @if($slider->is_active==0)  {{'selected'}} @endif >غير فعال </option>

                                
    
                            </select>
                        </div>
                        </div>
                    </div>
                    </div>
                    {{-- <div class="mb-3 col-9 draggable">
                        <label for="image">Change Slider Image</label>
                        <input id="image" class="form-control"  name="image" class="@error('image') is-invalid @enderror"  type="file">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-3">
                        <img class="card-img-top" src="{{asset($slider->image)}}" alt="{{$slider->title}}">
                    </div> --}}
                    <div class="row">
                        <div class="col-12">
                            <input name="image" type="file" class="custom-file-input d-none" id="inputGroupFile01"
                                onchange="previewImage(event)">
                            <label for="inputGroupFile01"> <img for="inputGroupFile01" id="image"
                                    src="{{ asset($slider->image) }}" class="w-100"
                                    alt="" style="cursor: pointer"> </label>
                        </div>
                    </div>
                    <div class="btn-showcase">
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Update Slider</button>

                          <a href="{{ route('sliders.index') }}" type="submit" class="btn btn-info">Back</a>
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
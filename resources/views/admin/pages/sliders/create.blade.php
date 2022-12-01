@extends('admin.layouts.master')
@section('title','Add Slider')

@section('content') 
    <div class="container-fluid">
        <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
            <h3>Add Slider</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active">Add Slider</li>
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
                <h5>New Slider </h5>
                </div>
                <div class="card-body add-post">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-warning">{{$error}}</div>
                        @endforeach
                    @endif
                    <form class="needs-validation " novalidate action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data" class="row needs-validation"   novalidate="">
                        @csrf
                        
                        <div class="row">
                            <div class="col-6">
                                <label for="image">Slider Image</label>
                            </div>
                            <div class="col-6">
                                <input name="image" type="file" class="custom-file-input d-none" id="inputGroupFile01"
                                    onchange="previewImage(event)">
                                <label for="inputGroupFile01"> <img for="inputGroupFile01" id="image"
                                        src="{{ asset('admin/assets/images/default.jpg') }}" class="w-100"
                                        alt="" style="cursor: pointer"> </label>
                            </div>
                        </div>
                        
                        <div class="btn-showcase">
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Add Slider</button>

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
        $(document).ready(function(){
            $('.add_item_btn').click(function(e){
                e.preventDefault();
                $('#show_item').prepend(`<div class="row" id="show_item">
                        <div class="form-group col-10">
                            <input class="form-control" id="validationCustom01" name="item[]" type="text" placeholder=" item" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="form-group col-2 d-grid mb-2 h-50">
                            <button class="btn btn-danger  remove_item_button" >Remove </button>
                        </div>
                    </div>
                   `)
            })
        })

        $(document).on('click','.remove_item_button',function(e){
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        })
    </script>
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
@extends('admin.layouts.master')
@section('title','Add Sub Category')

@section('content') 
    <div class="container-fluid">
        <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
            <h3>Add Category</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Add Sub Category</li>
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
                <h5>New Sub Category </h5>
                </div>
                <div class="card-body add-post">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-warning">{{$error}}</div>
                        @endforeach
                    @endif
                    <form class="needs-validation " novalidate action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data" class="row needs-validation"   novalidate="">
                        @csrf
                        <div class="row my-3">
                            <div class="col-12">
                                <label  for="name">Sub Category Name</label>
                                <input name="name" placeholder="Enter Sub Category Name"  class="form-control" for="name">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <select name="category_id" id="" class="form-select mb-5">
                                    <option value="" disabled selected>choose Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" >{{ $category->name }}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                     
                        
                        <div class="btn-showcase">
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Add Sub Category</button>

                            <a href="{{ route('subcategories.index') }}" type="submit" class="btn btn-info">Back</a>
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


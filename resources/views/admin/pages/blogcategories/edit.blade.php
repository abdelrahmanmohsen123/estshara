@extends('admin.layouts.master')
@section('title','Edit blog category')

@section('content') 
    <div class="container-fluid">
        <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
            <h3>Edit blog category</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Edit  blog category</li>
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
                <h5>Edit  blog category </h5>
                </div>
                <div class="card-body add-post">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-warning">{{$error}}</div>
                        @endforeach
                    @endif
                    <form class="needs-validation " novalidate action="{{ route('blogcategories.update',$blogcategory->id) }}" method="POST" enctype="multipart/form-data" class="row needs-validation"   novalidate="">
                        @csrf
                        @method('put')
                        <div class="row mb-2">
                            <div class="col-12">
                                <label  for="name"> Name</label>
                                <input name="name" value="{{ $blogcategory->name }}"  class="form-control" for="name">
                            </div>
                           
                        </div>
                        <div class="col-sm-12">               
                            <div class="email-wrapper">
                                <div class="theme-form">
                                <div class="form-group">
                                    <label> status:</label>
                                    <select name="status" id="" class="form-control">
                                       
                                        <option value="1" @if($blogcategory->is_active==1)  {{'selected'}} @endif > فعال </option>
        
                                            <option value="0" @if($blogcategory->is_active==0)  {{'selected'}} @endif >غير فعال </option>
        
                                        
            
                                    </select>
                                </div>
                                </div>
                            </div>
                            </div>
                    
                    
                        
                        <div class="btn-showcase">
                            <div class="my-3 text-center">
                                <button type="submit" class="btn btn-primary">Edit blogcategory</button>

                            <a href="{{ route('blogcategories.index') }}" type="submit" class="btn btn-info">Back</a>
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
@section('script')
<script>
$(function() {
  $('#datepicker').datepicker({
    changeYear: true,
    showButtonPanel: true,
    dateFormat: 'yy',
    onClose: function(dateText, inst) {
      var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
      $(this).datepicker('setDate', new Date(year, 1));
    }
  });

  $("#datepicker").focus(function() {
    $(".ui-datepicker-month").hide();
    $(".ui-datepicker-calendar").hide();
  });

});
</script>

    
@endsection


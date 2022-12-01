@extends('admin.layouts.master')
@section('title','Edit Setting')

@section('content') 
    <div class="container-fluid">
        <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
            <h3>Edit Setting</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Edit  Setting</li>
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
                <h5>Edit  Setting </h5>
                </div>
                <div class="card-body add-post">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-warning">{{$error}}</div>
                        @endforeach
                    @endif
                    <form class="needs-validation " novalidate action="{{ route('settings.update',$setting->id) }}" method="POST" enctype="multipart/form-data" class="row needs-validation"   novalidate="">
                        @csrf
                        @method('put')
                        @if (session('message'))
                            <div class="alert alert-success text-center">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row mb-2">
                            <div class="col-6">
                                <label  for="name">Site Title</label>
                                <input name="site_title" value="{{ $setting->site_title }}"  class="form-control" for="name">
                            </div>
                            <div class="col-6">
                                <label  for="name">Whats App</label>
                                <input name="whatsApp" value="{{ $setting->whatsApp }}" type="text" class="form-control" for="email">

                            </div>
                            
                        </div>
                       
                        <div class="row mb-2">
                            <div class="col-12">
                                <label for="img">Select Site Logo:</label>
                                <input type="file" id="img" name="site_logo" class="form-control"   >
                                <img src="{{ asset($setting->site_logo) }}" width="150" height="200" alt="">
                            </div>
                            
                            
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-12">
                                <label for="education">About Us:</label>
                                <textarea name="about_us" id="education" cols="5" class="form-control" rows="5">{{ $setting->about_us }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="experience"> Experience Details:</label>
                                <textarea name="terms_conditions" id="experience" cols="5" class="form-control" rows="5">{{ $setting->terms_conditions }}</textarea>
                            </div>
                            
                        </div>
                        <div class="row mb-12">
                            <div class="col-3">
                                <label for="">social media Fscebook</label>
                                <input name="social_media[]" value="{{ $setting->social_media[0] }}" type="text" class="form-control" for="email">

                            </div>
                            <div class="col-3">
                                <label for="">social media twitter</label>
                                <input name="social_media[]" value="{{ $setting->social_media[1] }}" type="text" class="form-control" for="email">

                            </div>
                            <div class="col-3">
                                <label for="">social media LinkedIn</label>
                                <input name="social_media[]" value="{{ $setting->social_media[2] }}" type="text" class="form-control" for="email">

                            </div>
                            <div class="col-3">
                                <label for="">social media Instegram</label>
                                <input name="social_media[]" value="{{ $setting->social_media[3] }}" type="text" class="form-control" for="email">

                            </div>
                            
                            
                        </div>
                       
                        
                     
                        
                        <div class="btn-showcase">
                            <div class="my-3 text-center">
                                <button type="submit" class="btn btn-primary">Edit Setting</button>

                            <a href="{{ route('settings.edit',$setting->id) }}" type="submit" class="btn btn-info">Back</a>
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


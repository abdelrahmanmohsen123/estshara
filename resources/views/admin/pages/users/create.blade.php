@extends('admin.layouts.master')
@section('title','Add User')

@section('content') 
    <div class="container-fluid">
        <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
            <h3>Add User</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Add  User</li>
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
                <h5>New  User </h5>
                </div>
                <div class="card-body add-post">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-warning">{{$error}}</div>
                        @endforeach
                    @endif
                    <form class="needs-validation " novalidate action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data" class="row needs-validation"   novalidate="">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-6">
                                <label  for="name">User Name</label>
                                <input name="name" placeholder="Enter  User Name"  class="form-control" for="name">
                            </div>
                            <div class="col-6">
                                <label  for="name">Type</label>
                                <select name="type" id="" class="form-select">
                                    <option value="" disabled selected>choose type</option>
                                        <option value="0" >User</option>
                                        <option value="1" >doctor</option>                                       
                                </select>
                            </div>
                            
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <label  for="email">User Email</label>
                                <input name="email" placeholder="Enter  User Email" type="email" class="form-control" for="email">
                            </div>
                            <div class="col-6">
                                <label  for="passwor">User Password</label>
                                <input name="password" placeholder="Enter  User password" type="password" class="form-control" for="passwor">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <label  for="phone">User Phone</label>
                                <input name="phone" placeholder="Enter  User phone" type="text" class="form-control" for="phone">
                            </div>
                            <div class="col-6">
                                <label  for="phone">Additional Phone</label>
                                <input name="additional_phone" placeholder="Enter  User phone 2" type="text" class="form-control" for="phone">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <label for="img">Select image:</label>
                                <input type="file" id="img" name="image" class="form-control"   >
                            </div>
                            <div class="col-6">
                                <label for="img">Gender:</label>

                                <select name="gender" id="" class="form-select ">
                                    <option value="" disabled selected>choose gender</option>
                                        <option value="male" >male</option>
                                        <option value="female" >female</option>                                       
                                </select>
                            </div>
                            
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <label for="year">birth of year:</label>
                                <input type="text" id="datepicker" name="birth_of_year"  class="form-control"/>
                            </div>
                            <div class="col-6">
                                <label for="year_ex">Years of Experience:</label>
                                <input type="number" id="year_ex" name="years_of_experience" class="form-control"   >
                            </div>
                            
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <label for="education">Education Details:</label>
                                <textarea name="education" id="" cols="5" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="col-6">
                                <label for="experience"> Experience Details:</label>
                                <textarea name="experience" id="" cols="5" class="form-control" rows="5"></textarea>
                            </div>
                            
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <label for="">Select Sub Category</label>
                                <select name="subcategory_id" id="" class="form-select ">
                                    <option value="" disabled selected>choose Sub Category</option>
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}" >{{ $subcategory->name }}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <label for="education">Education Certificate:</label>
                                <input type="file" id="img" name="education_certificate" class="form-control"   >
                            </div>                        
                            <div class="col-6">
                                <label for="experience"> Experience Certificate:</label>
                                <input type="file" id="img" name="experience_certificate" class="form-control"   >
                            </div>
                            
                        </div>
                        
                     
                        
                        <div class="btn-showcase">
                            <div class="my-3 text-center">
                                <button type="submit" class="btn btn-primary">Add User</button>

                            <a href="{{ route('users.index') }}" type="submit" class="btn btn-info">Back</a>
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


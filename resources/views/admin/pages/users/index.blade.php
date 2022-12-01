@extends('admin.layouts.master')
@section('title','All Users')

@section('content') 




<div class="container-fluid">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-8">
        <h3>All  users</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"> Users</li>
        </ol>
      </div>
        <!-- Bookmark Start-->
      <div class="col-3">
          <a href="{{ route('users.create') }}" class="btn btn-primary">Add New User</a></span>

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
        <h5>All Users</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="display" id="basic-2">
            <thead>
              <tr>
                <th>Name</th>
                <th>type</th>
                <th>status</th>
                <th>phone</th>
                <th>birth of years</th>
                <th>gender</th>
                <th >actions</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->type == 0 ? 'user' : 'doctor'}}</td>
                <td>{{$user->is_active == 0 ?   'غير مفعل' :'مفعل'}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->birth_of_year}}</td>
                <td>{{$user->gender}}</td>
                <td>
                  {{-- <a class="btn btn-outline-secondary btn-sm" type="button" href="{{ route('users.show',$user->id) }}" data-original-title="btn btn-primary btn-sm" title="">Show</a> --}}

                  <a class="btn btn-outline-info btn-sm" type="button" href="{{ route('users.edit',$user->id) }}" data-original-title="btn btn-danger btn-sm" title="">Edit</a>

                  <form action="{{ route('users.destroy',$user->id) }}" method="post"
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
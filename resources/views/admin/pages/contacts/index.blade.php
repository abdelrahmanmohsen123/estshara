@extends('admin.layouts.master')
@section('title','All Contacts')

@section('content') 




<div class="container-fluid">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-8">
        <h3>All  Contacts</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"> Contacts</li>
        </ol>
      </div>
        <!-- Bookmark Start-->
      <div class="col-3">
          <a href="{{ route('contacts.create') }}" class="btn btn-primary">Add New Contact</a></span>

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
        <h5>All Contacts</h5>
      </div>
      @if (session('message'))
      <div class="alert alert-success text-center">
          {{ session('message') }}
      </div>
    @endif
      <div class="card-body">
        <div class="table-responsive">
          <table class="display" id="basic-2">
            <thead>
              <tr>
                <th>Name</th>
                <th>email</th>
                <th>message</th>
                
                <th >actions</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $contact)
              <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->message}}</td>
                <td>
                  {{-- <a class="btn btn-outline-secondary btn-sm" type="button" href="{{ route('contacts.show',$contact->id) }}" data-original-title="btn btn-primary btn-sm" title="">Show</a> --}}

                  {{-- <a class="btn btn-outline-info btn-sm" type="button" href="{{ route('contacts.edit',$contact->id) }}" data-original-title="btn btn-danger btn-sm" title="">Edit</a> --}}

                  <form action="{{ route('contacts.destroy',$contact->id) }}" method="post"
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
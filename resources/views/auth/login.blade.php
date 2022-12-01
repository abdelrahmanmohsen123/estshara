@extends('layouts.app')

@section('content')

    <div class="container">
        
     
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="login-card">
              <form class="theme-form login-form text-center" method="POST" action="{{ route('login') }}">
                @csrf
                <h4>Login</h4>
                <h6>Welcome back! Log in to your Admin Dashboard.</h6>
                <div class="form-group">
                  <label>Email Address</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input class="form-control"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                       @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
                
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                </div>
              
            </div>
          </div>
        </div>
    </div>
@endsection

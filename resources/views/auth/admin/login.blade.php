@extends('auth.admin.layouts.app')
@section('content')
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('Backend/login/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Login to Papaya Admin Panel</p>
            </div>
             <form action="{{ route('adminLoginPost') }}" method="post">
              {!! csrf_field() !!}
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control" name="email"  required="required">

              </div>
                @if ($errors->has('email'))
                <span class="help-block font-red-mint">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required="required">
                
              </div>
                @if ($errors->has('password'))
                <span class="help-block font-red-mint">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              
              <div class="d-flex mb-5 align-items-center">
                {{--<label class="form-check-label control control--checkbox mb-0" for="remember"><span class="caption">Remember me</span>
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <div class="control__indicator"></div>
                </label>--}}
                @if (Route::has('forgot_password'))
                    <a class="btn btn-link forgot-pass" href="{{ route('forgot_password') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

              {{--<span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
                  
                  <div class="social-login">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span> 
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span> 
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span> 
                    </a>
              </div>--}}
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
   @endsection
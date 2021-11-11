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
              <h3>{{ __('Admin Reset Password') }}</h3>
              <p class="mb-4">Enter Your Email Address</p>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
             <form method="POST" action="{{ route('admin.password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

              <div class="form-group first {{$email ? 'field--not-empty' :''}} ">
                <label for="username">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
              </div>
                @if ($errors->has('email'))
                <span class="help-block font-red-mint">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif  
              <div class="form-group first @error('password') field--not-empty @enderror ">
                <label for="username">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              </div>
                @error('password')
                    <span class="help-block font-red-mint">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
              <div class="form-group first">
                <label for="username">{{ __('Confirm Password') }}</label>
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>

              <input type="submit" value="{{ __('Reset Password') }}" class="btn btn-block btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

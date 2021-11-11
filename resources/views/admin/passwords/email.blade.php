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
             <form method="POST" action="{{ route('admin.password.email') }}">
                        @csrf
              <div class="form-group first @error('email') field--not-empty @enderror ">
                <label for="username">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              </div>
                @if ($errors->has('email'))
                <span class="help-block font-red-mint">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

              <input type="submit" value="{{ __('Send Password Reset Link') }}" class="btn btn-block btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

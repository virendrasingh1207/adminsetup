  @extends('admin.layouts.app')
  @section('content')
  <div class="main_content_iner ">
        <div class="col-md-12 ">
            <div class="white_box mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" >Change Password</h3>
                    </div>
                </div>
                
                <div class="profile_card_5">
                    <div class="cover-photo">
                      <img src="{{auth()->guard('admin')->user()->profile ?  asset('Backend/profile/'.auth()->guard('admin')->user()->profile) : asset('Backend/img/card.jpg') }} " class="profile">
                    </div>
                    <div class="profile-name">{{auth()->guard('admin')->user()->name}}
                    <p class="">{{auth()->guard('admin')->user()->email}}</p></div>
                    {!! Form::open(['route' =>'updatePassword', 'method'=> 'post', 'enctype' => 'multipart/form-data', 'class' => 'changePasswordForm']) !!}
                        @csrf
                         
                        <div class="form-group">
                            <label for="exampleInputPassword1">Old Password</label>
                            <input type="password" name="old_password" class="form-control" id="exampleInputPassword1" required placeholder="Old Password">
                        </div>
                        @error('old_password')
                            <span class="help-block font-red-mint">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                        
                        <div class="form-group">
                            <label for="newpassword">New Password</label>
                            <input type="password" name="password" class="form-control" id="newpassword" required placeholder="New Password">
                        </div>
                        @error('password')
                            <span class="help-block font-red-mint">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                        
                        <div class="form-group">
                            <label for="exampleInputPassword3">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword3" required placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    {!! Form::close() !!}

                  </div>
            </div>
        </div>
    </div>
    @endsection
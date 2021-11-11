  @extends('admin.layouts.app')
  @section('content')
    <div class="main_content_iner ">
        <div class="col-md-12 ">
            <div class="white_box mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" >User Profile</h3>
                    </div>
                </div>
                <div class="pCard_card @error('profile') pCard_on @enderror">
                    

                    <div class="pCard_up" style="background-image: url({{auth()->guard('admin')->user()->profile ?  asset('Backend/profile/'.auth()->guard('admin')->user()->profile) : '' }})">
                    <div class="pCard_text">
                        <h2>{{auth()->guard('admin')->user()->name}}</h2>
                        <p>{{auth()->guard('admin')->user()->email}}</p>
                    </div>
                    <div class="pCard_add"><i class="fa fa-plus"></i></div>
                    </div>
                    <div class="pCard_down">
                    <div>
                        <p>Projects</p>
                        <p>126</p>
                    </div>
                    <div>
                        <p>Views</p>
                        <p>21,579</p>
                    </div>
                    <div>
                        <p>Likes</p>
                        <p>1,976</p>
                    </div>
                    </div>
                    <div class="pCard_back">
                          <div class="container-fluid p-0 sm_padding_15px">
                            <div class="row justify-content-center">
                            <div class="col-lg-6">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_body">
                                        {!! Form::open(['route' =>'updateProfile', 'method'=> 'post', 'enctype' => 'multipart/form-data', 'class' => 'container']) !!}

                                        @csrf
                                          {{--<div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="email" value="{{auth()->guard('admin')->user()->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                      <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>--}}
                                        <div class="form-group">
                                            <label for="exampleInputProfile">Profile</label>
                                            <input type="file" id="exampleInputProfile" name="profile">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        @error('profile')
                                        <span class="help-block font-red-mint">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
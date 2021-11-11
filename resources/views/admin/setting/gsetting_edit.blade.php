@extends('admin.layouts.app')

@section('content')
<div class="main_content_iner ">
        <div class="col-md-12 ">
            <div class="white_box mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" >Change Global Setting Details</h3>
                    </div>
                </div>
                 <form action="{{route('admin.global_setting.update')}}" id="settingForm" method="post" enctype="multipart/form-data">
                                            @csrf

        
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Basic</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#socialLinks" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Social Links</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#appLinks" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">App Links</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#websettings" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Web Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content p-3 text-muted">
                                            <div class="tab-pane active" id="settings" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control errorvalidator" id="name" placeholder="First name" value="{{$setting['name']}}" name="name" required>
                                                            @error('name')
                                                                <span class="error form-errors mb-0">{{ $message }}</span>
                                                            @enderror
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control errorvalidator" id="email" placeholder="Email" value="{{$setting['email']}}" name="email" required>
                                                        @error('email')
                                                        <span class="error form-errors mb-0">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="logo">Logo</label>
                                                        <input type="file" class="form-control errorvalidator" id="logo"  name="logo" >
                                                    @error('logo')
                                                    <span class="error form-errors mb-0">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                    <img src="{{asset('Backend/setting/'.$setting['logo']?? 'logo.png')}}" width="100">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="favicon">Favicon</label>
                                                        <input type="file" class="form-control errorvalidator" id="favicon"  name="favicon" >
                                                    @error('favicon')
                                                    <span class="error form-errors mb-0">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                     <img src="{{asset('Backend/setting/'.$setting['favicon'])}}" width="50">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Address</label>
                                                        <textarea class="form-control errorvalidator" id="address"  name="address" placeholder="Address" required> {{$setting['address']}}</textarea> 
                                                    @error('address')
                                                    <span class="error form-errors mb-0">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Footer</label>
                                                        <textarea class="form-control errorvalidator" placeholder="Footer" id="footer"  name="footer" required>{{$setting['footer']}}</textarea> 
                                                    @error('phone_no')
                                                    <span class="error form-errors mb-0">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email" class="col-xl-12">Phone No</label>
                                                        <input type="text" class="form-control w-100 col-xl-12 errorvalidator"value="{{$setting['phone_no']}}" id="phone_no" placeholder="phone number" name="phone_no" required>
                                                        <input type="hidden" name="fullphone_no" id="fullphone_no" value="">
                                                    @error('phone_no')
                                                    <span class="error form-errors mb-0">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                    <p class="phoneError"></p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="tab-pane" id="socialLinks" role="tabpanel">
                                                 <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Facebook</label>
                                                        <input type="text" class="form-control errorvalidator" placeholder="Facebook url" value="{{$setting['facebook']}}" id="facebook"  name="facebook" required>
                                                    @error('facebook')
                                                    <span class="error form-errors mb-0">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Twitter</label>
                                                        <input type="text" class="form-control errorvalidator" placeholder="Twitter url " value="{{$setting['twitter']}}" id="twitter"  name="twitter" required>
                                                    @error('twitter')
                                                    <span class="error form-errors mb-0">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="linkedin">Linkedin</label>
                                                            <input type="text" class="form-control errorvalidator"value="{{$setting['linkedin']}}" id="linkedin" placeholder="Linkedin Url"  name="linkedin" required>
                                                        @error('linkedin')
                                                        <span class="error form-errors mb-0">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="youtube">Youtube</label>
                                                            <input type="text" class="form-control errorvalidator"placeholder="Youtube Url" value="{{$setting['youtube']}}" id="youtube"  name="youtube" required>
                                                        @error('youtube')
                                                        <span class="error form-errors mb-0">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="instagram">Instagram</label>
                                                            <input type="text" class="form-control errorvalidator" placeholder="Instagram Url" value="{{$setting['instagram']}}" id="instagram"  name="instagram" required>
                                                        @error('instagram')
                                                        <span class="error form-errors mb-0">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="appLinks" role="tabpanel">
                                                 <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="playstore">Play Store</label>
                                                        <input type="text" class="form-control errorvalidator"value="{{$setting['play_store']}}" id="play_store" placeholder="playstore link" name="play_store" required>
                                                    @error('play_store')
                                                    <span class="error form-errors mb-0">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="app_store">App Store</label>
                                                        <input type="text" class="form-control errorvalidator"value="{{$setting['app_store']}}" id="app_store"  name="app_store" placeholder="Appstore Link" required>
                                                    @error('app_store')
                                                    <span class="error form-errors mb-0">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="tab-pane" id="websettings" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Longtitude</label>
                                                            <textarea class="form-control errorvalidator" id="longtitude" placeholder="longtitude" name="longtitude" required>{{$setting['longtitude']}}</textarea> 
                                                        @error('longtitude')
                                                        <span class="error form-errors mb-0">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Latitude</label>
                                                            <textarea class="form-control errorvalidator" id="latitude" placeholder="Latitude"  name="latitude" required>{{$setting['latitude']}}</textarea> 
                                                        @error('latitude')
                                                        <span class="error form-errors mb-0">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Google Analytic Script</label>
                                                            <textarea class="form-control errorvalidator" id="google_analytic_script"  name="google_analytic_script" placeholder="Google Analytic Script" required>{{$setting['google_analytic_script']}}</textarea> 
                                                        @error('google_analytic_script')
                                                        <span class="error form-errors mb-0">{{ $message }}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Update Settings</button>
                                        </form>
               
        </div>
        </div>
    </div>


@push('scripts')

<script>
     var phone_number = window.intlTelInput(document.querySelector("#phone_no"),{
        separateDialCode: true,
        preferredCountries:["ae"],
        nationalMode: false,
        formatOnDisplay: false,
        utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js"
      }); 

</script>
@endpush


      <style type="text/css">
        .iti.iti--allow-dropdown.iti--separate-dial-code{
      width:calc(100% ) !important;
    }
      </style>
@endsection
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('Backend/login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('Backend/login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Backend/login/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('Backend/login/css/style.css')}}">
    @toastr_css

    <title>{{Config::get('app.name')}}</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      @yield('content')
    </div>
  </div>

  
    <script src="{{asset('Backend/login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('Backend/login/js/popper.min.js')}}"></script>
    <script src="{{asset('Backend/login/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Backend/login/js/main.js')}}"></script>
@toastr_js
@toastr_render
  </body>
</html>
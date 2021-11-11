<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Papaya</title>
      @include('admin.layouts.header_style')
</head>
<body class="crm_body_bg">
  @include('admin.layouts.sidebar')
<section class="main_content dashboard_part large_header_bg">
@include('admin.layouts.navbar')
@yield('content')

  @include('admin.layouts.footer')
  @include('admin.layouts.modals')

</html>

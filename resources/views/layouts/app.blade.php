<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Basic Site</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
</head>
<body>
    @include('inc.navbar')


  <div class="container">
      @if(Request::is('/'))
  @include('inc.showcase')
  @endif
    <div class="row m-3">
        <div class="col-lg-8 col-md-8">
           @include('inc.message')
    @yield('content')
    </div>
    <div class="col-lg-4 col-md-4">
   @include('inc.sidebar')
    </div>
   </div>
<div id="footer" class="text-center">
    <p>Copyright 2020 &copy;LaravelBasic</p>
</div>
   </div>
   <script src="{{asset('/js/jquery.js')}}"></script>
</body>
</html>
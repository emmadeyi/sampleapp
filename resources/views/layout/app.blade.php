<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sample Site</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css" />
</head>
<body>
  @include('inc.navbar')

  <div class="container p-3">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
    <div class="row">
      <div class="col-md-8 col-lg-8 mt-4">
          @include('inc.messages')
          @yield('content')
      </div>
      <div class="col-md-4 col-lg-4 mt-4">
          @include('inc.sidebar')
      </div>
    </div>
  </div>
  

  <footer class="text-center bg-dark text-light py-3">
    <p>Copyright 2018 &copy; </p>
  </footer>
  
</body>
</html>
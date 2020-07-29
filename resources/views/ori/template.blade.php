<!DOCTYPE html> 
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>Karangtaruna</title>

  <link href="{{ asset('bootstrap-3.3.6-dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
  @include('navbar')
  <div class="container">
    
  @yield('main')
  </div>
  
  @yield('footer')

<script src="{{asset('js/jquery-2.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('bootstrap-3.3.6-dist/js/bootstrap.min.js')}}"></script>
</body>

</html>
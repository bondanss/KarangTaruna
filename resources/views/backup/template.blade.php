<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Karangtaruna</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="Reveal/img/favicon.png" rel="icon">
  <link href="Reveal/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="{{ asset('bootstrap-3.3.6-dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="Reveal/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="Reveal/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="Reveal/lib/animate/animate.min.css" rel="stylesheet">
  <link href="Reveal/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="Reveal/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="Reveal/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="Reveal/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="Reveal/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  @include('navbar')
  <div class="container">
    
    @yield('main')
  </div>
    @yield('footer')
    @include('footer')
<!-- JavaScript Libraries -->
  <script src="Reveal/lib/jquery/jquery.min.js"></script>
  <script src="Reveal/lib/jquery/jquery-migrate.min.js"></script>
  <script src="Reveal/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Reveal/lib/easing/easing.min.js"></script>
  <script src="Reveal/lib/superfish/hoverIntent.js"></script>
  <script src="Reveal/lib/superfish/superfish.min.js"></script>
  <script src="Reveal/lib/wow/wow.min.js"></script>
  <script src="Reveal/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="Reveal/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="Reveal/lib/sticky/sticky.js"></script>

 <!--  <script src="{{asset('js/jquery-2.2.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('bootstrap-3.3.6-dist/js/bootstrap.min.js')}}"></script>
 -->
  <!-- Contact Form JavaScript File -->
  <script src="Reveal/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="Reveal/js/main.js"></script>
</body>
</html>
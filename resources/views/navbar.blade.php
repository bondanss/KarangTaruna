<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Karangtaruna</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('Reveal/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('Reveal/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('Reveal/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('Reveal/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Reveal/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Reveal/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Reveal/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Reveal/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('Reveal/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('Reveal/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    
    <div class="container clearfix">
      @if (Auth::check())
        <div class="contact-info float-right">
          <i class="fa fa-envelope-o"></i> <a href="#">{{ Auth::user()->email }}</a>
          <i> | </i>
          <i></i> <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
        </div>
      @else
        <div class="contact-info float-right">
        <i></i> <a href="{{ route('login') }}">{{ __('Login') }}</a>
        <!-- <i class="fa fa-phone"></i> +62 812 1105 3115 -->
      </div>
      @endif
      <!-- <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div> -->
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{ url('/') }}" class="scrollto">Karang<span>taruna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <!-- <li class="menu-active"><a href="#body">Home</a></li> -->

          {{-- Home --}}
          @if (!empty($halaman) && $halaman == '/')
            <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
          @else
            <li><a href="{{ url('/') }}">Home</a></li>
          @endif
          
          {{-- Anggota --}}
          @if (!empty($halaman) && $halaman == 'anggota')
            <li class="menu-active"><a href="{{ url('anggota') }}">Anggota</a></li>
          @else
            <li><a href="{{ url('anggota') }}">Anggota</a></li>
          @endif

          {{-- Kelurahan --}}

          @if (Auth::check())
            @if (!empty($halaman) && $halaman == 'kelurahan')
              <li class="menu-active"><a href="{{ url('kelurahan') }}">Kelurahan</a></li>
            @else
              <li><a href="{{ url('kelurahan') }}">Kelurahan</a></li>
            @endif
          @endif

          @if (Auth::check())
            @if (!empty($halaman) && $halaman == 'hobi')
              <li class="menu-active"><a href="{{ url('hobi') }}">Hobi</a></li>
            @else
              <li><a href="{{ url('hobi') }}">Hobi</a></li>
            @endif
          @endif

          {{-- About --}}
          @if (!empty($halaman) && $halaman == 'about')
            <li class="menu-active"><a href="{{ url('about') }}">About</a></li>
          @else
            <li><a href="{{ url('about') }}">About</a></li>
          @endif

<!--     
          @if (!empty($halaman) && $halaman == 'contact')
            <li class="menu-active"><a href="{{ url('contact') }}">Contact</a></li>
          @else
            <li><a href="{{ url('contact') }}">Contact</a></li>
          @endif -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
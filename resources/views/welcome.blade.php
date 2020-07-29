@extends('template')

@section('main')

<!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      @if (Auth::check())
        <h2>Selamat Datang<br><span>{{ Auth::user()->name }}!</span></h2>
      @else
        <h2>Selamat <span>Datang!</span></h2>
      @endif
      <div>
        <a href="{{ url('anggota') }}" class="btn-get-started scrollto">Lihat Data Anggota</a>
        <a href="{{ url('about') }}" class="btn-projects scrollto">Tentang Aplikasi</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('Reveal/img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('Reveal/img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('Reveal/img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('Reveal/img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('Reveal/img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->


@stop

@section('footer')
@stop
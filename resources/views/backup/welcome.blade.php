@extends('template')

@section('main')

<!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Selamat <span>Datang</span><br>@user!</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Lihat Data Anggota</a>
        <a href="#portfolio" class="btn-projects scrollto">Tentang Aplikasi</a>
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
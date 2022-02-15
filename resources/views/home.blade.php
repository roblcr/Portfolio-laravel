@extends('layouts.app1')

@section('title')
    Portfolio - Lecullier Robin
@endsection

  @section('content')
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{$about[0]->name}}</h1>
      <p>Je suis <span class="typed" data-typed-items="Developer"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
            @include('includes.about')
    <!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
            @include('includes.skills')
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
            @include('includes.rezume')
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
            @include('includes.portfolio')
    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->

    <!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection


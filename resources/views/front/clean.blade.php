@extends('layouts.master')
@section('content')
    <section class="u-clearfix u-section-1 container">
        <h1 class="text-center u-custom-font">{{ __('about_.store_name') }}</h1>
        <div class="row">

            <p class="text-center text-break fst-italic lh-1 u-custom-font">
                {{ __('about_.section_1') }}
                <br>

                {{ __('about_.section_2') }}
                <br><br>
                {{ __('about_.section_3') }}
                <br>
                {{ __('about_.section_4') }}
            </p>
        </div>
    </section>
    
    <section class="container chooseClass0 my-5">
        <div class="d-flex justify-center">
          <img src="{{ asset('/assets/images/soufKitchen.jpg') }}" alt="" style="max-width: 100%;">
        </div>
        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="max-width: 100%" src="{{ asset('/assets/images/friends.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  style="max-width: 100%" src="{{ asset('/assets/images/library.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="max-width: 100%" src="{{ asset('/assets/images/kais.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </section>
@endsection

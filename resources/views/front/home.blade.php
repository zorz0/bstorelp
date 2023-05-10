@extends('layouts.master')

@section('content')
    <section class="container-fluid">
        <div class="row ">
            <div class="col-12 w-100" style="height: 70vh;">
              <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
                <div class="carousel-inner h-100 " style="border-radius: 3rem">
                  <div class="carousel-item active h-100">
                    <img class="d-block w-100 h-100" src="{{ asset('/assets/bks') }}/images/iStock-1081560570-1591947820.jpg" alt="First slide" style="object-fit: cover;">
                  </div>
                  <div class="carousel-item h-100">
                    <img class="d-block w-100 h-100" src="{{ asset('/assets/bks') }}/images/iStock-1081560570-1591947820.jpg" alt="Second slide" style="object-fit: cover;">
                  </div>
                  <div class="carousel-item h-100">
                    <img class="d-block w-100 h-100" src="{{ asset('/assets/bks') }}/images/iStock-1081560570-1591947820.jpg" alt="Third slide" style="object-fit: cover;">
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
            </div>
          </div>
          <div class="row">
            <div class="col-8 mx-auto">
          
              <p class="text-justify u-custom-font">  {{ __('master.wsuf_info') }}</p>

            </div>
          </div>
          <div class="row">
            <div class="col-8 mx-auto text-center">
                <a href={{ url('/about') }}><button
                    class="general-btn border-0 text-white h4 p-3 m-3"> {{ __('master.continue_reading') }}
                </button>
            </div>
          </div>
    
    </section>

    <section class="container">
        <img class="u-image u-image-contain u-image-default lazyload u-image-3" alt=""
            data-src="{{ asset('/assets/bks') }}/images/dots.png">
        <p class="text-center u-custom-font  ">
            {{ __('master.wsuf_food_quality') }}
        </p>
        <div class="col-md-12 col-sx-4 store">
            @foreach ($latestCategory as $record)
                <div class="col-md-3 stor-item">
                    {{-- <img class="u-image u-image-contain u-image-default lazyload u-image-3" alt=""
                    data-src="{{ asset('/assets/bks') }}/images/Artboard 18.png"> --}}
                    <a href="{{ route('allproduct', $record->id) }}"> <button
                            class=" col-sm-10 general-btn category-btn text-white border-0 h2 p-xl-4 p-md-2">{{ $record->name }}</button></a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container-fluid">
        <div class="u-khayba" style="z-index:5">
            <p class="text-justify" id="ImgText" style="color: white;">{{ __('app.Image_text') }}</p>

        </div>
      <div class="container-fluid">
    <div class="row" id="cutomeDiv3">
        <a class="u-custom-font" id="beforeBtn" style="text-decoration: none;
        font-size: 1.5rem;
        text-align: center;
    
        margin-left: 45%;
        z-index: 561;
       
        position: absolute;
        margin-top: -5px;" href="/store">{{ __('master.goShop') }}</a>

        <div class="col-md-12 position-relative p-0">
            <img id="myImage" style="margin-top:-140px;width: 100%;" src="{{ asset('assets/images/BeforeBtn.png') }}" alt="...">
            <div class="position-absolute top-50 start-50 translate-middle text-center ">
            </div>
        </div>
    </div>
</div>

          
        
        <div class="u-khayba-footer">
            
        </div>
    </section>

    <section class="u-clearfix u-section-1" id="NewBtn">
        <div>
            {{-- <img class="u-image u-image-contain u-image-default lazyload u-image-2" alt=""
                data-src="{{ asset('/assets/bks') }}/images/news.png"> --}}
            <div class=" text-center"> <a href={{ url('/news') }}><button
                        class="general-btn  border-0  text-white h4 p-3 m-3 "> {{ __('master.ourNews') }}
                    </button></a></div>
        </div>
        <div class="col-md-12 col-sx-4" id="test">
            @foreach ($latestBlogs as $record)
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="fauxcrop">
                      <a href="{{ route('news.details', ['id' => $record->id]) }}"><img alt="News Entry" src="{{ asset('/storage/imgs/' . $record->image) }}"></a>
                    </div>
                </div>
            @endforeach
            {{-- <div class="ct-blog col-sm-6 col-md-4">
                <div class="fauxcrop">
                    <a href="#"><img alt="News Entry" src="{{ asset('/assets/bks') }}/images/news2.png"></a>
                </div>
            </div>
            <div class="ct-blog col-sm-6 col-md-4">
                <div class="fauxcrop">
                    <a href="#"><img alt="News Entry" src="{{ asset('/assets/bks') }}/images/news3.png"></a>
                </div>
            </div> --}}
        </div>
    </section>
    <script>
      setTimeout(() => {
        btn= document.getElementById("beforeBtn");
        const image = document.getElementById('myImage');

        btn.addEventListener('mouseout', function() {
  image.src = 'assets/images/BeforeBtn.png';
  console.log("NoChange");

  document.getElementById("beforeBtn").style.color="black";

});

btn.addEventListener('mouseover', function() {
  image.src = 'assets/images/archAfter.png';
  console.log("change");
  document.getElementById("beforeBtn").style.color="white";

});
      }, 1500);
    </script>
@endsection

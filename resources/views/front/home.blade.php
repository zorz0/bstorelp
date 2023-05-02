@extends('layouts.master')

@section('content')
    <section class="u-clearfix u-section-1">

        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-contain u-image-default lazyload u-image-1" alt="" data-image-width="298"
                data-image-height="296" data-src="{{ asset('/assets/bks') }}/images/-1.png">
            <div class="u-align-center u-carousel u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1"
                data-interval="5000" data-u-ride="carousel" id="carousel-2a64">
                <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                    <li data-u-target="#carousel-2a64" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle"
                        style="width: 10px; height: 10px;"></li>
                    <li data-u-target="#carousel-2a64" data-u-slide-to="1" class="u-grey-70 u-shape-circle"
                        style="width: 10px; height: 10px;"></li>
                </ol>
                <div class="u-carousel-inner u-gallery-inner" role="listbox">
                    <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
                        <div class="u-back-slide" data-image-width="1254" data-image-height="836">
                            <img class="u-back-image u-expanded lazyload"
                                data-src="{{ asset('/assets/bks') }}/images/iStock-1081560570-1591947820.jpg">
                        </div>
                    </div>
                    <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
                        <div class="u-back-slide" data-image-width="1254" data-image-height="836">
                            <img class="u-back-image u-expanded lazyload"
                                data-src="{{ asset('/assets/bks') }}/images/iStock-1081560570-1591947820.jpg">
                        </div>
                    </div>
                </div>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1"
                    href="#carousel-2a64" role="button" data-u-slide="prev">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2"
                    href="#carousel-2a64" role="button" data-u-slide="next">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
            <p class="u-align-center u-custom-font u-text u-text-1" data-lang-en=""></p>
            <div style="direction: rtl;">
                <p class="u-align-center u-custom-font u-text u-text-1">
                    {{ __('master.wsuf_info') }}
                </p>
            </div>
            {{-- <img class="u-image u-image-contain u-image-default lazyload u-image-2" alt=""
                data-src="{{ asset('/assets/bks') }}/images/-2.png"> --}}
            <div class=" text-center"> <a href={{ url('/about') }}><button
                        class="general-btn border-0 text-white h4 p-3 m-3"> {{ __('master.continue_reading') }}
                    </button></a></div>

        </div>
    </section>

    <section class="u-clearfix u-section-1">
        <img class="u-image u-image-contain u-image-default lazyload u-image-3" alt=""
            data-src="{{ asset('/assets/bks') }}/images/dots.png">
        <p class="u-align-center u-custom-font u-text u-text-1">
            {{ __('master.wsuf_food_quality') }}
        </p>
        <div class="col-md-12 col-sx-4 store">
            @foreach ($latestCategory as $record)
                <div class="col-md-3 stor-item">
                    {{-- <img class="u-image u-image-contain u-image-default lazyload u-image-3" alt=""
                    data-src="{{ asset('/assets/bks') }}/images/Artboard 18.png"> --}}
                    <a href="{{ route('products', $record->id) }}"> <button
                            class=" col-sm-10 general-btn category-btn text-white border-0 h2 p-xl-4 p-md-2">{{ $record->name }}</button></a>
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <div class="u-khayba" style="z-index:5">
            <p style="color: white; font-size:1.3rem;">{{ __('app.Image_text') }}</p>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 position-relative p-0">
                    <img id="myImage" style=" margin-top:-90px;width: 100%;" src="{{ asset('assets/images/BeforeBtn.png') }}" alt="..." >
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <h2><a class="u-custom-font" id="beforeBtn" style="text-decoration: none; font-size:1.5rem" href="/store">{{ __('master.goShop') }}</a></h2>
                    </div>
                </div>
            </div>
            
          </div>
          
        
        <div class="u-khayba-footer">
            
        </div>
    </section>

    <section class="u-clearfix u-section-1">
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
                        <a href="{{ route('news.details', ['id' => $record->id]) }}"><img alt="News Entry" src="{{ asset('/storage/imgs/'.$record->image) }}"></a>
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
        console.log("hey")
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

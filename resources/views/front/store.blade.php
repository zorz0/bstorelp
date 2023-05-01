@extends('layouts.master')
@section('content')
    <section class="u-clearfix u-section-1">

        <div>
            <div class="u-align-center u-carousel u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-2"
                data-interval="5000" data-u-ride="carousel" id="carousel-2a64">
                <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                    <li data-u-target="#carousel-2a64" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle"
                        style="width: 10px; height: 10px;"></li>
                    <li data-u-target="#carousel-2a64" data-u-slide-to="1" class="u-grey-70 u-shape-circle"
                        style="width: 10px; height: 10px;"></li>
                </ol>
                <div class="u-carousel-inner u-gallery-inner" role="listbox" style="border-radius: 0;">
                    <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
                        <div class="u-back-slide" data-image-width="100%" data-image-height="836">
                            <img class="u-back-image u-expanded lazyload"
                                data-src="{{ asset('/assets/bks') }}/images/iStock-1081560570-1591947820.jpg">
                        </div>
                    </div>
                    <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
                        <div class="u-back-slide" data-image-width="100%" data-image-height="836">
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
        </div>
    </section>


    <section class="u-clearfix u-section-1 container">
        <div class="row store">
            <div class="container">

                <div class="col-md-2 box3">
                    <h3>
                                                {{ __('store_.security.title') }}

                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        {{ __('store_.security.content') }}
                    </p>
                </div>
                <div class="col-md-2 box">
                    <h3>
                        {{ __('store_.health.title') }}

                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        {{ __('store_.health.content') }}
                    </p>
                </div>
                <div class="col-md-2 box">
                    <h3>
                        {{ __('store_.cleanliness.title') }}
                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        {{ __('store_.cleanliness.content') }}
                    </p>
                </div>
                <div class="col-md-2 box">
                    <h3>
                        {{ __('store_.quality.title') }}

                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        {{ __('store_.security.content') }}
                    </p>
                </div>
                <div class="col-md-2 box2">
                    <h3>
                        {{ __('store_.delivery.title') }}
                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        {{ __('store_.delivery.content') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>


    @foreach ($categories as $value)
    <div class="row">

        <section class="u-clearfix u-section-1 container-fluid">
            <div class="row store">
                <div class="col-sm-3">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="image-container">
                                <a href="#">
                                    <img class="category img-fluid" style="filter: brightness(0.5);  height: 350px;"
                                         alt="khayba" src="{{ asset('storage/imgs/' . $value->image) }}">
                                </a>
                                <div class="text-container customfont u-custom-font">
                                    <p>{{ $value->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @foreach ($value->products as $product)
                   
                    
                <div class="col-sm-2 ContainerProduct  ">
                    <div class="card">
                        <div class="card-body">
                            <form id="FormCard" action="{{ route('showProduct', ['id' => $product->id]) }}" method="post">
                                @csrf
                                <h5 class="card-title text-center  customfont u-custom-font " style="font-size:1.4rem">{{ $product->name }}</h5>
                                <p class="card-text text-center customfont u-custom-font " style="font-size:1.2rem">{{ $product->description }}</p>
                                <hr class="myhr">
                                <img class="myimg mx-auto d-block" width="" alt="product" src="/storage/img/{{ $product->image }}">
                                <hr class="myhr ">
                                @auth
                                    @if ($product->sizes[0] != 'null')
                                        <div class="d-flex justify-content-center">
                                            <button type="submit">{{ __('store_.buttons.show_product') }}</button>
                                        </div>
                                        <p style="font-weight: bold; " class="text-center customfont u-custom-font " style="font-size:1.3rem">{{ $product->price }} د.أ</p>
                                        <h3>
                                    @endif
                                @endauth
                            </form>
                        </div>
                    </div>
                </div>
                
                     
                       
                @endforeach
                <div class="col-sm-3" style="display: flex;
                justify-content: center;
                align-items: center;">
                    <div class="card border-0">
                        <div class="card-body" >
                          
                    <a href="{{ route('allproduct', ['id' => $value->id]) }}">
                        <button type="button" class="btn btn-success" style=" color: green;
                        font-weight: bold; background-color: #bfdd1d;    border-radius: 20px 0px 0px 20px; padding: 25px; border:0;">{{ __('store_.buttons.watch_more') }}</button>
                        </a>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <br>
        <br>
    @endforeach
   

    <section class="container my-5">
        <h2 class="text-center customfont u-custom-font">{{ __('store_.messages.assurance') }}</h2>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/person.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">{{ __('store_.messages.login') }} </h2>
                <p class="customfont u-custom-font"> {{ __('store_.messages.add_information') }}</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/chart.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">{{ __('store_.messages.add_cart_products') }}  </h2>
                <p class="customfont u-custom-font">{{ __('store_.messages.add_favorite_products_to_cart') }}   </p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/rightSign.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">{{ __('store_.messages.order_check') }} </h2>
                <p class="customfont u-custom-font">{{ __('store_.messages.order_check_information') }} </p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/customer.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font"> {{ __('store_.messages.delivery_confirm') }}  </h2>
                <p class="customfont u-custom-font">  {{ __('store_.messages.delivery_confirm_information') }}   </p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/car.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">  {{ __('store_.messages.one_day_shipping') }}</h2>
                <p class="customfont u-custom-font">  {{ __('store_.messages.one_day_shipping_information') }}   </p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/heart.png') }}" alt="">
            <div class="contentVa">
                <h2 class="text-danger"> {{ __('store_.messages.enjoy_delicious_meals') }}</h2>
            </div>
        </div>
    </section>
    <section style="margin-bottom: 150px">
        <div class="chooseEat container text-center py-2 my-5 ">
            <h2 class="text-white"> {{ __('store_.messages.choose_delicious_meals') }} </h2>
        </div>
    </section>
    <div class=" text-center">

        <img src="{{ asset('/assets/images/shopping-cart .png') }}"
            style="height: 100px;transform: rotate(20deg);position: absolute;margin-left: -80px;margin-top: -10px;"
            alt="">

            <button type="button" class="btn btn-success " style="  margin-left: 18px; background-color: #bfdd1d;  color:#6B7265; font-size: 25px;
            font-weight: bold;  border-radius: 0 30px 22px 0; text-shadow: 0 0 2px black; padding: 20px;margin-top: 18px; border:0; transform: skew(-30deg);"> {{ __('store_.buttons.shop_now') }}</button>

    </div>
    <div class="row mt-2">
        <div class="col text-center">
            
            <div class=" mt-2 rounded-circle d-inline-block" style="width: 30px; height: 30px; background-color:#bbcf3f;"></div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div
                style="padding-right: 40px;margin-bottom: 130px; padding-bottom: 10px; height: 160px;width: 100%;overflow: hidden;position: relative;padding-left: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250" style="transform: scaleY(-1);">
                    <path fill="#bbcf3f" fill-opacity="1"
                        d="M0,224L120,202.7C240,181,480,139,720,144C960,149,1200,181,1320,202.7L1440,224V0H1320C1200,0,960,0,720,0C480,0,240,0,120,0H0V224Z">
                    </path>
                </svg>
                <h2 class="customfont u-custom-font" id="BestSelling"
                    style="    text-shadow: 0 0 2px black;
               position: absolute;margin-top: 50px;top: 50%;left: 50%;transform: translate(-50%, -50%);font-size: 55px;font-weight: bold;">
                {{ __('store_.messages.Best_selling_products') }}  </h2>
            </div>

        </div>
        {{-- here --}}
        <div class="row store">
            @foreach ($allMostProduct as $item)
               
                <div class="col-sm-3 ContainerProduct  ">
                    <div class="card">
                        <div class="card-body">
                            <form id="FormCard" action="{{ route('showProduct', ['id' => $item->productData[0]->id]) }}" method="post">

                                @csrf
                                <h5 class="card-title text-center  customfont u-custom-font " style="font-size:1.4rem">{{ $item->productData[0]->name }}</h5>
                                <p class="card-text text-center customfont u-custom-font " style="font-size:1.2rem"> {{ $item->productData[0]->description }}</p></p>
                                <hr class="myhr">
                                <img class="myimg mx-auto d-block" width="" alt="product" src="/storage/img/{{$item->productData[0]->image}}">
                                <hr class="myhr ">
                                @auth
                                @if ($item->sizes[0]->id != '')
                                    <div class="d-flex justify-content-center">
                                        <button type="submit">{{ __('store_.buttons.show_product') }}</button>
                                    </div>
                                    <p style="font-weight: bold; " class="text-center customfont u-custom-font " style="font-size:1.3rem">{{ $product->price }} د.أ</p>
                                    <h3>
                                @endif
                            @endauth
                                    </form>
                           
                        </div>
                    </div>
                </div>
                
            @endforeach
            <div class="col-sm-3" style="display: flex;
            justify-content: center;
            align-items: center;">
                <div class="card border-0">
                    <div class="card-body" >
                      
                <a href="http://127.0.0.1:8000/category/2">
                    <button type="button" class="btn btn-success" style=" color: green;
                    font-weight: bold; background-color: #bfdd1d;    border-radius: 20px 0px 0px 20px; padding: 25px; border:0;">{{ __('store_.buttons.watch_more') }}</button>
                    </a>
                    </div>
                </div>
            </div>
         
        </div>
        

        <section class="container chooseClass0 my-5">
            <div class="d-flex justify-center">
                <img src="{{ asset('/assets/images/soufKitchen.jpg') }}" alt="">
            </div>
            <div class="chooseClass customfont u-custom-font">
                <img src="{{ asset('/assets/images/friends.jpg') }}" alt="">
                <h2>
                    {{ __('store_.messages.who_make_our_food') }}
                </h2>
            </div>
            <div class="chooseClass">
                <h2 class="customfont u-custom-font">
                    {{ __('store_.messages.storing_details') }}
                </h2>
                <img src="{{ asset('/assets/images/library.jpg') }}" alt="">
            </div>
            <div class="chooseClass">
                <img src="{{ asset('/assets/images/kais.jpg') }}" alt="">
                <h2 class="customfont u-custom-font">
                    {{ __('store_.messages.packing_details') }}
                </h2>
            </div>
        </section>

        <section class="my-5">
            <div class="row mt-2">
                <div class="col text-center">
                    <div class=" mt-2 rounded-circle d-inline-block" style="width: 30px; height: 30px; background-color:black;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div
                        style="padding-right: 40px; margin-bottom: 130px; padding-bottom: 10px; height: 160px; width: 100%; overflow: hidden; position: relative; padding-left: 40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250"
                            style="transform: scaleY(-1);">
                            <path fill="#11111" fill-opacity="1"
                                d="M0,224L120,202.7C240,181,480,139,720,144C960,149,1200,181,1320,202.7L1440,224V0H1320C1200,0,960,0,720,0C480,0,240,0,120,0H0V224Z">
                            </path>
                        </svg>

                        <h2 id="NonSugar" class="customfont u-custom-font "
                            style="color:white; text-shadow: black 0px 0px 2px; position: absolute; margin-top: 50px; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 40px; font-weight: bold;">
                             {{ __('store_.messages.sugar_free') }} </h2>
                    </div>
                </div>
            </div>
        </section>
      
        @foreach ($categories as $value)
        @if (
            $value->id==1
        )
            
    
        <div class="row">

        <section class="u-clearfix u-section-1 container-fluid">
            <div class="row store">
             
                
                @foreach ($value->products as $product)
                   
                    
                <div class="col-sm-4 ContainerProduct">
                    <div class="card">
                        <div class="card-body">
                            <form id="FormCard" action="{{ route('showProduct', ['id' => $product->id]) }}" method="post">
                                @csrf
                                <h5 class="card-title text-center  customfont u-custom-font " style="font-size:1.4rem">{{ $product->name }}</h5>
                                <p class="card-text text-center customfont u-custom-font " style="font-size:1.2rem">{{ $product->description }}</p>
                                <hr class="myhr">
                                <img class="myimg mx-auto d-block" width="" alt="product" src="/storage/img/{{ $product->image }}">
                                <hr class="myhr ">
                                @auth
                                    @if ($product->sizes[0] != 'null')
                                        <div class="d-flex justify-content-center">
                                            <button type="submit">{{ __('store_.buttons.show_product') }}</button>
                                        </div>
                                        <p style="font-weight: bold; " class="text-center customfont u-custom-font " style="font-size:1.3rem">{{ $product->price }} د.أ</p>
                                        <h3>
                                    @endif
                                @endauth
                            </form>
                        </div>
                    </div>
                </div>
                
                     
                       
                @endforeach
                <div class="col-sm-3" style="display: flex;
                justify-content: center;
                align-items: center;">
                    <div class="card border-0">
                        <div class="card-body" >
                          
                    <a href="{{ route('allproduct', ['id' => $value->id]) }}">
                        <button type="button" class="btn btn-success" style=" color: green;
                        font-weight: bold; background-color: #bfdd1d;    border-radius: 20px 0px 0px 20px; padding: 25px; border:0;">{{ __('store_.buttons.watch_more') }}</button>
                        </a>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <br>
        <br>
        @endif
    @endforeach
   

        <section class="mt-5">
            <div class="container">
                <img src="/assets/images/stoneCover.jpg" alt="Snow" style="width:100%;">

                <div class="centered">
                    <h1 class="container2">  {{ __('store_.shop_name') }}<br>  {{ __('store_.messages.story_start') }}   <span>
                            <a id="btn" href={{ url('/about') }}><button
                                    class="general-btn border-0 text-white h3 p-3 m-4">{{ __('store_.buttons.know_about') }}
                                    </button></a></span></h1>
                </div>
            </div>

        </section>
        
    @endsection
 
      
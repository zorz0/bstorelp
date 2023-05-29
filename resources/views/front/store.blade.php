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
                  @foreach ($SliderImage as $image )
                  <div class="carousel-item h-100">
                    <img class="d-block w-100 h-100" src="{{ asset('storage/slider_images/'.$image->image) }}" alt="Second slide">
                  </div>
                  @endforeach
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
    </section>


    <section class="u-clearfix u-section-1 container">
        <div class="row store">
            <div class="container">

                <div class="col-md-2 box3 F1 text-center">
                    <h3>
                     {{ __('store_.security.title') }}

                    </h3>
                    <p class="font-weight-bolder u-custom-font text-center">
                        {{ __('store_.security.content') }}
                    </p>
                </div>
                <div class="col-md-2 box F1 text-center">
                    <h3>
                        {{ __('store_.health.title') }}

                    </h3>
                    <p class="font-weight-bolder u-custom-font text-center">
                        {{ __('store_.health.content') }}
                    </p>
                </div>
                <div class="col-md-2 box F1 text-center">
                    <h3>
                        {{ __('store_.cleanliness.title') }}
                    </h3>
                    <p class="font-weight-bolder u-custom-font text-center">
                        {{ __('store_.cleanliness.content') }}
                    </p>
                </div>
                <div class="col-md-2 box F1 text-center">
                    <h3>
                        {{ __('store_.quality.title') }}

                    </h3>
                    <p class="font-weight-bolder u-custom-font text-center">
                        {{ __('store_.security.content') }}
                    </p>
                </div>
                <div class="col-md-2 box2 F1 text-center" >
                    <h3>
                        {{ __('store_.delivery.title') }}
                    </h3>
                    <p class="font-weight-bolder u-custom-font text-center">
                        {{ __('store_.delivery.content') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>



    @foreach ($categories as $value)

    
        <section class="u-clearfix u-section-1 container-fluid">
            <div class="row store">
                <div class="col-sm-3">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="image-container">
                                <a href="{{ route('allproduct', ['id' => $value->id]) }}">
                                    <img class="category img-fluid" style="filter: brightness(0.5);  height: 400px;"
                                         alt="khayba" src="{{ asset('storage/imgs/' . $value->image) }}">
                                </a>
                                <div class="text-container customfont u-custom-font">
                                    <p >{{ getDirection() == 'rtl' ? $value->name : $value->name_english }}</p>
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
                                <h5 class="card-title text-center  customfont u-custom-font " style="font-size:1.5rem">{{ getDirection() == 'rtl' ? $product->name : $product->name_english }}</h5>
                                <p class="card-text text-center customfont u-custom-font " style="font-size:1rem">{{ getDirection() == 'rtl' ? $product->description : $product->description_english }}</p>
                                <hr class="myhr">
                                <img class="myimg mx-auto d-block" width="" alt="product" src="/storage/img/{{ $product->image }}">
                                <hr class="myhr ">
                            
                                    @if ($product->sizes[0] !== "null")
                                        <div class="d-flex justify-content-center">
                                            <button type="submit">{{ __('store_.buttons.show_product') }}</button>
                                        </div>
                                        <p style="font-weight: bold; " dir="{{getDirection()}}" class="text-center customfont u-custom-font " style="font-size:1.3rem">{{ $product->price }} <span>{{ __('store_.buttons.currency') }}</span></p>
                                        <h3>
                                    @endif
                                
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
            <img id="PersonImg" src="{{ asset('/assets/images/person.png') }}" alt="">
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
            <img id="rightsign" src="{{ asset('/assets/images/rightSign.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">{{ __('store_.messages.order_check') }} </h2>
                <p class="customfont u-custom-font">{{ __('store_.messages.order_check_information') }} </p>
            </div>
        </div>
        <div class="contentVa0">
            <img id="cutsomericon" src="{{ asset('/assets/images/customer.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font"> {{ __('store_.messages.delivery_confirm') }}  </h2>
                <p class="customfont u-custom-font">  {{ __('store_.messages.delivery_confirm_information') }}   </p>
            </div>
        </div>
        <div class="contentVa0">
            <img id="Caricon" src="{{ asset('/assets/images/car.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">  {{ __('store_.messages.one_day_shipping') }}</h2>
                <p class="customfont u-custom-font">  {{ __('store_.messages.one_day_shipping_information') }}   </p>
            </div>
        </div>
        <div class="contentVa0 ">
            <img id="hearticon" src="{{ asset('/assets/images/heart.png') }}" alt="">
            <div class="contentVa ">
                <h2 class="text-danger text-center"> {{ __('store_.messages.enjoy_delicious_meals') }}</h2>
            </div>
        </div>
    </section>
    <section class="container-fluid my-5">
        <div class="chooseEat container text-center py-2 my-5" style="max-width: 95%">
            <h2 class="text-white" > {{ __('store_.messages.choose_delicious_meals') }} </h2>
        </div>
    </section>
    <section class="container my-5">

    <div class=" text-center">

        <img src="{{ asset('/assets/images/shopping-cart .png') }}"
            style="height: 100px;transform: rotate(20deg);position: absolute;margin-left: -80px;margin-top: -10px;"
            alt="">

            <button type="button" class="btn btn-success " style="  margin-left: 18px; background-color: #bfdd1d;  color:#6B7265; font-size: 25px;
            font-weight: bold;  border-radius: 0 30px 22px 0;  padding: 20px;margin-top: 18px; border:0; transform: skew(-30deg);"> {{ __('store_.buttons.shop_now') }}</button>

    </div>
    </section>
    <section class="container my-5">

    <div class="row mt-2">
        <div class="col text-center">
            
            <div class=" mt-2 rounded-circle d-inline-block" style="width: 30px; height: 30px; background-color:#bbcf3f;"></div>
        </div>
    </div>
    </section>
    <section class="container-fluid">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="customediv"
                        style="padding-right: 40px;margin-bottom: 130px; padding-bottom: 10px; height: 160px;width: 100%;overflow: hidden;position: relative;padding-left: 40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250" style="transform: scaleY(-1);">
                            <path fill="#bbcf3f" fill-opacity="1"
                                d="M0,224L120,202.7C240,181,480,139,720,144C960,149,1200,181,1320,202.7L1440,224V0H1320C1200,0,960,0,720,0C480,0,240,0,120,0H0V224Z">
                            </path>
                        </svg>
                        <h2 class="customfont u-custom-font" id="BestSelling"
                            style="   
                       position: absolute;margin-top: 50px;top: 43%;left: 50%;transform: translate(-50%, -50%);font-size: 55px;font-weight: bold;">
                        {{ __('store_.messages.Best_selling_products') }}  </h2>
                    </div>
        
                </div>
            </div>
    </section>
    <section class="container my-1">
        <div class="container-fluid">

            <div class="row store">
                    @foreach ($allMostProduct as $item)
                       
                        <div class="col-sm-3 ContainerProduct  ">
                            <div class="card">
                                <div class="card-body">
                                    <form id="FormCard" action="{{ route('showProduct', ['id' => $item->productData[0]->id]) }}" method="post">
        
                                        @csrf
                                        <h5 class="card-title text-center  customfont u-custom-font " style="font-size:1.5rem">{{ getDirection() == 'rtl' ? $item->productData[0]->name : $item->productData[0]->name_english }}</h5>
                                        <p class="card-text text-center customfont u-custom-font " style="font-size:1rem"> {{ getDirection() == 'rtl' ? $item->productData[0]->description:$item->productData[0]->description_english  }}</p></p>
                                        <hr class="myhr">
                                        <img class="myimg mx-auto d-block" width="" alt="product" src="/storage/img/{{$item->productData[0]->image}}">
                                        <hr class="myhr ">
                                        @if ($item->sizes[0] !== "null")
                                            <div class="d-flex justify-content-center">
                                                <button type="submit">{{ __('store_.buttons.show_product') }}</button>
                                            </div>
                                            <p style="font-weight: bold; " dir="{{getDirection()}}" class="text-center customfont u-custom-font " style="font-size:1.3rem">{{ $product->price }} <span>{{ __('store_.buttons.currency') }}</span></p>
                                            <h3>
                                        @endif
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
                              
                                <a href="{{ route('allproduct', ['id' => $categories[0]->id]) }}">
                                    <button type="button" class="btn btn-success" style=" color: green;
                            font-weight: bold; background-color: #bfdd1d;    border-radius: 20px 0px 0px 20px; padding: 25px; border:0;">{{ __('store_.buttons.watch_more') }}</button>
                            </a>
                            </div>
                        </div>
                    </div>
                 
             
            </div>
    </section>

        
      

   
    
        
        <section class="container chooseClass0 my-5">
            <div class="d-flex justify-center">
              <img src="{{ asset('/assets/images/soufKitchen.jpg') }}" alt="" style="max-width: 100%;">
            </div>
            <div class="chooseClass customfont u-custom-font u-custom-font2">
              <img src="{{ asset('/assets/images/friends.jpg') }}" alt="" style="max-width: 100%;">
              <h2 class="customfont u-custom-font u-custom-font2">
                {{ __('store_.messages.who_make_our_food') }}
              </h2>
            </div>
            <div class="chooseClass">
              <h2 class="customfont u-custom-font u-custom-font2">
                {{ __('store_.messages.storing_details') }}
              </h2>
              <img src="{{ asset('/assets/images/library.jpg') }}" alt="" style="max-width: 100%;">
            </div>
            <div class="chooseClass">
              <img src="{{ asset('/assets/images/kais.jpg') }}" alt="" style="max-width: 100%;">
              <h2 class="customfont u-custom-font u-custom-font2">
                {{ __('store_.messages.packing_details') }}
              </h2>
            </div>
          </section>
          <section class="container">
            <div class="row mt-2">
                <div class="col text-center">
                    <div class=" mt-2 rounded-circle d-inline-block" style="width: 30px; height: 30px; background-color:#D2B48C;"></div>
                </div>
            </div>
        </section>
        <section class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="customediv customediv2"
                        style="padding-right: 40px; margin-bottom: 130px; padding-bottom: 10px; height: 160px; width: 100%; overflow: hidden; position: relative; padding-left: 40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250"
                            style="transform: scaleY(-1);">
                            <path fill="#D2B48C" fill-opacity="1"
                                d="M0,224L120,202.7C240,181,480,139,720,144C960,149,1200,181,1320,202.7L1440,224V0H1320C1200,0,960,0,720,0C480,0,240,0,120,0H0V224Z">
                            </path>
                        </svg>

                        <h2 id="NonSugar" class="customfont u-custom-font "
                            style="color:white; text-shadow: black 0px 0px 2px; position: absolute; margin-top: 50px; top: 50%; left: 50%; transform: translate(-50%, -50%); font-weight: bold;">
                             {{ __('store_.messages.sugar_free') }} </h2>
                    </div>
                </div>
            </div>
        </section>
      
      <section class="container">
        @foreach ($categories as $value)
        @if (
            $value->name=="خابية"
        )
            
    
        <div class="row">

        <section class="container">
            <div class="row store">
             
                
                @foreach ($value->products as $product)
                   
                    
                <div class="col-sm-3 ContainerProduct">
                    <div class="card">
                        <div class="card-body">
                            <form id="FormCard" action="{{ route('showProduct', ['id' => $product->id]) }}" method="post">
                                @csrf
                                <h5 class="card-title text-center  customfont u-custom-font " style="font-size:1.5rem">{{ getDirection() == 'rtl' ?  $product->name :  $product->name_english }} </h5>
                                <p class="card-text text-center customfont u-custom-font " style="font-size:1rem">{{ getDirection() == 'rtl' ? $product->description : $value->description_english }}</p>
                                <hr class="myhr">
                                <img class="myimg mx-auto d-block" width="" alt="product" src="/storage/img/{{ $product->image }}">
                                <hr class="myhr ">
                                @auth
                                    @if ($product->sizes[0] !== "null")
                                        <div class="d-flex justify-content-center">
                                            <button type="submit">{{ __('store_.buttons.show_product') }}</button>
                                        </div>
                                        <p style="font-weight: bold; " dir="{{getDirection()}}" class="text-center customfont u-custom-font " style="font-size:1.3rem">{{ $product->price }} <span>{{ __('store_.buttons.currency') }}</span></p>
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
        <br>
        @endif
    @endforeach
   

      </section>
      <section class="container-fluid ">
        <div class="bg-image" style="background-image: url('{{asset('assets/images/stoneCover.jpg')}}'); height: 120vh; background-repeat: no-repeat;
        background-position: center;">
      <div class="text-container" style="text-align: center;margin-left: 19%; margin-top: 15px;
">
        <h1 class="container">بيت خيرات سوف<br>قصة بدأت من عام ١٨٨١م <span><a href={{ url('/about') }}><button id="cutomBtn" class="general-btn border-0 text-white h4 p-3 m-4">اعرف
            عنها</button></a></span></h1>
      </div>    
    </div>

      
    </section>
      
        
    @endsection
 
      
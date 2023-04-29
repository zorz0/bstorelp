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
                        أمان
                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        الدفع عند التوصيل
                    </p>
                </div>
                <div class="col-md-2 box">
                    <h3>
                        صحي
                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        بدون مواد حافظة
                    </p>
                </div>
                <div class="col-md-2 box">
                    <h3>
                        النظافة
                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        طعام بيتي صحي
                    </p>
                </div>
                <div class="col-md-2 box">
                    <h3>
                        الجودة
                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        ضمان جودة المنتجات
                    </p>
                </div>
                <div class="col-md-2 box2">
                    <h3>
                        توصيل سريع
                    </h3>
                    <p class="font-weight-bolder u-custom-font">
                        لجميع انحاء المملكة
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
                <div class="ct-blog col-sm-6 col-md-2">
                    <div class="fauxcrop">
                        <div class="image-container">
                            <a href="#">
                                <img class="category" style="  filter: brightness(0.5); " alt="khayba"
                                    src="{{ asset('storage/imgs/' . $value->image) }}">
                            </a>
                            <div class="text-container">
                                <p>{{ $value->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($value->products as $product)
                    <div class="col-sm-6 col-md-3">
                        <div class="product">
                            <form id="FormCard" action="{{ route('showProduct', ['id' => $product->id]) }}" method="post">
                                @csrf
                                <h3>{{ $product->name }}</h3>
                                <p id="description">{{ $product->description }}</p>
                                <hr class="myhr">
                                <img class="myimg" width="" alt="product" src="/storage/img/{{ $product->image }}">
                                <hr class="myhr">
                                @auth
                                    @if ($product->sizes[0] != 'null')
                                        <button type="submit"> اعرض المنتج</button>
                                        <p style="font-weight: bold">{{ $product->price }} د.أ</p>
                                        <h3>
                                    @endif
                                @endauth

                                {{-- 
                @if ($product->sizes[0] != 'null')
            
                <select name="productSizeId" id="">
                        @foreach ($product->sizes as $size)
                        <option  value="{{ $size->id }}"> {{ $size->size }}</option>
                        
                        @endforeach
                    </select>

                @endif   --}}


                                </h3>
                        </div>
                    </div>
                    </form>
                @endforeach
                <div class="ct-blog col-sm-6 col-md-1">
                    <div style="margin-top: 130%;">
                        <a class="smore2" href="{{ route('allproduct', ['id' => $value->id]) }}">مشاهدة المزيد</a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
    @endforeach
    {{--   <section class="u-clearfix u-section-1 container-fluid">
        <div class="row store">
            <div class="ct-blog col-sm-6 col-md-3 my-3">
                <div class="fauxcrop">
                    <a href="#"><img class="category" alt="khayba"
                            src="{{ asset('/assets/bks') }}/images/khayba.jpg"></a>
                </div>
            </div>
            @foreach ($data as $value)
                <div class="col-sm-6 col-md-3 my-3">
                    <form id="FormCard" action="{{ route('showProduct', ['id' => $value['id']]) }}" method="post">
                        @csrf
                        <div class="product">
                            <h3>{{ $value['name'] }}</h3>
                            <p>{{ $value['description'] }}</p>
                            <hr class="myhr">
                            <img class="myimg" width="" alt="product" src="/storage/img/{{ $value->image }}">
                            <hr class="myhr">
                            @auth

                                @if (!empty($productSizes[0]))
                                    <select name="productSizeId" id="">
                                        @foreach ($productSizes as $size)
                                            @if ($value->id == $size->product_id)
                                                <option value="{{ $size['id'] }}"> {{ $size['size'] }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <button type="submit"> اعرض المنتج</button>
                                @endif
                            @endauth
                        </div>
                    </form>
                </div>
            @endforeach
        </div>

    </section> --}}

    <section class="container my-5">
        <h2 class="text-center customfont u-custom-font">نضمن لك عملية شراء سريعة ، مريحة وآمنة</h2>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/person.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">تسجيل الدخول</h2>
                <p class="customfont u-custom-font">أضف معلوماتك (اسمك ، رقم هاتفك ، موقعك)</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/chart.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">أضف منتجاتك للسلة</h2>
                <p class="customfont u-custom-font">أضف منتجاتك المفضلة للسلة</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/rightSign.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">تأكيد طلبك</h2>
                <p class="customfont u-custom-font">أكد طلبك بعد التحقق من الطلبات وقيمة الفاتورة النهائية</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/customer.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">تأكيد موعد وموقع التسليم</h2>
                <p class="customfont u-custom-font">سيتواصل معك موظف خدمة العملاء لتأكيد موعد وموقع التسليم</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/car.png') }}" alt="">
            <div class="contentVa">
                <h2 class="customfont u-custom-font">توصيل وإستلام الطلب خلال ٢٤ ساعة والدفع</h2>
                <p class="customfont u-custom-font">توصيل منتجاتك لك لتستلمها، ودفع ثمنها</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/heart.png') }}" alt="">
            <div class="contentVa">
                <h2 class="text-danger">الإستمتاع بألذ وأشهى المنتجات من بيت خيرات سوف</h2>
            </div>
        </div>
    </section>
    <div class=" text-center">
        
        <img src="{{ asset('/assets/images/shopping-cart .png') }}" style="height: 100px;transform: rotate(20deg);" alt="">

        <a href="http://127.0.0.1:8000/news"><button  class=" customfont u-custom-font parallelogram-button general-btn  border-0  text-white h4 p-3 m-3 col-2"> تسوق الأن
            </button></a>
    </div>
    <div class="row">
        <div class="col">
            <div style="padding-right: 40px;margin-bottom: 130px; padding-bottom: 10px; height: 160px;width: 100%;overflow: hidden;position: relative;padding-left: 40px;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250" style="transform: scaleY(-1);">
                <path fill="#bbcf3f" fill-opacity="1" d="M0,224L120,202.7C240,181,480,139,720,144C960,149,1200,181,1320,202.7L1440,224V0H1320C1200,0,960,0,720,0C480,0,240,0,120,0H0V224Z"></path>
            </svg>
              <h2 class="customfont u-custom-font" style="position: absolute;margin-top: 40px;top: 50%;left: 50%;transform: translate(-50%, -50%);font-size: 55px;font-weight: bold;">المنتجات الأكثر مبيعًا</h2>          </div>
          
    </div>
    <section>
        <div class="chooseEat container text-center py-2 my-5">
            <h2 class="text-white">إختر ألذ وأشهى المنتجات</h2>
        </div>
    </section>

    <section class="container chooseClass0 my-5">
        <div class="d-flex justify-center">
            <img src="{{ asset('/assets/images/soufKitchen.jpg') }}" alt="">
        </div>
        <div class="chooseClass">
            <img src="{{ asset('/assets/images/friends.jpg') }}" alt="">
            <h2>
                تصنع منتجات بيت خيرات سوف من أيدي نساء أردنيات
            </h2>
        </div>
        <div class="chooseClass">
            <h2 class="customfont u-custom-font">
                تحفظ في عبوات وأماكن مخصصة
            </h2>
            <img src="{{ asset('/assets/images/library.jpg') }}" alt="">
        </div>
        <div class="chooseClass">
            <img src="{{ asset('/assets/images/kais.jpg') }}" alt="">
            <h2 class="customfont u-custom-font">
                تصلك مغلفة بإحكام جاهزة للأكل
            </h2>
        </div>
    </section>

    <section class="my-5">
        <div class="chooseEatSuger container text-center py-2 my-5">
            <h2  class="text-white">منتجات خالية من السكر تماما!</h2>
        </div>
    </section>


    <section class="mt-5">
        <div class="container">
            <img src="/assets/images/stoneCover.jpg" alt="Snow" style="width:100%;">

            <div class="centered">
                <h1 class="container2">بيت خيرات سوف<br>قصة بدأت من عام ١٨٨١م <span>
                        <a id="btn" href={{ url('/about') }}><button
                                class="general-btn border-0 text-white h3 p-3 m-4">اعرف
                                عنها</button></a></span></h1>
            </div>
        </div>

    </section>
@endsection

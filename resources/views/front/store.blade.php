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
                            <div class="text-container customfont u-custom-font">
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
                                <h3 class="customfont u-custom-font" style="font-size: 30px">{{ $product->name }}</h3>
                                <p id="description" style="font-size: 25px" class="customfont u-custom-font">
                                    {{ $product->description }}</p>
                                <hr class="myhr">
                                <img class="myimg" width="" alt="product" src="{{ asset('storage/img/'.$product->image) }}">
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
    <section style="margin-bottom: 150px">
        <div class="chooseEat container text-center py-2 my-5 ">
            <h2 class="text-white">إختر ألذ وأشهى المنتجات</h2>
        </div>
    </section>
    <div class=" text-center">

        <img src="{{ asset('/assets/images/shopping-cart .png') }}"
            style="height: 100px;transform: rotate(20deg);position: absolute;margin-left: -80px;margin-top: -10px;"
            alt="">

        <a href="http://127.0.0.1:8000/news"><button
                class="customfont u-custom-font parallelogram-button general-btn border-0 text-white h4 p-3 m-3 col-2"
                style="
            color: black;
        ">
                <span style="font-size: 40px;
          font-weight: bold;     text-shadow: 0 0 2px black;
"
                    class="customfont u-custom-font">بدء التسوق</span>
            </button></a>
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
                <h2 class="customfont u-custom-font"
                    style="    text-shadow: 0 0 2px black;
               position: absolute;margin-top: 40px;top: 50%;left: 50%;transform: translate(-50%, -50%);font-size: 55px;font-weight: bold;">
                    المنتجات الأكثر مبيعًا</h2>
            </div>

        </div>
        {{-- here --}}
        <div class="row store">
            @foreach ($allMostProduct as $item)
                <div class="col-sm-6 col-md-3">
                    <div class="product">
                        <h3 class="customfont u-custom-font" style="font-size: 30px;">{{ $item->productData[0]->name }}
                        </h3>
                        <p id="description" class="customfont u-custom-font" style="font-size: 25px;">
                            {{ $item->productData[0]->description }}</p>
                        <hr class="myhr">
                        <img class="myimg" width="" alt="product"
                            src="/storage/img/{{ $item->productData[0]->image }}">
                        <hr class="myhr">
                    </div>
                </div>
            @endforeach

            <div class="ct-blog col-sm-6 col-md-1">
                <div style="margin-top: 130%;"><a class="smore2" href="http://127.0.0.1:8000/category/1">مشاهدة
                        المزيد</a></div>
            </div>
        </div>


        <section class="container chooseClass0 my-5">
            <div class="d-flex justify-center">
                <img src="{{ asset('/assets/images/soufKitchen.jpg') }}" alt="">
            </div>
            <div class="chooseClass customfont u-custom-font">
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

            <div class="row">


                <section class="container chooseClass0 my-5">
                    <div class="d-flex justify-center"><img src="http://127.0.0.1:8000/assets/images/soufKitchen.jpg"
                            alt=""></div>
                    <div class="chooseClass customfont u-custom-font"><img
                            src="http://127.0.0.1:8000/assets/images/friends.jpg" alt="">
                        <h2> تصنع منتجات بيت خيرات سوف من أيدي نساء أردنيات </h2>
                    </div>
                    <div class="chooseClass">
                        <h2 class="customfont u-custom-font"> تحفظ في عبوات وأماكن مخصصة </h2><img
                            src="http://127.0.0.1:8000/assets/images/library.jpg" alt="">
                    </div>
                    <div class="chooseClass"><img src="http://127.0.0.1:8000/assets/images/kais.jpg" alt="">
                        <h2 class="customfont u-custom-font"> تصلك مغلفة بإحكام جاهزة للأكل </h2>
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

                                <h2 class="customfont u-custom-font"
                                    style="color:white; text-shadow: black 0px 0px 2px; position: absolute; margin-top: 40px; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 55px; font-weight: bold;">
                                    ! منتجات خالية من السكر تماما </h2>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mt-5">
                    <div class="container"><img src="/assets/images/stoneCover.jpg" alt="Snow" style="width: 100%;">
                        <div class="centered">
                            <h1 class="container2">بيت خيرات سوف<br>قصة بدأت من عام ١٨٨١م <span><a id="btn"
                                        href="http://127.0.0.1:8000/about"><button
                                            class="general-btn border-0 text-white h3 p-3 m-4">اعرف
                                            عنها</button></a></span></h1>
                        </div>
                    </div>
                </section>
                <section class="foter-start u-clearfix u-image u-section-2 lazyloaded">
                    <div class="u-clearfix u-sheet u-sheet-1">
                        <div class="social-icons u-social-icons u-spacing-15 u-social-icons-1"><a class="u-social-url"
                                title="facebook" target="_blank" href="https://facebook.com/"><span
                                    class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link"
                                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                                        <use xlink:href="#svg-078b"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                                        id="svg-078b">
                                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55">
                                        </circle>
                                        <path fill="#FFFFFF"
                                            d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2 c0-6.7,3.1-17,17-17h12.5v13.9H73.5z">
                                        </path>
                                    </svg></span></a><a class="u-social-url" title="twitter" target="_blank"
                                href="https://twitter.com/"><span
                                    class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link"
                                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                                        <use xlink:href="#svg-e826"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                                        id="svg-e826">
                                        <circle fill="currentColor" class="st0" cx="56.1" cy="56.1"
                                            r="55"></circle>
                                        <path fill="#FFFFFF"
                                            d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2 c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1 c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14 c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4 c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z">
                                        </path>
                                    </svg></span></a><a class="u-social-url" title="instagram" target="_blank"
                                href="https://instagram.com/"><span
                                    class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link"
                                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                                        <use xlink:href="#svg-7d2f"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                                        id="svg-7d2f">
                                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55">
                                        </circle>
                                        <path fill="#FFFFFF"
                                            d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.610.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
                                        </path>
                                        <path fill="#FFFFFF"
                                            d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
                                        </path>
                                        <path fill="#FFFFFF"
                                            d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5c5.5,0,9.9,4.5,9.9,9.9V73.3z">
                                        </path>
                                    </svg></span></a></div>
                    </div>
                </section>
                <footer class="u-clearfix u-custom-color-3 u-footer u-footer" id="sec-350b">
                    <div class="u-clearfix u-sheet u-sheet-1">
                        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
                            <div class="u-gutter-0 u-layout">
                                <div class="u-layout-row">
                                    <div
                                        class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                                        <div class="u-container-layout u-container-layout-1">
                                            <p
                                                class="u-align-right u-custom-font u-small-text u-text u-text-default u-text-variant u-text-white u-text-1">
                                                <a href="/index.html"
                                                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-1"><span
                                                        style="font-size: 1.125rem;"></span></a><span class="customfont"
                                                    style="font-size: 1.125rem;">تواصل معنا <br></span>0779959058
                                                <br>info@beitkhayratsouf.com <br>جرش - سوف - البرج - قرب نبع المغاسل
                                            </p>
                                        </div>
                                    </div>
                                    <div class="u-align-left u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                                            <p
                                                class="u-align-right u-custom-font u-small-text u-text u-text-default u-text-variant u-text-white u-text-2">
                                                <a href="/الرئيسية.html"
                                                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-2"><span
                                                        style="font-size: 1rem;"></span></a><span>مواقع التواصل الإجتماعي
                                                    <br></span> <a class="customfont"
                                                    href="https://www.facebook.com/baitkhayratsoof1881?mibextid=ZbWKwL">
                                                    الفيسبوك</a><br><a
                                                    href="https://instagram.com/beitkhairatsouf1881?igshid=YmMyMTA2M2Y=">
                                                    إنستجرام </a> <br>تيك توك <br>اليوتيوب
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-3">
                                        <div class="u-container-layout u-container-layout-3">
                                            <p
                                                class="u-align-right u-custom-font u-small-text u-text u-text-default u-text-variant u-text-white u-text-3">
                                                <a href="/index.php"
                                                    class="u-active-none u-border-none u-btn u-button-link u-button-style porder-none u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-3">الرئيسية<br></a><a
                                                    class="u-active-none u-border-none u-btn u-button-link u-button-style porder-none u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-3"
                                                    href="http://127.0.0.1:8000/news"> أخبارنا </a><br><a
                                                    class="u-active-none u-border-none u-btn u-button-link u-button-style porder-none u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-3"
                                                    href="http://127.0.0.1:8000/store"> المتجر </a><br><a
                                                    class="u-active-none u-border-none u-btn u-button-link u-button-style porder-none u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-3"
                                                    href="http://127.0.0.1:8000/about"> من نحن </a><br><a
                                                    class="u-active-none u-border-none u-btn u-button-link u-button-style porder-none u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-3"
                                                    href="http://127.0.0.1:8000/contact">تواصل معنا </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="container text-center">
                    <div class="row">
                        <div class="col t-center">
                            <p class="u-align-center u-custom-font u-text u-text-body-alt-color u-text-4"
                                style="color: rgb(107, 114, 101) !important; margin-bottom: -30px !important;"> Powered By
                                Banana </p><img src="http://127.0.0.1:8000/assets/images/banana.png"
                                style="text-align: center; width: 100px;">
                        </div>
                    </div>
                </div>
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
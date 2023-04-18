@extends('layouts.master')
@section('content')
<section class="u-clearfix u-section-1" >

    <div class="card" align="center">
    <h2 >{{$blog->title}}</h2>
    <!-- <h5>Title description, Dec 7, 2017</h5> -->
            <div>
                <a href="#"><img style="object-fit: fill; "  alt="product" src="/storage/imgs/{{$blog->image}}"></a>
                
            </div>
            <p>{{$blog->description}}
                <div class="font-weight-bolder"><a href="{{route('news')}}">كل الاخيار </a></div></p>
       
            </div>
        {{-- <div class="card">
            <h2>العنوان</h2>
            <!-- <h5>Title description, Sep 2, 2017</h5> -->
            <div class="fakeimg">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
            </div>
            <p>هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر .
                هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر .
                هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر .
                <span class="font-weight-bolder"><a href="">متابعة القراءة</a></span></p>
        </div>
        <div class="card">
            <h2>العنوان</h2>
            <!-- <h5>Title description, Sep 2, 2017</h5> -->
            <div class="fakeimg">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
            </div>
            <p>هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر .
                هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر .
                هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر .
                <span class="font-weight-bolder"><a href="">متابعة القراءة</a></span></p>
        </div>
        <div class="card">
            <h2>العنوان</h2>
            <!-- <h5>Title description, Sep 2, 2017</h5> -->
            <div class="fakeimg">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
            </div>
            <p>هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر .
                هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر .
                هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر . هنا سنكتب تفاصيل الخبر .
                <span class="font-weight-bolder"><a href="">متابعة القراءة</a></span></p>
        </div> --}}


</section>
@endsection

@extends('layouts.master')
@section('content')
<section class="u-clearfix u-section-1">
    <div class="leftcolumn">
        @foreach ($blogs as $blog)

        <div class="card">
            <h2>{{$blog->title}}</h2>
            <!-- <h5>Title description, Dec 7, 2017</h5> -->
            <div class="fakeimg">
                <a href="#"><img class="myimg" alt="product" src="/storage/imgs/{{$blog->image}}"></a>

            </div>
            <p>{{$blog->description}}
                <span class="font-weight-bolder"><a href="{{route('news.details',['id'=>$blog->id])}}">{{ __('news_.continue_reading') }}</a></span></p>
            </div>
            @endforeach
            {{$blogs->links()}}
       <div class="card">
            <h2 align="{{ getAlign() }}">{{ __('news_.news_title') }}</h2>
            <!-- <h5>Title description, Sep 2, 2017</h5> -->
            <div class="fakeimg">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
            </div>
            <p>{{ __('news_.news_content') }}
                <span class="font-weight-bolder"><a href="">{{ __('news_.continue_reading') }}</a></span></p>
        </div>
            <div class="card">
                <h2 align="{{ getAlign() }}">{{ __('news_.news_title') }}</h2>
                <!-- <h5>Title description, Sep 2, 2017</h5> -->
                <div class="fakeimg">
                    <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                    <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                    <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                    <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                </div>
                <p>{{ __('news_.news_content') }}
                    <span class="font-weight-bolder"><a href="">{{ __('news_.continue_reading') }}</a></span></p>
            </div>
            <div class="card">
                <h2 align="{{ getAlign() }}"> {{ __('news_.news_title') }}</h2>
                <!-- <h5>Title description, Sep 2, 2017</h5> -->
                <div class="fakeimg">
                    <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                    <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                    <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                    <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                </div>
                <p>{{ __('news_.news_content') }}
                    <span class="font-weight-bolder"><a href="">{{ __('news_.continue_reading') }}</a></span></p>
            </div>
    </div>
    <div class="rightcolumn">
        <h2 align="{{ getAlign() }}">{{ __('news_.latest_news') }}</h2>
        @foreach ($latestBlogs as $blog)


        <div class="card">
            <a href="{{route('news.details',['id'=>$blog->id])}}" style="text-decoration: none;"> <h2>{{$blog->title}}</h2> </a>
        </div>
        @endforeach
        {{$latestBlogs->links()}}
      <div class="card">
            <h2 class="text-center">{{ __('news_.news_title') }}</h2>
            <div class="fakeimg2">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
            </div>
        </div>
        <div class="card">
            <h2 class="text-center">{{ __('news_.news_title') }}</h2>
            <div class="fakeimg2">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
            </div>
        </div>
        <div class="card">
            <h2 class="text-center">{{ __('news_.news_title') }}</h2>
            <div class="fakeimg2">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
            </div>
        </div>
        <div class="card">
            <h2 class="text-center">{{ __('news_.news_title') }}</h2>
            <div class="fakeimg2">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
            </div>
        </div>
        <div class="card">
            <h2 class="text-center">{{ __('news_.news_title') }}</h2>
            <div class="fakeimg2">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
            </div>
        </div>
    </div>
</section>
@endsection

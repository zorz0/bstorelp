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
      
           
          
    </div>
    <div class="rightcolumn">
        <h2 align="{{ getAlign() }}">{{ __('news_.latest_news') }}</h2>
        @foreach ($latestBlogs as $blog)


        <div class="card">
            <a href="{{route('news.details',['id'=>$blog->id])}}" style="text-decoration: none;"> <h2>{{$blog->title}}</h2> </a>
        </div>
        @endforeach
        {{$latestBlogs->links()}}
     
      
    </div>
</section>
@endsection

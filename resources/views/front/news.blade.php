@extends('layouts.master')
@section('content')
<section class="u-clearfix u-section-1">
    <div class="leftcolumn">
        @foreach ($blogs as $blog)

        <div class="card" style="direction:{{getDirection()}}" align="{{getAlign()}}"">
            <h4>{{ getDirection() == 'rtl' ? $blog->title :  $blog->title_english }}</h2>
            <!-- <h5>Title description, Dec 7, 2017</h5> -->
            <div class="fakeimg">
                <a href="#"><img class="myimg" alt="product" src="/storage/imgs/{{$blog->image}}"></a>

            </div>
            <p> {{ getDirection() == 'rtl' ? $blog->description :  $blog->description_english }}
                <span class="font-weight-bolder"><a href="{{route('news.details',['id'=>$blog->id])}}">{{ __('news_.continue_reading') }}</a></span></p>
            </div>
            @endforeach
            {{$blogs->links()}}
      
           
          
    </div>
    <div class="rightcolumn">
        <h2 align="{{ getAlign() }}">{{ __('news_.latest_news') }}</h2>
        @foreach ($latestBlogs as $blog)
        <a href="{{route('news.details',['id'=>$blog->id])}}" style="text-decoration: none;">
        <div class="card" style="width: 18rem;">
            <img alt="product" style="width:100%" src="{{ asset('/storage/imgs/' . $blog->image) }}" class="card-img-top">
            <div class="card-body text-center">
               <h4 class="text-center">{{ getDirection() == 'rtl' ? $blog->title :  $blog->title_english }}</h4> </a>
            </div>
          </div>
       
  
    
        @endforeach
        {{$latestBlogs->links()}}
     
      
    </div>
</section>
@endsection

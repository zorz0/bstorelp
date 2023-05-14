@extends('layouts.master')
@section('content')





<section class="container-fluid">
    <div class="row" id="NesRow">
      
      <div class="col-25 mb-3">
        <h2 align="{{ getAlign() }}">{{ __('news_.latest_news') }}</h2>
        @foreach ($latestBlogs as $blog)

        <div class="card" style="width: 18rem;">
            <img alt="product" style="width:100%" src="{{ asset('/storage/imgs/' . $blog->image) }}" class="card-img-top">
            <div class="card-body text-center">
                <a href="{{route('news.details',['id'=>$blog->id])}}" style="text-decoration: none;"> <h4 class="text-center">{{$blog->title}}</h4> </a>
            </div>
          </div>
       
  
    
        @endforeach
        {{$latestBlogs->links()}}
      </div>
      <div class="col-8 border ml-3">
        <div class="blog-single-content bordered blog-container ">
            <div class="blog-single-head p-3">
                <h1 class="blog-single-head-title" align="{{ getAlign() }}">{{$blog->title}}</h1>
                <div class="blog-single-head-date" align="{{ getAlign() }}">
                    <i class="icon-calendar font-blue" ></i>
                    <a href="javascript:;" >{{$blog->created_at}}</a>
                </div>
            </div>
            <div class="blog-single-img  p-3">
                <img  class="img-fluid" src="/storage/imgs/{{$blog->image}}" /> </div>



            <div class="blog-single-desc  p-3" align="{{ getAlign() }}">
           <p>{{$blog->description}}<p>
            </div>


        </div>
      </div>
    
    </div>


</section>

@endsection

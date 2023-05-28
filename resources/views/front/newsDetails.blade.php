@extends('layouts.master')
@section('content')





<section class="container-fluid pl-5">
    <div class="row" id="NesRow">
      
      <div class="col-md-25 mb-3">
        <h2 align="{{ getAlign() }}">{{ __('news_.latest_news') }}</h2>
        @foreach ($latestBlogs as $blogs)
        <a href="{{route('news.details',['id'=>$blogs->id])}}" style="text-decoration: none;">
        <div class="card" style="width: 18rem;">
            <img alt="product" style="width:100%" src="{{ asset('/storage/imgs/' . $blogs->image) }}" class="card-img-top">
            <div class="card-body text-center">
                 <h4 class="text-center">{{ getDirection() == 'rtl' ? $blogs->title :  $blogs->title_english }}</h4> </a>
            </div>
          </div>
       
  
    
        @endforeach
        {{$latestBlogs->links()}}
      </div>
      <div class="col-md-8 border ml-3" style="margin-top: 6%;">
        <div class="blog-single-content bordered blog-container ">
            <div class="blog-single-head p-3">
                <h1 class="blog-single-head-title" align="{{ getAlign() }}">{{ getDirection() == 'rtl' ? $blog->title :  $blog->title_english }}</h1>
                <div class="blog-single-head-date" align="{{ getAlign() }}">
                    <i class="icon-calendar font-blue" ></i>
                    <a href="javascript:;" >{{$blog->created_at}}</a>
                </div>
            </div>
          
            <div class="blog-single-img  p-3" >
                <div id="carouselExampleControls" class="carousel slide h-50" data-ride="carousel">
                  <div class="carousel-inner  " style="border-radius: 3rem">
                    <div class="carousel-item active " style="height: 100vh;">
                      <img class="d-block w-100 " src="/storage/imgs/{{$blog->image}}" alt="First slide" style="object-fit: contain; height: 100vh;">
                    </div>
                    @foreach ($images as $image )
                      
               
                    <div class="carousel-item " style="height: 100vh;">
                      <img class="d-block w-100 " src="/storage/imgs/{{$image->image}}" alt="Third slide" style="object-fit: contain; height: 100vh;">
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
              

            <div class="blog-single-desc  p-3" align="{{ getAlign() }}">
           <p>{{ getDirection() == 'rtl' ? $blog->description :  $blog->description_english }}<p>
            </div>
           

        </div>
      </div>
    
    </div>


</section>

@endsection

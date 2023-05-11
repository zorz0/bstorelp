@extends('layouts.master')
@section('content')





<section class="container-fluid">
    <div class="row" id="NesRow">
      
      <div class="col-25 mb-3">
        <div class="blog-single-sidebar bordered blog-container border">

            <div class="blog-single-sidebar-recent text-center">
                <h3 class="blog-sidebar-title uppercase" > {{ __('master.LastourNews') }}</h3>

               
            </div>
            <div class="pl-3">

            <ul align="{{ getAlign() }}" class="list-unstyled">
                @foreach ($latestBlogs as $item)
           
           @if (getAlign()=="right")
           <li>
            <a href="{{route('news.details', ['id'=>$item->id])}}"> {{ $item->title}} <span class="bullet"  >&#8226;</span></a>
    
         </li>
           @else
           <li>
            <a href="{{route('news.details', ['id'=>$item->id])}}"><span class="bullet"  align="{{ getAlign() }}">&#8226;</span> {{ $item->title}}</a>

         </li> 
           @endif
               
            @endforeach



            </ul>
            </div>

        </div>
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

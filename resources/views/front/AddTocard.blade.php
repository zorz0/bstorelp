
 @extends('layouts.master')
 @section('content')
 <head>


  <link rel="stylesheet" href="{{ asset('/assets') }}/apps/css/productDetails.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous" /> 
</head>

<section class="container"
         <div class="card-wrapper">
             <div class="card">
                 <!-- card left -->
                 <div class="product-imgs">
                     <div class="img-display">
                         <div class="img-showcase">
                             <img style="max-height: 500px;" src="{{ asset('storage/img/'.$data->image) }}" >
                         
                         </div>
                     </div>
                 
                 </div>
                 <!-- card right -->
                 <div class="product-content" dir="{{getDirection()}}">
                     <h2 class="">{{ $data->name }}</h2>
                     {{-- <a href = "#" class = "product-link">visit nike store</a> --}}
                  

                     <livewire:show-product-size-price :id="$data->id"/>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="NzEvA5qq"></script>
                    
                        <div class="social-links">
                         <p>{{ __('addToCard.share_with') }} </p>
                         <a href="#">
                             <i class="fab fa-facebook-f"></i>
                         </a>
                         <a href="#">
                             <i class="fab fa-twitter"></i>
                         </a>
                         <a href="#">
                             <i class="fab fa-instagram"></i>
                         </a>
                         <a href="#">
                             <i class="fab fa-whatsapp"></i>
                         </a>
                         <a href="#">
                             <i class="fab fa-pinterest"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </div>


         <link rel="stylesheet" href="{{ asset('/assets') }}/apps/scripts/productDetails.js">
         <style>
          #Bananalogo{
            margin-left: 45%;
          }
          body > section > section.foter-start.u-clearfix.u-image.u-section-2.container-fluid.my-5.lazyloaded > div > div > a:nth-child(1) > span > svg.u-svg-link{
            transform: translateX(-10px);
          }
         </style>
     <section>
      
 @endsection


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
                     <h2 class="customfont u-custom-font text-right">{{ $data->name }}</h2>
                     {{-- <a href = "#" class = "product-link">visit nike store</a> --}}
                  

                     <livewire:show-product-size-price :id="$data->id"/>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        
                        <!-- Your share button code -->
                       
                        <div class="social-links">
                         <p>{{ __('addToCard.share_with') }} </p>
                         <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('showProduct/'.$data->id) }}" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ url('showProduct/1') }}" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                         <a href="https://www.instagram.com/sharer.php?u={{  url('showProduct/'.$data->id) }}" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ urlencode('Check out this product: ' . url('showProduct/1')) }}" target="_blank">
                            <i class="fab fa-whatsapp"></i>
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
        <section class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
      
 @endsection

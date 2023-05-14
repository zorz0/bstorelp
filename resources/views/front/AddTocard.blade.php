
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
                 <div class="product-imgs" >
                
                  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="class=d-block w-100" style="background-size: cover;
                        max-height: 700px;" src="{{ asset('storage/img/'.$data->image) }}" >                      </div>
                    @foreach($dataImages as $images)
                    <div class="carousel-item">
                      <img src="{{ asset('storage/img/'.$images->image) }}" class="d-block w-100" alt="..." style="background-size: cover;
                      max-height: 700px;">
                    </div>
                
                   @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
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
   @foreach ($categories as $value)
   <div class="row">
       @foreach ($value->products as $product)
           <div class="col">
               <div class="card">
                   <div class="card-body">
                       <form id="FormCard" action="{{ route('showProduct', ['id' => $product->id]) }}" method="post">
                           @csrf
                           <h5 class="card-title text-center customfont u-custom-font" style="font-size: 1.5rem">{{ $product->name }}</h5>
                           <p class="card-text text-center customfont u-custom-font" style="font-size: 1rem">{{ $product->description }}</p>
                           <hr class="myhr">
                           <img class="myimg mx-auto d-block" width="" alt="product" src="/storage/img/{{ $product->image }}">
                           <hr class="myhr">
                           @if ($product->sizes[0] != '')
                               <div class="d-flex justify-content-center">
                                   <button type="submit">{{ __('store_.buttons.show_product') }}</button>
                               </div>
                               <p style="font-weight: bold;" dir="{{ getDirection() }}" class="text-center customfont u-custom-font" style="font-size: 1.3rem">{{ $product->price }} <span>{{ __('store_.buttons.currency') }}</span></p>
                           @endif
                       </form>
                   </div>
               </div>
           </div>
       @endforeach
   </div>
@endforeach


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       @endsection

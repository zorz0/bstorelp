
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
                
                  <div id="carouselExampleFade" class="carousel slide d-none carousel-fade" data-bs-ride="carousel">
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
                  <div class="container">
        
                    <div class="master " style="max-height: 400px!important;">
                        <img src="{{ asset('storage/img/'.$data->image) }}" >
                        <i class="fas fa-chevron-left"></i>
                        <i class="fas fa-chevron-right"></i>
                    </div>
            
                    <div class="thumbnails">
                      @foreach($dataImages as $images)

                        <img src="{{asset('storage/img/'.$images->image) }}" style="max-width: 24%;">
@endforeach                      
                    </div>
            
                </div>
            
            
            
            
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                 </div>
                 <!-- card right -->
                 <div class="product-content" dir="{{getDirection()}}">
                     <h2 class="customfont u-custom-font text-right">{{ getDirection() == 'rtl' ? $data->name : $data->name_english }}</h2>
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
          .container {
    margin: 50px auto;
    text-align: center;
    width: 90%;
}

.container .master,
.container .thumbnails {
    margin: auto;
    width: 100%;
    border: 2px solid #ccc;
    padding: 5px;
}

.container .master {
    padding-bottom: 0;
    position: relative;
}

.container .master img {
    z-index: 1;
    width: 100%;
    height: 99%
}

.container .master .fa-chevron-left,
.container .master .fa-chevron-right {
    position: absolute;
    left: 5px;
    top: 5px;
    background-color: rgb(0,0,0, .7);
    color: #fff;
    padding: 10px 15px;
    z-index: 2;
    cursor: pointer;
}

.container .master .fa-chevron-right {
    right: 5px;
    left: auto;
}

.container .thumbnails {
    overflow: hidden;
}

.container .thumbnails img {
    float: left;
    width: 19.2%;
    outline: 2px solid #bbb;
    opacity: .6;
    cursor: pointer;
    transition: all .6s ease-in-out;
}

.container .thumbnails img:last-child {
    margin-right: 0!important;
}

.container .thumbnails img.active {
    outline: 2px solid #e63946;
    opacity: 1;
}



          #Bananalogo{
            margin-left: 45%;
          }
          body > section > section.foter-start.u-clearfix.u-image.u-section-2.container-fluid.my-5.lazyloaded > div > div > a:nth-child(1) > span > svg.u-svg-link{
            transform: translateX(-10px);
          }
         </style>
  {{--  @foreach ($categories as $value)
   <div class="row">
    <div class="col-sm-1">
    </div>
       @foreach ($value->products as $product)
           <div class="col-sm-2">
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
       <div class="col-sm-1">
       </div>
   </div>
@endforeach --}}


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      $(function() {
    /*make the master div has a static height to prevent it from disppearing while the master img is feading in,
    this step is important if you use a fadeIn duration for the master img more than 1s, but if you use a duration less than 1s
    you don't need to make the height of the master div is static, and it is preferred to make the duration less than 1s to prevent the
    user to choose 2 images at the same time, so the implementation of the code will be faster than the user selection*/
    $(".master").css({
        height: $(".master img").height() + 13
    });

    //make the width of the thumbnails images is dynamic
    var imagesNumber        = $(".thumbnails").children().length,
        marginBetweenImages =  1,
        totalMargins        = marginBetweenImages * (imagesNumber - 1),
        imageWidth          = (100 - totalMargins) / (imagesNumber);
        
    $(".thumbnails img").css({
        width: imageWidth + "%",
        marginRight: marginBetweenImages + "%"
    });


    //remove the active class from all thumbnails images and add it to the selected one, then add this selected as the master image in the master div
    $(".thumbnails img").on("click", function() {
        $(this).addClass("active").siblings().removeClass("active");
        $(".master img").hide().attr("src", $(this).attr("src")).fadeIn(300);
    });


    //use the chevron left and right to select images and translate between them
    $(".master .fas").on("click", function() {
        if($(this).hasClass("fa-chevron-left")) {
            if($(".thumbnails img.active").is(":first-child")) {
                $(".thumbnails img:last-child").click();
            } else {
                $(".thumbnails img.active").prev().click();
            }
        } else {
            if($(".thumbnails img.active").is(":last-child")) {
                $(".thumbnails img:first-child").click();
            } else {
                $(".thumbnails img.active").next().click();
            }
        }
    })
})
    </script>
      @endsection

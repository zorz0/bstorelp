
    <link rel="stylesheet" href="{{ asset('assets/card/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <body>

    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">

            <div class = "img-showcase">

              <img src = "/storage/img/{{ $data->image}}" alt = "shoe image">

            </div>
          </div>





        <!-- card right -->

        <div class = "product-content">
          <h2 class = "product-title">{{ $data->name }}</h2>
          <a href = "{{ route('store') }}" class = "product-link"> المتجر</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>
          <form action="{{route('card.store')}}" method="post">
            @csrf
          <div class = "product-price">
            <p class = "last-price"> السعر القديم: <span>$ {{ $productSize->price+$productSize->discount}}</span></p>
            <p class = "new-price"> السعر الجديد: <span>${{ $productSize->price}}</span></p>
          </div>

          <div class = "product-detail">
            <h2>تفاصيل المنتج </h2>
            <p>{{$data->description}}</p>

          </div>


          <div class="row">
            <div class="col-md-6">
                <div class="form-group">


                    <div class="col-md-9">





            @auth



        <input type="text" name="price" value="{{$productSize["price"]}}" hidden>

    <input type="text" name="productSize_id" value="{{$productSize["id"]}}" hidden>
    <input type="text" name="product_id" value="{{$data["id"]}}" hidden>

    <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>

          <div class="purchase-info" >
            <label class="control-label col-md-3">الكمية :</label>

            <input name="quantity"  type = "number" min = "1" value="1" >
           <div>
            <label class="control-label col-md-3">الوزن:</label>

            <div>{{ $productSize->size}} </div>
           </div>

          </div>


          <div >
            <a style="text-decoration: none; color)" href="{{ route('totalCards') }}" class="btn btn-info">
              السلة <i class = "fas fa-shopping-cart"></i>
            </a>

            <button type = "submit" class="btn btn-success">
              اضف الي السلة <i class = "fas fa-shopping-cart"></i>
            </button>
            
          </div>

          @endauth
</form>




          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/card/script.js') }}"></script>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        /*
I wanted to go with a mobile first approach, but it actually lead to more verbose CSS in this case, so I've gone web first. Can't always force things...

Side note: I know that this style of nesting in SASS doesn't result in the most performance efficient CSS code... but on the OCD/organizational side, I like it. So for CodePen purposes, CSS selector performance be damned.
*/
/* Global settings */
/* Global "table" column settings */
.product-image {
    float: left;
    width: 20%;
  }

  .product-details {
    float: left;
    width: 37%;
  }

  .product-price {
    float: left;
    width: 12%;
  }

  .product-quantity {
    float: left;
    width: 10%;
  }

  .product-removal {
    float: left;
    width: 9%;
  }

  .product-line-price {
    float: left;
    width: 12%;
    text-align: right;
  }

  /* This is used as the traditional .clearfix class */
  .group:before, .shopping-cart:before,
  .column-labels:before,
  .product:before,
  .totals-item:before,
  .group:after,
  .shopping-cart:after,
  .column-labels:after,
  .product:after,
  .totals-item:after {
    content: "";
    display: table;
  }

  .group:after, .shopping-cart:after,
  .column-labels:after,
  .product:after,
  .totals-item:after {
    clear: both;
  }

  .group, .shopping-cart,
  .column-labels,
  .product,
  .totals-item {
    zoom: 1;
  }

  /* Apply clearfix in a few places */
  /* Apply dollar signs */
  .product .product-price:before,
  .product .product-line-price:before,
  .totals-value:before {
    content: "$";
  }

  /* Body/Header stuff */
  body {
    padding: 0px 30px 30px 20px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 100;
  }

  h1 {
    font-weight: 100;
  }

  label {
    color: #aaa;
  }

  .shopping-cart {
    margin-top: -45px;
  }

  /* Column headers */
  .column-labels label {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid #eee;
  }
  .column-labels .product-image,
  .column-labels .product-details,
  .column-labels .product-removal {
    text-indent: -9999px;
  }

  /* Product entries */
  .product {
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
  }
  .product .product-image {
    text-align: center;
  }
  .product .product-image img {
    width: 100px;
  }
  .product .product-details .product-title {
    margin-right: 20px;
    font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  }
  .product .product-details .product-description {
    margin: 5px 20px 5px 0;
    line-height: 1.4em;
  }
  .product .product-quantity input {
    width: 40px;
  }
  .product .remove-product {
    border: 0;
    padding: 4px 8px;
    background-color: #c66;
    color: #fff;
    font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
    font-size: 12px;
    border-radius: 3px;
  }
  .product .remove-product:hover {
    background-color: #a44;
  }

  /* Totals section */
  .totals .totals-item {
    float: right;
    clear: both;
    width: 100%;
    margin-bottom: 10px;
  }
  .totals .totals-item label {
    float: left;
    clear: both;
    width: 79%;
    text-align: right;
  }
  .totals .totals-item .totals-value {
    float: right;
    width: 21%;
    text-align: right;
  }
  .totals .totals-item-total {
    font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  }

  .checkout {
    float: right;
    border: 0;
    margin-top: 20px;
    padding: 6px 25px;
    background-color: #6b6;
    color: #fff;
    font-size: 25px;
    border-radius: 3px;
  }

  .checkout:hover {
    background-color: #494;
  }

  /* Make adjustments for tablet */
  @media screen and (max-width: 650px) {
    .shopping-cart {
      margin: 0;
      padding-top: 20px;
      border-top: 1px solid #eee;
    }

    .column-labels {
      display: none;
    }

    .product-image {
      float: right;
      width: auto;
    }
    .product-image img {
      margin: 0 0 10px 10px;
    }

    .product-details {
      float: none;
      margin-bottom: 10px;
      width: auto;
    }

    .product-price {
      clear: both;
      width: 70px;
    }

    .product-quantity {
      width: 100px;
    }
    .product-quantity input {
      margin-left: 20px;
    }

    .product-quantity:before {
      content: "x";
    }

    .product-removal {
      width: auto;
    }

    .product-line-price {
      float: right;
      width: 70px;
    }
  }
  /* Make more adjustments for phone */
  @media screen and (max-width: 350px) {
    .product-removal {
      float: right;
    }

    .product-line-price {
      float: right;
      clear: left;
      width: auto;
      margin-top: 10px;
    }

    .product .product-line-price:before {
      content: "Item Total: $";
    }

    .totals .totals-item label {
      width: 60%;
    }
    .totals .totals-item .totals-value {
      width: 40%;
    }
  }
    </style>
</head>
<body>



                        @foreach ($data as $cart)


                        <div class="product">
                          <div class="product-image">
                            <img src="storage/img/{{$cart->product->image}}">
                          </div>
                          <div class="product-details">
                            <div class="product-title">{{$cart->product["name"]}}</div>
                          </div>

                          <div class="product-price">{{$cart["totalprice"]}}</div>

                          <form  action="{{ route('card.update',$cart->id) }}" method="post">
                                @csrf
                           <p class="product-quantity">Qnt: <input type="number" value="{{$cart["quantity"]}}" name="quantity">
                            <button type="submit"  style="width: 100px" class="btn btn-primary"> تعديل الكمية </button>

                           </form>

                          <div class="product-removal">

                            <form action="{{ route('card.destroy',$cart->id) }}" method="get">
                                @csrf
                                <button type="submit" class="remove-product">
                                    حذف
                                  </button>
                            </form>

                          </div>
                          <div class="product-line-price">{{$cart["totalprice"]}}</div>
                        </div>
                        @endforeach

                        <form id="FormTotal" action="{{ route('createorder') }}" method="post" >
                            @csrf
                            <input value="{{ $data }}" type="text" name="cards_id" hidden>

                        <div class="totals">
                          <div class="totals-item">
                            <label>الاجمالي </label>
                            <div  class="totals-value" id="cart-subtotal" >{{ $total }}</div>
                          </div>
                          <input name="totalprice" type="text"   value="{{ $total }}" hidden>
                        </div>

                      </div>

                      <button  id="submitbtn" type="submit" class="checkout">تاكيد الطلب</button>


                    </form>


</body>


</html>




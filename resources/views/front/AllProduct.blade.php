@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
      @foreach ($allProduct as $key => $product)
        @if ($key % 3 == 0)
          </div>
          <br>

          <div class="row">
        @endif
        <div class="col-sm-6 col-md-4" style="justify-content: center;
        display: flex;
        margin-bottom: 5px;">
          <div class="product">
            <form id="FormCard" action="{{ route('showProduct', ['id' => $product->id]) }}" method="post">
              @csrf
              <h5 class="card-title text-center  customfont u-custom-font " style="font-size:1.5rem">{{ $product->name }}</h5>
              <p class="card-text text-center customfont u-custom-font " style="font-size:1rem">{{ $product->description }}</p>
              <hr class="myhr">
              <img class="myimg mx-auto d-block" width="" alt="product" src="/storage/img/{{ $product->image }}">
              <hr class="myhr ">
          
                  @if ($product->sizes[0] != 'null')
                      <div class="d-flex justify-content-center">
                          <button type="submit">{{ __('store_.buttons.show_product') }}</button>
                      </div>
                      <p style="font-weight: bold; " dir="{{getDirection()}}" class="text-center customfont u-custom-font " style="font-size:1.3rem">{{ $product->price }} <span>{{ __('store_.buttons.currency') }}</span></p>
                      <h3>
                  @endif
              
          </form>
          </div>
        </div>
      @endforeach
    </div>
  </div>


@endsection

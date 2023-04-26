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
        <div class="col-sm-6 col-md-4">
          <div class="product">
            <form id="FormCard" action="{{ route('showProduct', ['id' => $product->id]) }}" method="post">
              @csrf
              <h3>{{ $product->name }}</h3>
              <p id="description">{{ $product->description }}</p>
              <hr class="myhr">
              <img class="myimg" width="" alt="product" src="/storage/img/{{ $product->image }}">
              <hr class="myhr">
              <button type="submit"> اعرض المنتج</button>
              <p style="font-weight: bold">{{$product->price}} د.أ</p>
              <h3>
         
              </h3>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  

@endsection
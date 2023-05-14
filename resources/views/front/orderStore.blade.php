@extends('layouts.master')
@section('content')

<section class="u-clearfix u-section-1" >



    @include('sweetalert::alert')

  
    <div class="center-2">
        <h3 class="text-center customfont u-custom-font"> {{ __('orders_.messages.shopping_thank',['name' => Auth::user()->name ]) }}!</h3>
        <br>

        <form action="{{ route('order.store') }}" method="post" style="text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="name" value="{{ Auth::user()->name }}">
          <div class="inputbox">
            <input type="text" name="phone"  required="required">
            <span>{{ __('orders_.finish_shopping_items.phone') }}</span>
          </div>
          <div class="inputbox">
            <input type="text" name="address"  required="required">
            <span>{{ __('orders_.finish_shopping_items.address') }}</span>
          </div>
          <div class="inputbox">
            <input type="text" name="postal_code"  required="required">
            <span>{{ __('orders_.finish_shopping_items.postal_code') }}</span>
          </div>
          <input type="hidden" name="shipping_price" value="3">
          <hr>
          
          <div class="row" style=" direction: {{getDirection()}};">
             <div class="col text-center-2">
          <span>{{ __('orders_.messages.order_price',['price' => $totalprice]) }}</span>
          <span> {{ __('orders_.messages.currency') }}</span>
          <hr>

          <span> {{ __('orders_.messages.shipping_price',['price' => 3]) }}</span>
          <span> {{ __('orders_.messages.currency') }}</span>
          <hr>
          <span>{{ __('orders_.messages.total_price',['price' => $totalprice + 3]) }}</span>
          <span id="lname3"> {{ __('orders_.messages.currency') }} </span>

          <input type="hidden" name="total_price" value="{{ $totalprice }}" hidden>
          <div class="inputbox">
            <input type="submit" value="{{ __('orders_.messages.confirm_order') }}">
          </div>
        </div>
    </div>

        </form>
      </div>

</section>
@endsection


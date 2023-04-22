@extends('layouts.master')
@section('content')

<section class="u-clearfix u-section-1" >



    @include('sweetalert::alert')

    

    <div class="center-2">
        <h3>Thank you for shopping with us {{ Auth::user()->name }}!</h3>
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
            <span>Phone</span>
          </div>
          <div class="inputbox">
            <input type="text" name="address"  required="required">
            <span>Address</span>
          </div>
          <div class="inputbox">
            <input type="text" name="postal_code"  required="required">
            <span>Postal code</span>
          </div>
          <input type="hidden" name="shipping_price" value="3">
          <hr>
          <div class="row" style=" direction: rtl;">
             <div class="col text-center-2">
          <label for="lname"> سعر الطلب :</label>
          <span>{{ $totalprice }} دينار </span>
          <hr>

          <label for="lname"> سعر الشحن :</label>
          <span> 3 دينار</span>
          <hr>
          <label for="lname"> الاجمالي:</label>
          <span> {{ $totalprice + 3 }} دينار </span>

          <input type="hidden" name="total_price" value="{{ $totalprice }}" hidden>
          <div class="inputbox">
            <input type="submit" value="تأكيد الطلب">
          </div>
        </div>
    </div>
          
        </form>
      </div>
    
</section>
@endsection


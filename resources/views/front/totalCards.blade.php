@extends('layouts.master')
@section('content')
<div>
  <div class="card border-0 shadow mb-4"style="direction: ltr;">
      <div class="card-body">
          <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
              <thead class="thead-light">
                  <tr>
                      <th class="border-0"> {{ __('total_cards.messages.name') }}</th>
                      <th class="border-0"> {{ __('total_cards.messages.image') }}</th>
                      <th class="border-0 " style="text-align: center"> {{ __('total_cards.actions.edit_quantity') }}</th>
                      <th class="border-0"> {{ __('total_cards.actions.remove_product') }}</th>
                      <th class="border-0"> {{ __('total_cards.messages.total_price') }}</th>
                      <th class="border-0" colspan="4"> {{ __('total_cards.messages.sub_total') }}</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $balance = 0; ?>
                  @foreach ($data as $cart)
                      <?php $balance += $cart["totalprice"]; ?>
                      <tr>
                          <td style="border-width: 0; margin-top: 20px;" class="fw-bold d-flex align-items-center">
                              {{ getDirection() == 'rtl' ? $cart->product["name"] :  $cart->product["name_english"] }}
                          </td>
                          <td  style="border-width: 0;" class="text-success">
                              <div class="d-flex align-items-center">
                                  <img style="max-width: 50px" src="storage/img/{{$cart->product->image}}">
                              </div>
                          </td>
                          <td  style="width: 25%;border-width: 0px;" class="text-success">
                              <form  action="{{ route('card.update',$cart->id) }}" method="post">
                                  @csrf
                                  <p class="product-quantity">{{ __('total_cards.messages.quantity') }}:  <input style="width: 50px;" type="number" value="{{$cart["quantity"]}}" name="quantity">
                                  <button type="submit" style="width: 100px; margin-left:4px" class="btn btn-primary"> {{ __('total_cards.actions.edit') }} </button>
                              </form>
                          </td>
                          <td  style="border-width: 0;" class="text-success">
                              <div class="d-flex align-items-center">
                                  <form action="{{ route('card.destroy',$cart->id) }}" method="get">
                                      @csrf
                                      <button type="submit" style="width: 100px; margin-left:4px;margin-top: 22px;" class="btn btn-danger"> {{ __('total_cards.actions.remove') }} </button>
                                  </form>
                              </div>
                          </td>
                          <td style="border-width: 0;">
                              <div class="row d-flex align-items-center">
                                  <div class="col-12 col-xl-2 px-0">
                                      <div class="small fw-bold" style="text-align: center;margin-top: 20px;">{{$cart["totalprice"]}}</div>
                                  </div>
                              </div>
                          </td>
                          <td style="border-width: 0;">
                              <div class="row d-flex align-items-center">
                                  <div class="col-12 col-xl-2 px-0">
                                      <div class="small fw-bold" style="text-align: center;margin-top: 20px;">{{$balance}}</div>
                                  </div>
                              </div>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>






          </div>
      </div>
      <div class="row">
        <div class="col" style="display: flex; justify-content: center">
          <form id="FormTotal" action="{{ route('createorder') }}" method="post" >
            @csrf
            <input value="{{ $data }}" type="text" name="cards_id" hidden>
           <div class="row">
            <div class="col text-center" >
              Total Price
            </div>

           </div>
           <div class="row text-center">
            <div class="col">{{$balance}}</div>
           </div>
            <button style="background-color: #bbcf3f !important; border:0"   type="submit" style="width: 100px; margin-left:4px;margin-top: 22px;" class="btn btn-primary"> {{ __('total_cards.actions.confirm') }}  </button>
                    <input name="totalprice" type="text"   value="{{ $total }}" hidden>

                  </form>
                  </div>
  </div>
</div>


@endsection

@extends('layouts.admin_master')
@extends('layouts.sidemenu')
@section('content')
<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb" dir="{{ getDirection() }}">
            <li>
                <a href="{{url('/')}}">{{ __('admin_.home') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{url('orders')}}">{{ __('admin_.orders') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>{{ __('admin_.add_order') }}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title" align="{{ getAlign() }}"> {{ __('admin_.add_order') }}
    </h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- END PAGE TITLE-->
    <div class="portlet-body form p-3">
        <!-- BEGIN FORM-->
        <form action="{{route('orders.store')}}" class="form-horizontal" method="POST">
           @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('admin_.customer_name') }}</label>
                            <div class="col-md-9">


                                <select class="form-control" name="user_id" data-placeholder="{{ __('admin_.customer_name') }}" tabindex="1">
                                    @foreach($users as $user)


                                    <option value="{{$user["id"]}}">{{$user["name"]}}                                    <input type="hidden" class="form-control" value="{{$user["name"]}}" name="name"></option>
                                {{--  foreach ->category table  --}}
                                @endforeach
                                </select>
                               <a href="{{route('users.create')}}"> <span class="help-block">{{ __('admin_.customer_first_register') }}</span></a>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('admin_.order_product') }}</label>
                            <div class="col-md-9">


                                <select class="form-control"  data-placeholder="{{ __('admin_.order_product_name') }}" tabindex="1">
                                    @foreach($products as $product)

                                    <option value="{{$product["id"]}}">{{$product["name"]}}</option>
                                {{--  foreach ->category table  --}}


                                @endforeach
                                </select>



                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('admin_.order_product_weight') }}</label>
                            <div class="col-md-9">

                                <select class="form-control" name="size_id" data-placeholder="{{ __('admin_.order_product_weight') }}" tabindex="1">
                                    @foreach($ProductSizes as $size)

                                    {{--  @if ($size->product_id == $value->name )  --}}

                                    <option value="{{$size["id"]}}">{{$size["size"]}}</option>
                                    {{--  foreach ->category table  --}}
                                    {{--  @endif  --}}
                                @endforeach
                                </select>



                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('admin_.customer_phone_number') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="0123456789" name="phone">
                                <span class="help-block"> {{ __('admin_.customer_phone_number_place') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('admin_.customer_address') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="الاسكندرية , مصر" name="address">
                                <span class="help-block">{{ __('admin_.customer_address_place') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('admin_.postal_number') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="430" name="postal_code">
                                <span class="help-block">{{ __('admin_.postal_number_place') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('admin_.order_price') }}</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="1500" name="total_price">
                                <span class="help-block">{{ __('admin_.order_price_place') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('admin_.shipping_fee') }}</label>
                            <div class="col-md-9">
                                <input type="hidden" class="form-control" value="3" name="shipping_price">
                                <span class="help-block">3 {{ __('admin_.shipping_fee_currency') }}  </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6" style="padding-top: 20px;">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{ __('admin_.order_add_button') }}</button>
                                        {{-- <button type="button" class="btn default">Cancel</button> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-top: 20px;"> </div>
                        </div>
                    </div>
        </form>

        <!-- END FORM-->
    </div>
</div>
<!-- END CONTENT BODY -->
<!-- END CONTENT -->
@endsection
@push('custom-scripts')
<script src="{{asset('/assets')}}/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<script src="{{asset('/assets')}}/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
<script src="{{asset('/assets')}}/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

@endpush

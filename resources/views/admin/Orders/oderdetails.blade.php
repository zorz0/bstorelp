@extends('layouts.admin_master')
@extends('layouts.sidemenu')
@section('content')

@include('sweetalert::alert')

<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT BODY -->
<div class="page-content" dir="ltr">
    <div class="tab-pane active" id="tab_1">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="portlet yellow-crusta box">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Order Details </div>
                     
                    </div>
                    <div class="portlet-body">
                        <div class="row static-info">
                            <div class="col-md-7 value"> {{$order->id}}
                            </div>
                            <div class="col-md-5 name"> Order #: </div>
                           
                        </div>
                        <div class="row static-info">
                            <div class="col-md-7 value"> {{$order->created_at}} </div>
                            <div class="col-md-5 name"> Order Date & Time: </div>

                        </div>
                        <div class="row static-info">
                            <div class="col-md-7 value">
                                <span class="label label-success"> {{$order->status}} </span>
                            </div>
                            <div class="col-md-5 name"> Order Status: </div>
                           
                        </div>
                        <div class="row static-info">
                            <div class="col-md-7 value"> {{$order->total_price}} JOD </div>

                            <div class="col-md-5 name"> Grand Total: </div>
                        </div>
                        <div class="row static-info">
                            <div class="col-md-7 value"> Cash </div>
                            <div class="col-md-5 name"> Payment Information: </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="portlet blue-hoki box">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Customer Information </div>
                      
                    </div>
                    <div class="portlet-body">
                        <div class="row static-info">
                            <div class="col-md-7 value"> {{$user->name}} </div>

                            <div class="col-md-5 name"> Customer Name: </div>
                        </div>
                        <div class="row static-info">
                            <div class="col-md-7 value"> {{$user->email}} </div>

                            <div class="col-md-5 name"> Email: </div>
                        </div>
                        
                        <div class="row static-info">
                            <div class="col-md-7 value"> {{$order->phone}} </div>

                            <div class="col-md-5 name"> Phone Number: </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="portlet green-meadow box">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Billing Address </div>
                     
                    </div>
                    <div class="portlet-body">
                        <div class="row static-info">
                            <div class="col-md-12 value"> {{$order->address}}
                               </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="portlet red-sunglo box">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Shipping Address </div>
                      
                    </div>
                    <div class="portlet-body">
                        <div class="row static-info">
                            <div class="col-md-12 value">{{$order->address}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-6"> </div>
            <div class="col-md-6">
                <div class="well">
                    <div class="row static-info align-reverse">
                        <div class="col-md-8 name"> Sub Total: </div>
                        <div class="col-md-3 value"> {{$order->total_price+$order->shipping_price}} </div>
                    </div>
                    <div class="row static-info align-reverse">
                        <div class="col-md-8 name"> Shipping: </div>
                        <div class="col-md-3 value"> {{$order->shipping_price}} </div>
                    </div>
                    <div class="row static-info align-reverse">
                        <div class="col-md-8 name"> Grand Total: </div>
                        <div class="col-md-3 value"> {{$order->total_price}} </div>
                    </div>
                    <div class="row static-info align-reverse">
                        <div class="col-md-8 name"> Total Paid: </div>
                        <div class="col-md-3 value"> {{0}} </div>
                    </div>
              
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


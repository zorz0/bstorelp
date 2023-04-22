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
                        <div class="portlet-title" style="display: flex;">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Order Details
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="row static-info">
                                <div class="col-md-7 value"> {{ $order->id }}
                                </div>
                                <div class="col-md-5 name"> Order #: </div>

                            </div>
                            <div class="row static-info">
                                <div class="col-md-7 value"> {{ $order->created_at }} </div>
                                <div class="col-md-5 name"> Order Date & Time: </div>

                            </div>
                            <div class="row static-info">
                                <div class="col-md-7 value">
                                    <span class="label label-success"> {{ $order->status }} </span>
                                </div>
                                <div class="col-md-5 name"> Order Status: </div>

                            </div>
                            <div class="row static-info">
                                <div class="col-md-7 value"> {{ $order->total_price }} JOD </div>

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
                        <div class="portlet-title" style="display: flex;">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Customer Information
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="row static-info">
                                <div class="col-md-7 value"> {{ $user->name }} </div>

                                <div class="col-md-5 name"> Customer Name: </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-7 value"> {{ $user->email }} </div>

                                <div class="col-md-5 name"> Email: </div>
                            </div>

                            <div class="row static-info">
                                <div class="col-md-7 value"> {{ $order->phone }} </div>

                                <div class="col-md-5 name"> Phone Number: </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="portlet green-meadow box">
                        <div class="portlet-title" style="display: flex;">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Billing Address
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="row static-info">
                                <div class="col-md-12 value"> {{ $order->address }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="portlet red-sunglo box">
                        <div class="portlet-title" style="display: flex;">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Shipping Address
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="row static-info">
                                <div class="col-md-12 value">{{ $order->address }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="well">
                        <div class="row static-info align-reverse">
                            <div class="col-md-3 value"> {{ $order->total_price + $order->shipping_price }} </div>

                            <div class="col-md-8 name"> Sub Total: </div>
                        </div>
                        <div class="row static-info align-reverse">
                            <div class="col-md-3 value"> {{ $order->shipping_price }} </div>

                            <div class="col-md-8 name"> Shipping: </div>
                        </div>
                        <div class="row static-info align-reverse">
                            <div class="col-md-3 value"> {{ $order->total_price }} </div>

                            <div class="col-md-8 name"> Grand Total: </div>
                        </div>
                        <div class="row static-info align-reverse">
                            <div class="col-md-3 value"> {{ 0 }} </div>

                            <div class="col-md-8 name "> Total Paid: </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12" dir="ltr">
                    <div class="portlet grey-cascade box">
                        <div class="portlet-title">
                            <div class="caption">
                            </div>
                            <div class="actions">
                                Shopping Cart <i class="fa fa-cogs"></i></div>

                        </div>
                        <div class="portlet-body" dir="ltr">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center"> Product </th>
                                            <th class="text-center"> Item Status </th>
                                            <th class="text-center"> Original Price </th>
                                            
                                            <th class="text-center"> Discount Amount </th>
                                            <th class="text-center"> Quantity </th>
                                            <th class="text-center"> size </th>

                                            <th class="text-center"> Add To chart At </th>

                                            <th class="text-center"> Total </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        @foreach ($cards as $item)
                                            <tr>
                                                <td class="text-center">{{$item['product_name']}}</td>

                                                <td class="text-center">
                                                    <span class="label label-sm label-success"> Available
                                                </td>
                                                <td class="text-center"> {{ $item['product_sizes'][0]->price }} 
                                                </td>
                                                <td class="text-center">{{$item['product_sizes'][0]->discount}}</td>
                                                <td class="text-center">{{ $item->quantity}}</td>
                                                <td class="text-center">{{$item['product_size']}}</td>

                                                <td class="text-center">{{ $item->created_at}}</td>

                                                
                                                <td class="text-center">{{ $item['product_sizes'][0]->price - $item['product_sizes'][0]->discount }}</td>



                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

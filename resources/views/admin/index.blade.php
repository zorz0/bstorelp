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
                <a href="index.html">{{ __('dashboard_.messages.home') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>{{ __('dashboard_.messages.control_panel') }}</span>
            </li>
        </ul>
        {{-- <div class="page-toolbar">
            <div class="btn-group pull-right">
                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon-bell"></i> Action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-shield"></i> Another action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-user"></i> Something else here</a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="#">
                            <i class="icon-bag"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title" align="{{ getAlign() }}"> {{ __('dashboard_.messages.control_panel') }}
        {{-- <small>dashboard & statistics</small> --}}
    </h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="fa fa-briefcase fa-icon-medium"></i>
                </div>
                <div class="details">
                    <div class="number"> 1684 </div>
                    <div class="desc"> {{ __('dashboard_.messages.sales') }} </div>
                </div>
                <a class="more" href="javascript:;">{{ __('dashboard_.actions.show_more') }}
                    <i class="m-icon-swapleft m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number"> 1127 </div>
                    <div class="desc"> {{ __('dashboard_.messages.orders') }} </div>
                </div>
                <a class="more" href="javascript:;"> {{ __('dashboard_.actions.show_more') }}
                    <i class="m-icon-swapleft m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-group fa-icon-medium"></i>
                </div>
                <div class="details">
                    <div class="number"> 1970.54  د.أ</div>
                    <div class="desc"> {{ __('dashboard_.messages.sales_average') }} </div>
                </div>
                <a class="more" href="javascript:;">{{ __('dashboard_.actions.show_more') }}
                    <i class="m-icon-swapleft m-icon-white"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-globe font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">{{ __('dashboard_.messages.latest_orders') }}</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th>{{ __('dashboard_.messages.order.order_number') }}</th>
                                    <th>{{ __('dashboard_.messages.order.order_price') }}</th>
                                    <th>{{ __('dashboard_.messages.order.order_status') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ( $orders as $order )
                                    <tr class="odd gradeX">

                                    <td>{{$order->id}}</td>
                                    <td>{{$order->total_price}}</td>
                                    <td>{{$order->status}}</td>

                                    </tr>
                                    @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        <div class="col-md-6 col-sm-6">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-globe font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">{{ __('dashboard_.messages.latest_products') }}</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th> {{ __('dashboard_.messages.latest_product.product_image') }} </th>
                                    <th>{{ __('dashboard_.messages.latest_product.product_name') }}</th>
                                    <th>{{ __('dashboard_.messages.latest_product.product_quantity') }}</th>
                                </tr>
                            </thead>
                            <tbody>


                                        @foreach ($products as $item )

                                <tr>
                                    <td>
                                        <img style="    width: 50px;
                                        height: 50px;" src="{{ asset('storage/img/' . $item->image) }}" alt="img">
                                    </td>


                                           <td> {{$item->name}}</td>
                                           <td> {{$item->quantity}}</td>

                                        </td>
                                           @endforeach



                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        {{-- <div class="col-md-6">
            <!-- Begin: life time stats -->
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-globe font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Revenue</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#portlet_ecommerce_tab_1" data-toggle="tab"> Amounts </a>
                        </li>
                        <li>
                            <a href="#portlet_ecommerce_tab_2" id="statistics_orders_tab" data-toggle="tab"> Orders </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_ecommerce_tab_1">
                            <div id="statistics_1" class="chart"> </div>
                        </div>
                        <div class="tab-pane" id="portlet_ecommerce_tab_2">
                            <div id="statistics_2" class="chart"> </div>
                        </div>
                    </div>
                    <div class="well margin-top-20">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-success"> Revenue: </span>
                                <h3>$1,234,112.20</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-info"> Tax: </span>
                                <h3>$134,90.10</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-danger"> Shipment: </span>
                                <h3>$1,134,90.10</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-warning"> Orders: </span>
                                <h3>235090</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: life time stats -->
        </div> --}}
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-globe font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">{{ __('dashboard_.messages.latest_members') }}</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th> {{ __('dashboard_.messages.member.member_number') }} </th>
                                    <th> {{ __('dashboard_.messages.member.member_name') }}</th>
                                    <th> {{ __('dashboard_.messages.member.member_email') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )

                                @endforeach
                                <tr class="odd gradeX">
                                    <td>
{{$user->id}}                                    </td>
                                    <td> {{$user->name}} </td>
                                    <td>
                                        <a style="font-size: 10px" href="{{$user->email}}"> {{$user->email}} </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        <div class="col-md-6 col-sm-6">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-globe font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">{{ __('dashboard_.messages.products') }}</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th>{{ __('dashboard_.messages.product.product_image') }}</th>
                                    <th>{{ __('dashboard_.messages.product.product_name') }}</th>
                                    <th>{{ __('dashboard_.messages.product.product_quantity') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Allproducts as $Product )

                                <tr>
                                    <td>
                                        <img style="width: 50px;
                                        height: 50px;" src="{{ asset('storage/img/' . $Product->image) }}" alt="img">
                                    </td>


                                           <td> {{$Product->name}}</td>
                                           <td> {{$Product->quantity}}</td>

                                        </td>
                                           @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
<!-- END CONTENT -->
@endsection
@push('custom-scripts')
{{-- <script src="{{asset('/assets')}}/pages/scripts/dashboard.min.js" type="text/javascript"></script> --}}
<script src="{{asset('/assets')}}/pages/scripts/ecommerce-dashboard.min.js" type="text/javascript"></script>

@endpush

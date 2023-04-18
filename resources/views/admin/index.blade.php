@extends('layouts.admin_master')
@extends('layouts.sidemenu')
@section('content')
<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">الرئيسية</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>لوحة التحكم</span>
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
    <h3 class="page-title"> لوحة التحكم
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
                    <div class="desc"> مبيعات </div>
                </div>
                <a class="more" href="javascript:;"> عرض المزيد
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
                    <div class="desc"> الطلبات </div>
                </div>
                <a class="more" href="javascript:;"> عرض المزيد
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
                    <div class="desc"> متوسط المبيعات </div>
                </div>
                <a class="more" href="javascript:;"> عرض المزيد
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
                        <span class="caption-subject font-dark bold uppercase">احدث الطلبات</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th> رقم الطلب </th>
                                    <th> قيمة الطلب </th>
                                    <th> حالة الطلب</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ </td>
                                    <td>
                                        منتهي
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ  </td>
                                    <td>
                                        مرفوض
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ  </td>
                                    <td>
                                        ملغى
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ  </td>
                                    <td>
                                        قيد التنفيذ
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ  </td>
                                    <td>
                                        جديد
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ  </td>
                                    <td>
                                        جديد
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ  </td>
                                    <td>
                                        جديد
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ  </td>
                                    <td>
                                        جديد
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ  </td>
                                    <td>
                                        جديد
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        #1111
                                    </td>
                                    <td> 11231 د.أ  </td>
                                    <td>
                                        جديد
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
                        <span class="caption-subject font-dark bold uppercase">احدث المنتجات</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th> صورة </th>
                                    <th> اسم المنتج </th>
                                    <th> الكمية </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
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
                        <span class="caption-subject font-dark bold uppercase">احدث الأعضاء</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th> صورة </th>
                                    <th> اسم العميل </th>
                                    <th> البريد الالكتروني </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> shuxer </td>
                                    <td>
                                        <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> looper </td>
                                    <td>
                                        <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> userwow </td>
                                    <td>
                                        <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> user1wow </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
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
                        <span class="caption-subject font-dark bold uppercase">المنتجات</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th> صورة </th>
                                    <th> اسم المنتج </th>
                                    <th> الكمية </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>
                                        <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                    </td>
                                    <td> منتج 1 </td>
                                    <td>
                                        100
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
    </div>
</div>
<!-- END CONTENT BODY -->
<!-- END CONTENT -->
@endsection
@push('custom-scripts')
{{-- <script src="{{asset('/assets')}}/pages/scripts/dashboard.min.js" type="text/javascript"></script> --}}
<script src="{{asset('/assets')}}/pages/scripts/ecommerce-dashboard.min.js" type="text/javascript"></script>

@endpush

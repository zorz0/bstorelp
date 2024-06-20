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
                <a href="index.html">{{ __('products_.home') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">{{ __('products_.products') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>{{ __('products_.all_products') }}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title" align="{{ getAlign() }}">{{ __('products_.all_products') }}
        {{-- <small>managed datatable samples</small> --}}
    </h3>
    <!-- END PAGE TITLE-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> {{ __('products_.products') }}</span>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                 <a href="{{ route('product.create') }}"> <button id="sample_editable_1_new" class="btn sbold green"> {{ __('products_.actions.add_product') }}
                                        <i class="fa fa-plus"></i>
                                    </button>

                                </a>
                                </div>
                            </div>
                            {{--  <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">أدوات
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="{{url('addProduct')}}">
                                                <i class="fa fa-print"></i> طباعة </a>
                                        </li>
                                        <li>
                                            <a href="{{url('addProduct')}}">
                                                <i class="fa fa-file-pdf-o"></i> حفظ كـ PDF </a>
                                        </li>
                                        <li>
                                            <a href="{{url('addProduct')}}">
                                                <i class="fa fa-file-excel-o"></i> استيراد إلى Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>  --}}

                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                        <span></span>
                                    </label>
                                </th>
                                <th>#</th>


                                <th> {{ __('products_.productFields.product_name') }} </th>
                                <th>{{ __('products_.productFields.product_category') }} </th>

                                <th>{{ __('products_.productFields.product_price') }}</th>
                                <th>{{ __('products_.productFields.product_discount_amount') }}</th>
                                <th>{{ __('products_.productFields.product_image') }}</th>
                                <th>{{ __('products_.productFields.procedures') }} </th>
                            </tr>
                        </thead>
                     @foreach($data as $value)


                        <tbody>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>{{ $value['id'] }}</td>

                                <td> {{ $value['name'] }}</td>
                                <td>
                                   {{ $value->category['name'] }}
                                </td>
                                <td class="center">  {{ $value['price'] }} </td>
                                <td>{{ $value['discount_price'] }}</td>

                                <td>
                                    <img width="100px" src="/storage/img/{{ $value->image }}">
                                </td>

                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> {{ __('products_.productFields.procedures') }}
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{route('product.edit',$value["id"])}}">

                                                    <i class="icon-docs"></i> {{ __('products_.actions.edit_product') }} </a>
                                            </li>
                                            <li>
                                                <a href="{{route('productSize.create',$value["id"])}}">

                                                    <i class="icon-docs"></i> {{ __('products_.actions.add_product_weight') }} </a>
                                            </li>
                                            <li>

                                                   <a href="{{ route('product.destroy', $value->id) }}" onclick="return confirm({{ __('products_.actions.delete_product_confirmation') }})"> <i class="icon-trash"></i> {{ __('products_.actions.delete') }} </a>

                                                {{--  <a href="{{route('product.destroy',$value["id"])}}">
                                                    </a>  --}}
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                        @endforeach
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
<!-- END CONTENT -->
@endsection
@push('custom-scripts')
{{--  <script src="{{asset('/assets')}}/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>  --}}
@endpush

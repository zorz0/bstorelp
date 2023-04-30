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
                <span>{{ __('products_.actions.add_product') }}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title" align="{{ getAlign() }}">{{ __('products_.actions.add_product') }}
    </h3>
    <!-- END PAGE TITLE-->
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ route('productSize.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="form-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('products_.productFields.product_name') }}</label>

                            <div class="col-md-9">
                        <span>{{ $products['name'] }}</span>




                            </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('products_.productFields.weight') }}</label>
                            <div class="col-md-9">
                                <input type="text" name="size" class="form-control" placeholder="100">
                                <span class="help-block"> {{ __('products_.messages.weight_insertion') }} </span>
                            </div>
                        </div>
                    </div>

                    <input type="number" value="{{ $products['id'] }}" name="product_id"  hidden>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">{{ __('products_.productFields.quantity') }}</label>
                                <div class="col-md-9">
                                    <input type="number" name="quantity" class="form-control" placeholder="100">
                                    <span class="help-block">{{ __('products_.messages.quantity_insertion') }} </span>
                                </div>
                            </div>
                        </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('products_.productFields.price') }}</label>
                            <div class="col-md-9">
                                <input type="number" name="price" class="form-control" placeholder="100">
                                <span class="help-block">{{ __('products_.messages.price_insertion') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('products_.productFields.discount') }}</label>
                            <div class="col-md-9">
                                <input type="number" name="discount" class="form-control" placeholder="100">
                                <span class="help-block">{{ __('products_.productFields.discount') }} </span>
                            </div>
                        </div>
                    </div>


                    <!--/row-->





                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{ __('products_.actions.add') }}</button>
                                        {{-- <button type="button" class="btn default">Cancel</button> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
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

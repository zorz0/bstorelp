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
                <span>{{ __('products_.actions.edit_product') }}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title" align="{{ getAlign() }}">{{ __('products_.actions.edit_product') }}
    </h3>
    <!-- END PAGE TITLE-->
    <div class="portlet-body form">
        <!-- BEGIN FORM-->

        <form action="{{ route('product.update',$data["id"]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('put')
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('products_.productFields.product_name') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $data['name'] }}" name="name" placeholder="قهوة مثلا">
                                <span class="help-block">{{ __('products_.messages.name_insertion') }} </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label
                                class="control-label col-md-3">{{ __('products_.productFields.product_name_english') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name_english"
                                    value="{{$data["name_english"]}}">
                                <span class="help-block">{{ __('products_.messages.name_insertion') }} in english </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('products_.productFields.discount') }}</label>
                            <div class="col-md-9">
                                <input type="number" value="{{ $data['discount_price'] }}" name="discount_price" class="form-control" placeholder="100">
                                <span class="help-block">{{ __('products_.messages.discount_insertion') }} </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('products_.productFields.price') }}</label>
                            <div class="col-md-9">
                                <input type="number" value="{{ $data['price'] }}" name="price" class="form-control" placeholder="100">
                                <span class="help-block">{{ __('products_.messages.price_insertion') }} </span>
                            </div>
                        </div>
                    </div>

                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">{{ __('products_.productFields.category') }}</label>
                                <div class="col-md-9">


                                    <select class="form-control" name="category_id" data-placeholder="اختر فئة" tabindex="1">
                                        @foreach($Category as $value)

                                        <option value="{{$value["id"]}}">{{$value["name"]}}</option>
                                    @endforeach
                                    </select>


                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('products_.productFields.description') }}</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea id="description"  class="form-control" name="description" rows="2">{{ $data['description'] }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('products_.productFields.description_english') }} </label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea id="description_english" class="form-control" name="description_english"  rows="2">{{$data["description_english"]}}</textarea>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('products_.productFields.Alldescription') }}</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea id="Alldescription2" class="form-control" name="Alldescription"  rows="4">{{$data["Alldescription"]}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('products_.productFields.Alldescription_english') }}</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea id="Alldescription2"  class="form-control" name="Alldescription_english" rows="4">{{$data["Alldescription_english"]}}</textarea>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('products_.productFields.product_main_image') }}</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="file" accept="image/*" name="image" value="{{ $data['image'] }}" class="dropify" />

                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('products_.productFields.product_images') }}</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="file" accept="image/*" name="files[]" class="dropify" multiple/>

                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{ __('products_.actions.edit_product') }}</button>
                                        {{-- <button type="button" class="btn default">Cancel</button> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>

                    </div>
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

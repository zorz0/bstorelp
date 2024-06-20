@extends('layouts.admin_master')
@extends('layouts.sidemenu')
@section('content')
@include('sweetalert::alert')
    <!-- BEGIN CONTENT -->
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb" dir="{{ getDirection() }}">
                <li>
                    <a href="index.html">{{ __('admin_.home') }}</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="{{ url('users') }}">{{ __('admin_.settings') }}</a>
                    <i class="fa fa-circle"></i>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title">
        </h3>
        @if ($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        <!-- END PAGE TITLE-->
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form role="form" action="{{ route('admin.settings.update', $setting->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group col-md-4">
                    <label class="control-label">{{  __('admin_.site_name') }}</label>
                    <input type="text" placeholder="{{  __('admin_.full_name') }}" class="form-control" name="title"
                        value="{{ $setting->title }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">{{  __('admin_.phone_number') }}</label>
                    <input type="text" placeholder="0123456789" name="phone" class="form-control"
                        value="{{ $setting->phone }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">{{  __('admin_.main_concurrency') }}</label>
                    <input type="text" placeholder="د.أ" name="currency" class="form-control"
                        value="{{ $setting->currency }}">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">{{  __('admin_.logo') }}</label>
                    <input type="file" accept="image/" name="logo" />
                    <img src="{{ $setting->logo }}" width="50px" alt="">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">{{  __('admin_.link_small_pic') }}</label>
                    <input type="file" accept="image/" name="favicon" />
                    <img src="value='{{ $setting->favicon }}'" width="50px" alt="">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">{{  __('admin_.banner_image') }}</label>
                    <input type="file" accept="image/" name="panerImgs" class="dropify" />
                        <img src="value='{{ $setting->panerImgs }}'" width="50px" alt="">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">{{  __('admin_.site_email') }}</label>
                    <input type="email" placeholder="User@gmail.com" name="email" class="form-control"
                        value="{{ $setting->email }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">{{  __('admin_.address') }}</label>
                    <input type="text" class="form-control" name="address" value="{{ $setting->address }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">{{  __('admin_.facebook_link') }}</label>
                    <input type="text" class="form-control" name="facebook" value="{{ $setting->facebook }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">{{  __('admin_.twitter_link') }}</label>
                    <input type="text" class="form-control" name="twitter" value="{{ $setting->twitter }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">{{  __('admin_.instagram_link') }}</label>
                    <input type="text" class="form-control" name="instagram" value="{{ $setting->instagram }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">{{  __('admin_.youtube_link') }}</label>
                    <input type="text" class="form-control" name="youtube" value="{{ $setting->youtube }}">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">{{  __('admin_.about_site') }}</label>
                    <textarea class="ckeditor form-control" name="description" rows="6">{{ $setting->description }}</textarea>
                </div>
                <button type="submit" class="btn green">{{  __('admin_.save_button') }} </button>
            </form>

            <!-- END FORM-->
        </div>
    </div>
    <!-- END CONTENT BODY -->
    <!-- END CONTENT -->
@endsection
@push('custom-scripts')
    <script src="{{ asset('/assets') }}/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
    <script src="{{ asset('/assets') }}/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
    <script src="{{ asset('/assets') }}/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
@endpush

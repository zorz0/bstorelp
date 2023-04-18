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
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">الرئيسية</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="{{ url('users') }}">الاعدادات</a>
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
        <h3 class="page-title"> اعدادات الموقع
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
                    <label class="control-label">اسم الموقع</label>
                    <input type="text" placeholder="الاسم بالكامل" class="form-control" name="title"
                        value="{{ $setting->title }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">رقم الهاتف</label>
                    <input type="text" placeholder="0123456789" name="phone" class="form-control"
                        value="{{ $setting->phone }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">العملة الرئيسية</label>
                    <input type="text" placeholder="د.أ" name="currency" class="form-control"
                        value="{{ $setting->currency }}">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">الشعار</label>
                    <input type="file" accept="image/" name="logo" />
                    <img src="{{ $setting->logo }}" width="50px" alt="">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">الصورة المصغرة بالرابط</label>
                    <input type="file" accept="image/" name="favicon" />
                    <img src="value='{{ $setting->favicon }}'" width="50px" alt="">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">صورة البانر</label>
                    <input type="file" accept="image/" name="panerImgs" class="dropify" />
                        <img src="value='{{ $setting->panerImgs }}'" width="50px" alt="">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">البريد الالكتروني للموقع</label>
                    <input type="email" placeholder="User@gmail.com" name="email" class="form-control"
                        value="{{ $setting->email }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">العنوان</label>
                    <input type="text" class="form-control" name="address" value="{{ $setting->address }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">فيسبوك</label>
                    <input type="text" class="form-control" name="facebook" value="{{ $setting->facebook }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">تويتر</label>
                    <input type="text" class="form-control" name="twitter" value="{{ $setting->twitter }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">انستجرام</label>
                    <input type="text" class="form-control" name="instagram" value="{{ $setting->instagram }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">يوتيوب</label>
                    <input type="text" class="form-control" name="youtube" value="{{ $setting->youtube }}">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">عن الموقع</label>
                    <textarea class="ckeditor form-control" name="description" rows="6">{{ $setting->description }}</textarea>
                </div>
                <button type="submit" class="btn green"> حفظ </button>
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

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
                <a href="{{route('users.index')}}">الأعضاء</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>اضافة عضو</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> اضافة عضو
    </h3>
    <!-- END PAGE TITLE-->
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form role="form" action="{{route('users.store')}}" method="POST">
            @csrf


            <div class="form-group col-md-6">
                <label class="control-label">الاسم</label>
                <input type="text" placeholder="الاسم بالكامل" class="form-control" name="name" required>
            </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            {{-- <div class="form-group col-md-6">
                <label class="control-label">رقم الهاتف</label>
                <input type="text" placeholder="0123456789" class="form-control">
            </div> --}}
            <div class="form-group col-md-6">
                <label class="control-label">البريد الالكتروني</label>
                <input type="email" placeholder="User@gmail.com" class="form-control" name="email" required>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
             <div class="form-group col-md-6">
                <label class="control-label">كلمة المرور</label>
                <input type="password" class="form-control" name="password">
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            {{-- <div class="form-group col-md-12">
                <label class="control-label">الصورة الشخصية</label>
                    <input type="file" accept="image/*" name="files[]" class="dropify" multiple/>
            </div> --}}
            <br>
            <div class="form-group col-md-12">
            <button type="submit" class="btn green"> حفظ </button>
            </div>
        </form>

    </div>
        <!-- END FORM-->
</div>
<!-- END CONTENT BODY -->
<!-- END CONTENT -->
@endsection
@push('custom-scripts')
<script src="{{asset('/assets')}}/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<script src="{{asset('/assets')}}/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
<script src="{{asset('/assets')}}/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

@endpush

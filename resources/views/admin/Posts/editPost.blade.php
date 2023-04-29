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
                <a href="{{url('/dashboard/index')}}">الرئيسية</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{route('posts.index')}}">المقالات</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>اضافة مقال</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> اضافة مقال
    </h3>
    @isset($blog)
    <h3 class="page-title"> تعديل مقال
    </h3>
    @endisset
    <!-- END PAGE TITLE-->
    <div class="portlet-body form">
        <!-- BEGIN FORM-->

        <form action="{{route('posts.update',['id'=>$blog->id])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-2">عنوان المقال</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" value="{{$blog->title}}" name="title">
                                <span class="help-block"> عنوان المقال يكتب هنا </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">المحتوى</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea class="form-control"  rows="6" name="description">{{$blog->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">الصورة الرئيسية</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="file" accept="image/*" class="dropify" name="image" required/>

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
                                        <button type="submit" class="btn green">اضافة</button>
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

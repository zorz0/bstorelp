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
                <a href="index.html">{{ __('admin_.home') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">{{ __('admin_.categories') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>{{ __('admin_.all_categories') }}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">{{ __('admin_.all_categories') }}
        {{-- <small>managed datatable samples</small> --}}
    </h3>
    <!-- END PAGE TITLE-->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>

                                <span class="caption-subject font-dark sbold uppercase">{{ __('admin_.edit_category') }} </span>



                            </div>
                        </div>
                        <div class="portlet-body form">

                            <form class="form-horizontal" action="{{route('categories.update',['id'=>$category->id])}}" method="POST" enctype="multipart/form-data" role="form">
                               @csrf

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">{{ __('admin_.category_name') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" value="{{$category->name}}" required>
                                            <span class="help-block"> {{ __('admin_.insert_category_name') }} </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">{{ __('admin_.category_name_english') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" name="name_Engilsh" class="form-control" value="{{$category->name_Engilsh}}"  required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"{{ __('admin_.category_image') }}</label>
                                        <div class="col-md-6">
                                            <input type="file" name="image"  placeholder="صورة للفئة" >
                                            <span class="help-block">{{ __('admin_.insert_category_image') }} </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn green">{{ __('admin_.save_button') }}</button>
                                            {{-- <button type="button" class="btn default">Cancel</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </form>

 @endsection

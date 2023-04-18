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
                <span>جميع المقالات</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> جميع المقالات
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
                        <span class="caption-subject bold uppercase"> المقالات</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="{{route('posts.create')}}" id="sample_editable_1_new" class="btn sbold green"> أضافة مقال
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">أدوات
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> طباعة </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> حفظ كـ PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-excel-o"></i> استيراد إلى Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                        <span></span>
                                    </label>
                                </th>
                                <th> عنوان المقال</th>
                                <th>  صورة المقال</th>
                                <th> اجراءات </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)


                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> {{$blog->title}}</td>

                                <td>
                                    <img src="/storage/imgs/{{$blog->image}}"  width="100px" alt="">
                                    </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            {{--  <li>
                                                <a href="{{route('posts.create')}}">
                                                    <i class="icon-docs"></i> اضافة مقال جديد </a>
                                            </li>  --}}
                                            <li>
                                                <a href="{{route('posts.edit',['id'=>$blog->id])}}">
                                                    <i class="icon-docs"></i> تعديل </a>
                                            </li>
                                            <li>
                                                <a href="{{route('posts.destroy',['id'=>$blog->id])}}">
                                                    <i class="icon-docs" onclick="return confirm('هل انت متأكد انك تريد حذف هذا المقال ؟')"></i> حذف </a>
                                            </li>
                                            {{-- <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            @endforeach

                            {{$blogs->links()}}

                            {{-- we get them from data base  --}}
                            {{-- <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> عنوان المقال تفصيلي </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-docs"></i> New Post </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-tag"></i> New Comment </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-user"></i> New User </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-flag"></i> Comments
                                                    <span class="badge badge-success">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
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
{{-- <script src="{{asset('/assets')}}/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script> --}}
@endpush

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
                <a href="#">الأعضاء</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>جميع الأعضاء</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> جميع الأعضاء
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
                        <span class="caption-subject bold uppercase"> الأعضاء</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="{{route('users.create')}}" id="sample_editable_1_new" class="btn sbold green"> أضافة عضو
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">

                                {{-- <div class="btn-group">
                                    <button id="sample_editable_1_new" class="btn sbold green"> أضافة فئة
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div> --}}
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">أدوات
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="{{url('addUser')}}">
                                                <i class="fa fa-print"></i> طباعة </a>
                                        </li>
                                        <li>
                                            <a href="{{url('addUser')}}">
                                                <i class="fa fa-file-pdf-o"></i> حفظ كـ PDF </a>
                                        </li>
                                        <li>
                                            <a href="{{url('addUser')}}">
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
                                <th> اسم المستخدم </th>
                                <th> البريد الالكتروني </th>
                                <th> الحالة </th>
                                <th> انضم في </th>
                                <th> اجراءات </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)


                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> {{$user->name}} </td>
                                <td>
                                    <a href="mailto:{{$user->email}}"> {{$user->email}} </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-success"> اعتمد </span>
                                </td>
                                <td class="center">{{$user->created_at}} </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{route('users.edit',['id'=>$user->id])}}">
                                                    <i class="icon-user"></i> تعديل </a>
                                            </li>
                                            @if($user->id != auth()->user()->id)
                                            <li>
                                                <a href="{{route('users.destroy',['id'=>$user->id])}}" onclick="return confirm('هل انت متأكد من حذف هذا العضو ؟')">
                                                    <i class="icon-user"></i> حذف </a>

                                                </li>
                                                @endif
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            {{$users->links()}}
                            {{-- <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> looper </td>
                                <td>
                                    <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> userwow </td>
                                <td>
                                    <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-success"> اعتمد </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> user1wow </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-danger"> ممنوع </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> restest </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-success"> اعتمد </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> foopl </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-info">معلومات </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> weep </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-danger"> مرفوض </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> coop </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-info">معلومات </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> pppol </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-danger"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> test </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> userwow </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> test </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> goop </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> weep </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> toopl </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> userwow </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> tes21t </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> fop </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> kop </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> vopl </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> userwow </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> wap </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> test </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> toop </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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
                                <td> weep </td>
                                <td>
                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                </td>
                                <td>
                                    <span class="label label-sm label-warning"> موقوف </span>
                                </td>
                                <td class="center"> 12.12.2011 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addUser')}}">
                                                    <i class="icon-user"></i> تعديل </a>
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

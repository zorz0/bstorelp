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
                <a href="index.html">{{ __('users_.home') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{route('users.index')}}">{{ __('users_.members') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>{{ __('users_.edit_user') }}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title" align="{{ getAlign() }}">{{ __('users_.edit_user') }}
    </h3>
    <!-- END PAGE TITLE-->
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form role="form" action="{{route('users.update',['id'=>$user->id])}}" method="POST">
            @csrf
            <div class="form-group col-md-6">
                <label class="control-label">{{ __('users_.editFields.name') }}</label>
                <input type="text" value="{{$user->name}}" class="form-control" name="name" required>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label">{{ __('users_.editFields.email') }}</label>
                <input type="email" value="{{$user->email}}" class="form-control" name="email" required>
            </div>
            {{-- <div class="form-group col-md-6">
                <label class="control-label">كلمة المرور</label>
                <input type="password" name="password" class="form-control">
            </div> --}}
            <div class="form-group col-md-12">
                <button type="submit" class="btn green">{{ __('users_.actions.save') }} </button>
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

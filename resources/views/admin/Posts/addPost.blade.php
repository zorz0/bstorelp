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
                <a href="{{url('/dashboard/index')}}">{{ __('admin_.home') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{route('posts.index')}}">{{ __('admin_.posts') }}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>{{ __('admin_.add_post') }}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title" align="{{ getAlign() }}">{{ __('admin_.add_post') }}
    </h3>
    @isset($blog)
    <h3 class="page-title">{{ __('admin_.edit_post') }}
    </h3>
    @endisset
    <!-- END PAGE TITLE-->
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{route('posts.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-2">{{ __('admin_.post_title') }}</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" required placeholder="{{ __('admin_.post_title_example') }}" name="title">
                                <span class="help-block">{{ __('admin_.post_title_place') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">{{ __('admin_.post_title_english') }}</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="{{ __('admin_.post_title_example') }}" required name="title_english">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('admin_.post_content') }}</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea class=" form-control" required  rows="4" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('admin_.post_content_english') }}</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea class=" form-control" required  rows="4" name="description_english"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('admin_.main_post_image') }}</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="file" accept="image/*" class="dropify" name="image" required/>

                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('admin_.all_post_image') }}</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="file" accept="image/*" class="dropify" name="all_image[]" multiple  required/>

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
                                        <button type="submit" class="btn green">{{ __('admin_.post_add_button') }}</button>
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
           @isset($blog)
        <form action="{{route('posts.update',['id'=>$blog->id])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-2">{{ __('admin_.post_title') }}</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" value="{{$blog->title}}" name="title">
                                <span class="help-block"> {{ __('admin_.post_title_place') }} </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">{{ __('admin_.post_content') }}</label>
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
                            <label class="col-md-3 pb-15">{{ __('admin_.post_main_image') }}</label>
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
                                        <button type="submit" class="btn green">{{ __('admin_.post_add_button') }}</button>
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
@endisset
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

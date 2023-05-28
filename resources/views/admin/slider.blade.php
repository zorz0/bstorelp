@extends('layouts.admin_master')
@extends('layouts.sidemenu')
@section('content')
<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <form action="{{ route('slider.add') }}" method="POST" enctype="multipart/form-data">
    @csrf   
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-12">
                    <input type="file" accept="image/*" name="sliderimage[]" class="dropify"
                        multiple />

                </div>
            </div>
        </div>
        <!--/row-->
     </div>
     <br>
     <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit"
            class="btn green">{{  __('admin_.slider_add') }}</button>
           </div>
        
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                @if (session('success'))
                <div class="alert alert-success">
                  <h4 style="color: white"> <span class="help-block">{{ __('admin_.slider_add_message') }} </span>
                  </h4>
                </div>
            @endif
               </div>
            
            </div>
     </div>
    
</form>
</div>

<!-- END CONTENT BODY -->
<!-- END CONTENT -->
@endsection
@push('custom-scripts')
<script src="{{asset('/assets')}}/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<script src="{{asset('/assets')}}/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
<script src="{{asset('/assets')}}/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

@endpush

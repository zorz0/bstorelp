@extends('layouts.admin_master')
@extends('layouts.sidemenu')
@section('content')
<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <form action="{{ route('slider.add') }}" method="POST" enctype="multipart/form-data">
    @csrf   
    <div class="row">
        @foreach ($SliderImage as $index => $image)
        <div class="col-md-4">
             <div class="card">
                 <img src="{{ asset('storage/slider_images/'.$image->image) }}" class="card-img-top" style=" width: 200px; height: 200px;">
                 <div class="card-body" style="    margin-right: 15%;">
                    <a href="{{ route('slider.deleteImage', ['id' => $image]) }}" class="btn btn-danger">
                        {{ __('admin_.slider_delete') }}
                     </a>
                 </div>
             </div>
         </div>
         @if (($index + 1) % 3 === 0 && $index !== count($SliderImage) - 1)
             </div>
             <br><div class="row">
         @endif
        @endforeach
     </div>
     
     
     <br>
     <div class="row">
       
        
        </div>
        <br>
      
    
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

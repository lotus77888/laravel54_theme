@extends('layouts.default')
@section('title')
    Dropzone
@stop
@section('links')
    <link href="{{ asset('vendors/dropzone/css/dropzone.min.css') }}" rel="stylesheet">
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-12">
               <form action="/file-upload" class="dropzone" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                   <div class="fallback">
                       <input name="file" type="file" multiple/>
                   </div>
               </form>
           </div>
        </div>
    </div>
@stop
@section('scripts')
    <script src="{{ asset('vendors/dropzone/js/dropzone.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
    </script>
@stop
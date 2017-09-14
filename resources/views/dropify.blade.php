@extends('layouts.default')
@section('title')
    Dropify
@stop
@section('links')
    <link href="{{ asset('vendors/dropify/css/dropify.css') }}" rel="stylesheet">
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <input type="file" class="dropify" data-height="500" data-default-file="url_of_your_file" />
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <input type="file" class="dropify" data-height="500" data-max-file-size-preview="3M"/>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <input type="file" data-height="500" class="dropify"  data-default-file="{{ asset('assets/img/sidebar-1.jpg')}}" />
            </div>
        </div>

    </div>
@stop
@section('scripts')
    <script src="{{ asset('vendors/dropify/js/dropify.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $('.dropify').dropify();
    </script>
@stop

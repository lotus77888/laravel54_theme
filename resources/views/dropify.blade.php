@extends('layouts.default')
@section('title')
    Dropify
@stop
@section('links')
    <link href="{{ asset('vendors/dropify/css/dropify.css') }}" rel="stylesheet">
@stop
@section('content')
    <div class="container-fluid">
        <input type="file" class="dropify" data-default-file="url_of_your_file" />
        <input type="file" class="dropify" data-height="300" />
        <input type="file" class="dropify" data-allowed-formats="portrait square" />


    </div>
@stop
@section('scripts')
    <script src="{{ asset('vendors/dropify/js/dropify.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $('.dropify').dropify();

    </script>
@stop

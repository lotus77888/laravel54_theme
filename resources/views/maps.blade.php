@extends('layouts.default')
@section('title')
Maps
@stop
@section('content')

        <div id="map"></div>
@stop
@section('scripts')

    <!--  Google Maps Plugin    -->
    <script>
        $(document).ready(function(){
            demo.initGoogleMaps();
        });
    </script>

@stop
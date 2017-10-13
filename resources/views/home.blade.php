@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div id="map" style="height:500px;width:400px;margin:0">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <script>
     function initMap() {
       // Create a map object and specify the DOM element for display.
       var map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: -34.397, lng: 150.644},
         zoom: 8
       });
     }

   </script>
@endsection

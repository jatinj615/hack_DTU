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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
   <script type="text/javascript">
  function initMap() {
    if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(success, fail);

    function success(position){
      console.log(position);
      var latval = position.coords.latitude;
      var lngval = position.coords.longitude;
      getMap(latval,lngval);

    }

    function getMap(latval,lngval){
       console.log("hello");
       console.log(latval);
       console.log(lngval);
        var mark = {lat: latval, lng: lngval};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: mark,
          zoom: 12
        });
        var marker = new google.maps.Marker({
             position: mark,
             map: map
           });
      }
    function fail(){
      alert("fails");
    }
    }else{
      alert("Browser Not Supported");
    }
  }
   </script>
@endsection

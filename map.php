<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>San Marino Heritage | Map</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">

    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <?php
        include('navbar.php');
    ?>
    <div id="map"></div>
    <script>
function initMap() {
    var initLatLng = {lat: 34.121763, lng: -118.106491};

    //From Word Document sent by email
    var loc1 = {lat: 34.122183, lng: -118.117502}; //1220 Patton Way
    var loc2 = {lat: 34.120409, lng: -118.120144}; //1485 Virginia Road
    var loc3 = {lat: 34.118865, lng: -118.123746}; //1280 St. Albans
    var loc4 = {lat: 34.129009, lng: -118.128287}; //1040 Oak Grove
    //var loc5 = {lat: 34.114220, lng: -118.111789}; //1862 Lorain Road
    var loc6 = {lat: 34.121549, lng: -118.105955}; //2200 Huntington Drive
    var loc7 = {lat: 34.128762, lng: -118.114374}; //1151 Oxford Road
    var loc8 = {lat: 34.125259, lng: -118.127262}; //1155 Oak Grove
    var loc9 = {lat: 34.110043, lng: -118.132515}; //1415 Pasqualito
    var loc10 = {lat: 34.109630, lng: -118.133956}; //1404 Wilson Avenue
    var loc11 = {lat: 34.111441, lng: -118.129119}; //1560 Pasqualito
    var loc12 = {lat: 34.115126, lng: -118.132250}; //2800 Monterey Road
    var loc13 = {lat: 34.115983, lng: -118.140025}; //2410 Mission st.
    var loc14 = {lat: 34.113718, lng: -118.139037}; //1920 Marino Terrace

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: initLatLng
    });

    var marker1 = new google.maps.Marker({
        position: loc1,
        map: map,
        title: 'Placeholder Text'
    });

    var marker2 = new google.maps.Marker({
        position: loc2,
        map: map,
        title: 'Placeholder Text'
    });

    var marker3 = new google.maps.Marker({
        position: loc3,
        map: map,
        title: 'Placeholder Text'
    });

    var marker4 = new google.maps.Marker({
        position: loc4,
        map: map,
        title: 'Placeholder Text'
    });

    //var marker5 = new google.maps.Marker({
    //    position: loc5,
    //    map: map,
    //    title: 'Placeholder Text'
    //});

    var marker6 = new google.maps.Marker({
        position: loc6,
        map: map,
        title: 'Placeholder Text'
    });

    var marker7 = new google.maps.Marker({
        position: loc7,
        map: map,
        title: 'Placeholder Text'
    });

    var marker8 = new google.maps.Marker({
        position: loc8,
        map: map,
        title: 'Placeholder Text'
    });

    var marker9 = new google.maps.Marker({
        position: loc9,
        map: map,
        title: 'Placeholder Text'
    });

    var marker10 = new google.maps.Marker({
        position: loc10,
        map: map,
        title: 'Placeholder Text'
    });

    var marker11 = new google.maps.Marker({
        position: loc11,
        map: map,
        title: 'Placeholder Text'
    });

    var marker12 = new google.maps.Marker({
        position: loc12,
        map: map,
        title: 'Placeholder Text'
    });

    var marker13 = new google.maps.Marker({
        position: loc13,
        map: map,
        title: 'Placeholder Text'
    });

    var marker14 = new google.maps.Marker({
        position: loc14,
        map: map,
        title: 'Placeholder Text'
    });

}

    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjMFUANKovCTFi14zRexfHODidHJOCSiE
&signed_in=true&callback=initMap"></script>
  </body>
</html>

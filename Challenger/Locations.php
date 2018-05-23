<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
        <title>Challenger</title>
  </head>
  <body>
    <?php
    include('php/navbar.php');
    ?>
    <section id="page-content">
        <div class="container">
          <div class="row">
            <div class="col-sm text">
              <h1>Locations Map</h1>
              <p>Our locations are as follows:</p>
              <ul align="left">
                <li>UQ Rugby Club</li>
                <li>Kenmore Bears Rugby Club</li>
                <li>Toowong Wests Bulldogs</li>
                <li>Musgrave Park Southbank</li>
                <li>Gilbert Park Ashgrove</li>
              </ul>
              <p>Please see the markers on the map below for locations</p>
            </div>
          </div>
        </div>
      <div id="map"></div>
    </section>
    <script>
      function initMap() {

        var UQ = {lat: -27.493332, lng: 153.012228};
        var Kenmore = {lat: -27.514399, lng: 152.952583};
        var Toowong = {lat: -27.480967, lng: 152.992819}
        var Musgrave = {lat: -27.478277, lng: 153.017129}
        var Gilbert = {lat:-27.447585, lng: 152.996516 }

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: Toowong
        });

        var contentString1 = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">UQ</h1>'+
          '<div id="bodyContent">'+
          '<p>Sir William MacGregor Dr, St Lucia QLD 4067</p>'+
          '</div>'+
          '</div>';

        var contentString2 = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">Kenmore</h1>'+
          '<div id="bodyContent">'+
          '<p>67 Hepworth St, Kenmore QLD 4069</p>'+
          '</div>'+
          '</div>';

        var contentString3 = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">Toowong</h1>'+
          '<div id="bodyContent">'+
          '<p>Memorial Park, 65 Sylvan Rd, Toowong QLD 4066</p>'+
          '</div>'+
          '</div>';

        var contentString4 = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">Musgrave</h1>'+
          '<div id="bodyContent">'+
          '<p>121 Cordelia St, South Brisbane QLD 4101</p>'+
          '</div>'+
          '</div>';

        var contentString5 = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">Gilbert</h1>'+
          '<div id="bodyContent">'+
          '<p>Fulcher Rd, Red Hill QLD 4059</p>'+
          '</div>'+
          '</div>';

        var infowindow1 = new google.maps.InfoWindow({
            content: contentString1
        });

        var infowindow2 = new google.maps.InfoWindow({
            content: contentString2
        });

        var infowindow3 = new google.maps.InfoWindow({
            content: contentString3
        });

        var infowindow4 = new google.maps.InfoWindow({
            content: contentString4
        });

        var infowindow5 = new google.maps.InfoWindow({
            content: contentString5
        });

        var marker1 = new google.maps.Marker({
          position: UQ,
          map: map,
          optimized: false,
          draggable: true,
          animation: google.maps.Animation.DROP
        });
        marker1.addListener('click', function() {
          infowindow1.open(map, marker1);
        });

        var marker2 = new google.maps.Marker({
          position: Kenmore,
          map: map,
          optimized: false,
          draggable: true,
          animation: google.maps.Animation.DROP
        });
        marker2.addListener('click', function() {
          infowindow2.open(map, marker2);
        });

        var marker3 = new google.maps.Marker({
          position: Toowong,
          map: map,
          optimized: false,
          draggable: true,
          animation: google.maps.Animation.DROP
        });
        marker3.addListener('click', function() {
          infowindow3.open(map, marker3);
        });

        var marker4 = new google.maps.Marker({
          position: Musgrave,
          map: map,
          optimized: false,
          draggable: true,
          animation: google.maps.Animation.DROP
        });
        marker4.addListener('click', function() {
          infowindow4.open(map, marker4);
        });

        var marker5 = new google.maps.Marker({
          position: Gilbert,
          map: map,
          optimized: false,
          draggable: true,
          animation: google.maps.Animation.DROP
        });
        marker5.addListener('click', function() {
          infowindow5.open(map, marker5);
        });

    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-nL77CYJngpScZPTmU-wgpUwG1FGbSqY&callback=initMap"
    async defer></script>
    <?php
      include('footer.php');
    ?>
  </body>
</html>
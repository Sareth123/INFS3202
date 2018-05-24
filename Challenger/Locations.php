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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAji3B4PgpcRNaqTq-ssbUgeW7PBZh4_r4&callback=initMap"
        async defer></script>
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
              <p>Our locations are as follows (click on the address to open location in google maps):</p>
              <ul align="left">
                <li>UQ Rugby Club (<a href="https://www.google.com/maps/search/?api=1&query=-27.493332, 153.012228">Sir William MacGregor Dr, St Lucia QLD 4067</a>)</li>
                <li>Kenmore Bears Rugby Club (<a href="https://www.google.com/maps/search/?api=1&query=-27.514399, 152.9525831">67 Hepworth St, Kenmore QLD 4069</a>)</li>
                <li>Toowong Wests Bulldogs (<a href="https://www.google.com/maps/search/?api=1&query=-27.480967, 152.992819">Memorial Park, 65 Sylvan Rd, Toowong QLD 4066</a>)</li>
                <li>Musgrave Park Southbank (<a href="https://www.google.com/maps/search/?api=1&query=-27.478277, 153.017129">121 Cordelia St, South Brisbane QLD 4101</a>)</li>
                <li>Gilbert Park Ashgrove (<a href="https://www.google.com/maps/search/?api=1&query=-27.447585, 152.996516">Fulcher Rd, Red Hill QLD 4059</a>)</li>
              </ul>
              <p>Please see the markers on the map below for locations and use the dropdown to zoom in on a location</p>
            </div>
          </div>
          <div class="col-md-12 col-sm-12">
            <select id="selectlocation">
              <option value="-27.493332|153.012228|12">Original Map</option>
            </select>
          </div>
        </div>
      <div id="map"></div>
    </section>

    <script>
      var map;

      var markerData= [
        {lat: -27.493332, lng: 153.012228  , zoom: 15 , name: "UQ"},
        {lat: -27.514399, lng: 152.9525831  , zoom: 15 , name: "Kenmore"},
        {lat: -27.480967, lng: 152.992819  , zoom: 15, name: "Toowong"},
        {lat: -27.478277, lng: 153.017129  , zoom: 15, name: "Musgrave"},
        {lat: -27.447585, lng: 152.996516  , zoom: 15, name: "Gilbert"},
      ];
       
      function initialize() {
          map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {lat: -27.493332, lng: 153.012228}
          });
          markerData.forEach(function(data) {
            var newmarker= new google.maps.Marker({
              map:map,
              position:{lat:data.lat, lng:data.lng},
              title: data.name
            });
            jQuery("#selectlocation").append('<option value="'+[data.lat, data.lng,data.zoom].join('|')+'">'+data.name+'</option>');
          });

      }

      google.maps.event.addDomListener(window, 'load', initialize);

      jQuery(document).on('change','#selectlocation',function() {
        var latlngzoom = jQuery(this).val().split('|');
        var newzoom = 1*latlngzoom[2],
        newlat = 1*latlngzoom[0],
        newlng = 1*latlngzoom[1];
        map.setZoom(newzoom);
        map.setCenter({lat:newlat, lng:newlng});
      });
    </script>

    <?php
      include('footer.php');
    ?>

  </body>
</html>
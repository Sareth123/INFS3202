<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Challenger</title>
  </head>
  <body>
    <?php
    include('navbar.php');
    ?>
    <section id="page-content">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <h1>Locations Map</h1>
              <p>Our locations are as follows:</p>
              <ul>
                <li>UQ St Lucia Oval 2 (next to UQ tennis courts)</li>
                <li>Toowong Wests Bulldogs (123 Sylvan Road Toowong)</li>
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

        var UQ = {lat: -27.494689, lng: 153.015781};
        var Toowong = {lat: -27.480779, lng: 152.992348};
        var Ironside = {lat: -27.500302, lng: 152.996156}
        var Robertson = {lat: -27.503003, lng: 152.990026}
        var Indooroopilly = {lat:-27.499802, lng: 152.984552 }

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: UQ
        });

        var contentString = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
          '<div id="bodyContent">'+
          '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
          'sandstone rock formation in the southern part of the '+
          'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
          'south west of the nearest large town, Alice Springs; 450&#160;km '+
          '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
          'features of the Uluru - Kata Tjuta National Park. Uluru is '+
          'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
          'Aboriginal people of the area. It has many springs, waterholes, '+
          'rock caves and ancient paintings. Uluru is listed as a World '+
          'Heritage Site.</p>'+
          '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
          'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
          '(last visited June 22, 2009).</p>'+
          '</div>'+
          '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var football = {
            url: '/images/soccer.png',
            scaledSize: new google.maps.Size(50, 50)
        }
        var basketball = {
            url: '/images/basketball.png',
            scaledSize: new google.maps.Size(50, 50)
        }
        var tennis = {
            url: '/images/tennis.png',
            scaledSize: new google.maps.Size(50, 50)

        }
        var marker1 = new google.maps.Marker({
          position: UQ,
          map: map, optimized: false
        });
        var marker2 = new google.maps.Marker({
          position: Toowong,
          map: map
        });
        var marker3 = new google.maps.Marker({
          position: Ironside,
          map: map
        });
        var marker4 = new google.maps.Marker({
          position: Robertson,
          map: map
        });
        marker4.addListener('click', function() {
          infowindow.open(map, marker4);
        });
        var marker5 = new google.maps.Marker({
          position: Indooroopilly,
          map: map
        });
        marker5.addListener('click', function() {
          infowindow.open(map, marker5);
        });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-nL77CYJngpScZPTmU-wgpUwG1FGbSqY&callback=initMap"
    async defer></script>
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
            <div class="col l4 s12">
                <h5>Contact Us</h5>
                <ul>
                <li><span>Brisbane, Australia</span></li>
                <li><span>info@challenger.com</span></li>
                <li><span>+61 412 345 678</span></li>
                </ul>
            </div>

            <div class="col l4 s12">
                <h5>Social Media</h5>
                <ul class="d-inline-flex">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
        <div>
            <div class="container">
            © Copyright Challenger 2018
            <a class="black-text right" href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>
  </body>
</html>
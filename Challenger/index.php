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
    </head>

    <body>
    	<?php
      include('php/navbar.php');
      ?>

      <section id="page-content">

        <div class="container">
          <div class="row">
            <div class="col-sm text">
              <h1 align='center'>Challenger!</h1>

      		    </br>
              <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images\TRL_1.jpg" alt="Touch Rugby League">
                  </div>
                  <div class="carousel-item">
                    <img src="images\TRL_2.jpg" alt="Touch Rugby League">
                  </div>
                  <div class="carousel-item">
                    <img src="images\TRL_3.jpg" alt="Touch Rugby League">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

              </div>
              <p>Challenger is an new application allows you and your friend to create a social sports team and challenge your friends and other people! When you sign up you will be able to join whichever ladder you want to compete in and then invite your friends to be a part of your team.</p>
              <p> So join and make your team! We have multiple locations to compete at, you can see this on our locations page</p>
              <p>We play with the rules created by TRL Australia, please see our rules page for more information on the rules</p>
              <p>Currently we only have a mixed ladder and a mens ladder, a womens ladder will be coming soon!</p>
              <p>Would you like to make a one time donation of $10 via PayPal? Donations help to keep the website up and running and allows us to pay our refs for the fantastic job they do!</p>
              <button type="button" class="btn btn-primary" align="center" onclick='donate()';">Donation</button>
            </div>
          </div>
        </div>
      </section>
      <?php
      include('footer.php');
      ?>
    </body>
    <br/>
    
       
</html> 
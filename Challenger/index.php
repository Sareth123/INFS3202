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

    <footer class="bg-dark text-light">

      <section id="page-content">

        <div class="container">
          <div class="row">
            <div class="col-sm text">
              <h1 align='center'>Challenger!</h1>

      		    </br> <p>Challenger is an new application allow you and your team manage and challenge your social sports team. You will be able choose which teams you would like to verse! So join and make your team! We have multiple locations to compete at.</p>
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
                    <img src="assets\TRL_1.jpg" alt="Touch Rugby League">
                  </div>
                  <div class="carousel-item">
                    <img src="assets\TRL_2.jpg" alt="Touch Rugby League">
                  </div>
                  <div class="carousel-item">
                    <img src="assets\TRL_3.jpg" alt="Touch Rugby League">
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
            </div>
          </div>
        </div>
      </section>
      <?php
Print password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
      include('footer.php');
      ?>
    </body>
    <br/>
    
       
</html> 
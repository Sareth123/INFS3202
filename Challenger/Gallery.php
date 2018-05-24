<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">

        <link href="css/lightbox.css" rel="stylesheet">
        <script src="js/lightbox.js"></script>
    </head>

    <body>
    	<?php
      include('php/navbar.php');
      ?>

      <section id="page-content">

        <div class="container">
          <div class="row">
            <div class="col-sm text">
             <h2>Photo Gallery</h2>

               <section>

                <hr />

                <div>
                  <a href="images/TRL_1.jpg" data-lightbox="image-1" data-title="Photo 1"><img src="images/TRL_1_tn.jpg" alt=""/></a>
                  <a href="images/TRL_2.jpg" data-lightbox="image-1" data-title="Photo 2"><img src="images/TRL_2_tn.jpg" alt="" /></a>
                  <a href="images/TRL_3.jpg" data-lightbox="image-1" data-title="Photo 3"><img src="images/TRL_3_tn.jpg" alt="" /></a>
                  <a href="images/TRL_4.jpg" data-lightbox="image-1" data-title="Photo 4"><img src="images/TRL_4_tn.jpg" alt="" /></a>
                  <a href="images/TRL_5.jpg" data-lightbox="image-1" data-title="Photo 5"><img src="images/TRL_5_tn.jpg" alt="" /></a>
                  <a href="images/TRL_6.jpg" data-lightbox="image-1" data-title="Photo 6"><img src="images/TRL_6_tn.jpg" alt="" /></a>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
      <?php
      include('footer.php');
      ?>
    
    </body>
</html> 
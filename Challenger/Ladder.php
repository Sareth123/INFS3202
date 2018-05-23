<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
        <link href='../../fullcalendar-3.9.0/fullcalendar.min.css' rel='stylesheet' />

        <title>Challenger</title>
    </head>

    <body>
      <?php
        include('php/navbar.php');
      ?>
      <script>
      $( function() {
        $( "#tabs" ).tabs();
      } );
      </script>
      <div id="tabs">
        <ul>
          <li><a href="#tabs-1">Ladder</a></li>
          <li><a href="#tabs-2">Stats</a></li>
          <?php
        if(isset($_SESSION['user'])){//checks if user is logged in
        ?>
          <li><a href="#tabs-3">Challenge</a></li>
          <li><a href="#tabs-4">Calendar</a></li>
          <?php }
      ?>  
        
        </ul>
        <div id="tabs-1">
          <?php include "ladder_tab1.php" ?>
        </div>
        <div id="tabs-2">
          <?php include "stats.php"; ?>
        </div>
        <?php
        if(isset($_SESSION['user'])){//checks if user is logged in
        ?><div id="tabs-3">
          <?php include("ladder_tab3.php");
          ?>
        </div>
      <?php }
      ?>  
      
       <?php
        if(isset($_SESSION['user'])){//checks if user is logged in
        ?><div id="tabs-4">
          <?php include('calendar.php');?>
        </div>
      <?php }
      ?> 
      </div>
      <?php
        include('footer.php');
      ?>
  </body>
</html>
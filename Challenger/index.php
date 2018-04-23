<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Challenger</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
		    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
		        <ul class="navbar-nav mr-auto">
		            <li class="nav-item">
		                <a class="nav-link" href="/INFS3202/Challenger/Ladder.php">Ladder</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="/INFS3202/Challenger/Rules.php">Rules</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="/INFS3202/Challenger/AboutUs.php">About Us</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="/INFS3202/Challenger/ContactUs.php">Contact Us</a>
		            </li>
		        </ul>
		    </div>
		    <div class="mx-auto order-0">
		        <a class="navbar-brand mx-auto" href="#">Challenger</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		    </div>
		    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
		        <ul class="navbar-nav ml-auto">
		            <li class="nav-item">
		                <a class="nav-link" href="/INFS3202/Challenger/Profile.php">Profile</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="/INFS3202/Challenger/Team.php">Team</a>
		            </li>
		        </ul>
		    </div>
		</nav>
        <?php
            echo "<h1 align='center'>Challenger!</h1>";
        ?>
        <div align="center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#content" id="login">Login</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#content" id="register">Register</button>
        </div>
        <?php
        echo "</br> <p>Challenger is an new application allow you and your team manage and challenge your social sports team. You will be able choose which teams you would like to verse! So join and make your team! We have multiple locations to compete at.</p>"
        ?>
    </body>
    <br/>
       <div class="modal fade" id="content" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="header"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="body">
        
      </div>
    </div>
  </div>
</div>
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
  
  $(document).ready( function() {
    $("#login").on("click", function() {
        $("#header").append("Login");
        $("#body").load("/Challenger/login.php");
    });
    $("#register").on("click", function() {
        $("#header").append("Register");
        $("#body").load("/Challenger/register.php");
    });
});

</script>
       
</html> 
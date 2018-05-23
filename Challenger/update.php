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
	include('php/navbar.php');
  ?>
  <section id="page-content">
        <div class="container">
          <div class="row">
            <div class="col-sm text" id="update-style">
            <h2>Update Details</h2>
  <?php
    include('php/connect.php');
        $db = new MySQLDatabase();
        $db->connect("challenger");
        if($_SESSION['user']){//checks if user is logged in
	}
	else{
		header("location:index.php"); //redirects if user is not logged in
	}
	$user = $_SESSION['user'];
   	$details=mysqli_query($db->link,"SELECT * FROM users WHERE username ='$user'");
   	$drow=mysqli_fetch_assoc($details);
   	Print $drow['firstname']." ".$drow['lastname']." these are your current details:";
   	echo '<br>';
   	Print "Team: ";
   	echo '<br>';
   	Print "Username: ". $drow['username'];
   	echo '<br>';
   	Print "Email: ". $drow['email'];
   	echo '<br>';
   	Print "Postcode: ".$drow['postcode'];
   	?>

    <br/><br/>
   	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#content" id="Update">Update</button>
   	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#content" id="Delete">Delete</button>

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
    </div>
    </div>
    </div>
    </section>
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
  
  $(document).ready( function() {
    $("#Update").on("click", function() {
        $("#header").append("Login");
        $("#body").load("updatedata.php");
    });
    $("#Delete").on("click", function() {
        $("#header").append("Delete");
        $("#body").load("Delete.php");
    });
});

</script>

    <?php
    include('footer.php');
    ?>

  </body>
</html>
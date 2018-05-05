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
	///ADD CHECK
	if($_SESSION['user']){//checks if user is logged in
	}
	else{
		header("location:index.php"); //redirects if user is not logged in
	}
	$user = $_SESSION['user'];
	include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	$team_name=$_GET['name'];
	require_once 'C:/Users/Grant/Desktop/google-api-php-client/vendor/autoload.php';

	?>
	<script>
	$(document).ready(function(){
   $.ajax({
        url:'php_File_with_php_code.php',
        type:'GET', 
        data:"parameter=some_parameter",
       success:function(data)
       {
              $("#thisdiv").html(data);
           }
    });
});
</script>
<div id="thisdiv"></div>


	<h2>Challenge</h2>
	<h3>Previous Matches</h3>
	<p>Wins, Losses</p>
	<p>Points, Against, Difference</p>
	<table>

	</table>
	</body>
</html>
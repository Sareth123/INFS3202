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
        include('php/connect.php');
        $db = new MySQLDatabase();
        $db->connect("challenger");

	if($_SESSION['user']){//checks if user is logged in
	}
	else{
		header("location:index.php"); //redirects if user is not logged in
	}
	$user = $_SESSION['user'];
	$other_team=$_GET['name'];
	$_SESSION['other']=$other_team;
	include('php/queries.php');
	?>

	<h2>Challenge</h2>
	<?php
		while ($row=mysqli_fetch_array($last_match)){	
			Print '<h3>'."Last Match"."</h3>";
			if($row['result']>0){
					$a="won";
				} else if ($row['result']<0){
					$a="lost";
				}
					else { $a="tied";
				} ;
		 	Printf("Last match against: ".'%s'." on the ".'%s'." and ".'%s',$row['name'],$row['d'],$a);
		 	echo '</br>';
		};
	
		while ($row1=mysqli_fetch_array($other_stats)){
			Printf("Total Wins: ".'%s'." Total Losses: ".'%s',$row1['wins'],$row1['losses']);
		}
	?>
	<p>Points, Against, Difference</p>
	<form action="php/checkchallenge.php" method="POST">
	    Enter Date: <input type="date" name="date" required="required" /> <br/><br/>
	    Enter Time: <input type="time" name="time" required="required" /> <br/><br/>
	    
	    <select name="location">
			<?php
				while ($row=mysqli_fetch_array($locations)){
					printf("<option value='%s'>".'%s'."</option>",$row['loc_id'],$row['loc_name']);
				}
			?>
		</select>
		<input type="submit" class="btn btn-primary" value="submit"/>
     </form>

     <p>Upcoming Games<p>
     	<?php
     	include('quickstart.php');
     	?>
 
   	
   
  <br><br>
	</body>
</html>
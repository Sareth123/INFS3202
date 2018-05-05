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
	session_start();//starts the session
	if($_SESSION['user']){//checks if user is logged in
	}
	else{
		header("location:index.php"); //redirects if user is not logged in
	}
	$user = $_SESSION['user'];
	?>
	<h2>Matches</h2>
	<h2>Past Matches</h2>
	<table border="1px" width="100%">
		<tr>
			<th>Teams</th>
			<th>Location</th>
			<th>Date</th>
			<th>Score</th>
			<th></th>
		</tr>
		<?php
	include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	$query = mysqli_query($db->link,"SELECT t1.name, t2.name AS t, l.loc_name, c.date, c.t1_score, c.t2_score FROM challenges AS c, teams AS t1, teams AS t2, locations AS l WHERE team1_id=t1.team_id AND team2_id=t2.team_id AND c.loc_id=l.loc_id AND c.date<CURDATE()");
	while($row=mysqli_fetch_array($query))
	{
	Print "<tr>";
		Print "<td>".$row['name'].'vs'.$row['t']."</td>";
		Print "<td>".$row['loc_name']."</td>";
		Print "<td>".$row['date']."</td>";
		Print "<td>".$row['t1_score'].'-'.$row['t2_score']."</td>";
		Print "<td button type='button' class='btn btn-primary
		'>"."Update"."</td>";
	Print "</tr>";
	}

	?>
	</table>

	<h2>Upcoming</h2>
	<table border="1px" width="100%">
		<tr>
			<th>Teams</th>
			<th>Location</th>
			<th>Date & Time</th>
		</tr>
		<?php
	$query2 = mysqli_query($db->link,"SELECT t1.name, t2.name AS t, l.loc_name, c.date,c.time FROM challenges AS c, teams AS t1, teams AS t2, locations AS l WHERE team1_id=t1.team_id AND team2_id=t2.team_id AND c.loc_id=l.loc_id AND c.date>=CURDATE()");
	while($row1=mysqli_fetch_array($query2)){
	Print "<tr>";
		Print "<td>".$row1['name'].'vs'.$row1['t']."</td>";
		Print "<td>".$row1['loc_name']."</td>";
		Print "<td>".$row1['date'].'@'.$row1['time']."</td>";
	Print "</tr>";
}
?>
	
	</body>
</html>
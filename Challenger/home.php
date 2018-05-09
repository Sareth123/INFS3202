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
	?>
	<h2>Team Page</h2>
	<div id="stats">

	<?php
	include('php/connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");

	$query=mysqli_query($db->link,"SELECT wins, losses FROM teams AS t, team_members AS tm, users AS u WHERE u.username=('$user') AND u.user_id=tm.user_id AND tm.team_id=t.team_id");
	while ($row=mysqli_fetch_array($query))
		{
			Print '<p>Wins: '.$row['wins'].' Losses: '.$row['losses']."</p>";
		}
		?>
	</div>

	<table border="1px" width="100%">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>PostCode</th>
		<tr>
	<?php
		$query1 =mysqli_query($db->link,"SELECT firstname, lastname, email, postcode FROM users AS used, (SELECT user_id FROM team_members AS ts, (SELECT t.team_id FROM team_members AS t,(SELECT user_id FROM users WHERE username = ('$user')) AS u WHERE t.user_id=u.user_id) AS td WHERE ts.team_id =td.team_id) AS other WHERE used.user_id=other.user_id ");
	while($row1=mysqli_fetch_array($query1))
	{
		Print "<tr>";
						Print '<td align="center">'. $row1['firstname'] ."</td>";
						Print '<td align="center">'. $row1['lastname'] ."</td>";
						Print '<td align="center">'. $row1['email'] ."</td>";
						Print '<td align="center">'. $row1['postcode']."</td";
						Print "</tr>";

	}
	?>
	</table>
	<h2>Next Match</h2>
	<table border="1px" width "100%">
		<tr>
			<th>Versing</th>
			<th>Location</th>
			<th>Date</th>
			<th>Time</th>
			<th>Stats</th>
		</tr>

	<?php
	$query2= mysqli_query($db->link,"SELECT t.name,l.loc_name, c.date, c.time, t.wins, t.losses
FROM teams AS t, team_members AS tm, users AS u, locations AS l, challenges AS c
WHERE u.username=('$user') AND u.user_id = tm.user_id AND c.loc_id=l.loc_id AND c.date>=CURDATE() AND
IF(tm.team_id= c.team2_id,  c.team1_id =t.team_id,c.team2_id=t.team_id)");
	while ($row2=mysqli_fetch_array($query2))
	{
		Print "<tr>";
						Print '<td align="center">'. $row2['name'] ."</td>";
						Print '<td align="center">'. $row2['loc_name'] ."</td>";
						Print '<td align="center">'. $row2['date'] ."</td>";
						Print '<td align="center">'. $row2['time'] ."</td>";
						Print '<td align="center">'. "Wins: ".$row2['wins'] ." Losses: ".$row2['losses']."</td>";
						Print "</tr>";

	}
	?>
	</table>
	<h2>Previous Matches</h2>
	<table border="1px" width "100%">
		<tr>
			<th>Versing</th>
			<th>Location</th>
			<th>Date</th>
			<th>Outcome</th>
		</tr>
	<?php
		$query3= mysqli_query($db->link,"SELECT t.name,l.loc_name, c.date, 
				CASE
					WHEN c.team1_id!=t.team_id THEN c.t1_score-c.t2_score
   					WHEN c.team1_id=t.team_id THEN c.t2_score-c.t1_score
    			END AS result
		FROM teams AS t, team_members AS tm, users AS u, locations AS l, challenges AS c
		WHERE u.username=('$user') AND u.user_id = tm.user_id AND c.loc_id=l.loc_id AND c.date<CURDATE() AND
		IF(tm.team_id= c.team2_id,  c.team1_id =t.team_id ,c.team2_id=t.team_id)");
		while ($row3=mysqli_fetch_array($query3))
	{	
		Print "<tr>";
						Print '<td align="center">'. $row3['name'] ."</td>";
						Print '<td align="center">'. $row3['loc_name'] ."</td>";
						Print '<td align="center">'. $row3['date'] ."</td>";
						if($row3['result']>0){

						Print '<td align="center">'. "WON" ."</td>";
					} else if ($row3['result']<0){
						Print '<td align="center">'. "LOST" ."</td>";
					}
					else { Print '<td align="center">'. "TIE" ."</td>";
					} 
						Print "</tr>";

	}
	?>
	</table>
	</body>
</html>
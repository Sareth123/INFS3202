<?php
	include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	session_start();

	$user = $_SESSION['user'];
   	$other=$_SESSION['other'];

	$date = date("Y-m-d",strtotime($_POST['date']));
    $time = date("H:i:s",strtotime($_POST['time']));
    $location = $_POST['location'];
	
   	

	$query = mysqli_query($db->link,"SELECT t.team_id FROM team_members AS t, users AS u WHERE t.user_id=u.user_id AND u.username=('$user')");
	$query1 = mysqli_query($db->link,"SELECT team_id FROM teams WHERE name=('$other')");

	$row=mysqli_fetch_assoc($query);
	$row1=mysqli_fetch_assoc($query1);

	$u_team_id=$row['team_id'];
	$o_team_id=$row1['team_id'];

	mysqli_query($db->link,"INSERT INTO challenges (team1_id, team2_id, loc_id, date, time,t1_score,t2_score) VALUES ('$o_team_id','$u_team_id','$location','$date','$time','0','0')");
	header('location:ladder.php');
	
?>
<?php
session_start();
include('connect.php');
        $db = new MySQLDatabase();
        $db->connect("challenger");
        if($_SESSION['user']){//checks if user is logged in
	}
	else{
		header("location:index.php"); //redirects if user is not logged in
	}
	$user = $_SESSION['user'];

	$team = mysqli_query($db->link,"SELECT team_id, COUNT(team_id) from team_members WHERE team_id IN (SELECT team_id FROM team_members AS t, users AS u WHERE u.username='$user'AND u.user_id=t.user_id) ");
	$row =mysqli_fetch_assoc($team);
	if($row['COUNT(team_id)']>1){
		
		mysqli_query($db->link,"DELETE FROM users WHERE username='$user'");
		session_destroy();
		header('location:../index.php');
	}else{
		$id=$row['team_id'];
		mysqli_query($db->link,"DELETE FROM teams WHERE team_id='$id'");
	mysqli_query($db->link,"DELETE FROM users WHERE username='$user'");
	session_destroy();
	header('location:../index.php');
}
?>
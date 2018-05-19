<?php
	include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	session_start();

	$user = $_SESSION['user'];
   	$other=$_SESSION['other'];

	$date = date("Y-m-d",strtotime($_POST['date']));
	$adate= date('Y/m/d',strtotime("+7day",strtotime($date)));
	$bdate = date('Y/m/d',strtotime("-7day",strtotime($date)));
    $time = date("H:i:s",strtotime($_POST['time']));
    $etime= date("H:i:s",strtotime("+1hour",strtotime($time)));
    $g_sdt = $date."T".$time;
    $g_edt = $date."T".$etime;
    $location = $_POST['location'];
	
   	

	$query = mysqli_query($db->link,"SELECT tm.team_id, t.name FROM team_members AS tm, users AS u, teams AS t WHERE tm.user_id=u.user_id AND u.username=('$user') AND t.team_id=tm.team_id");
	$query1 = mysqli_query($db->link,"SELECT team_id, name FROM teams WHERE name=('$other')");

	$row=mysqli_fetch_assoc($query);
	$row1=mysqli_fetch_assoc($query1);

	$u_team_id=$row['team_id'];
	$u_name=$row['name'];
	$o_team_id=$row1['team_id'];
	$o_name=$other;
		$bool= true;
		
	
	$query2 = mysqli_query($db->link,"SELECT team1_id, team2_id,date,time FROM challenges, teams WHERE (team1_id = '$o_team_id' OR team2_id = '$o_team_id') AND '$bdate'<=date AND date<='$adate'");
		if(mysqli_num_rows($query2)>1){
			$bool=false;
			
			Print '<script>alert("Can not choose this date!");</script>'; // Prompts the user
        		Print '<script>window.location.assign("../ladder.php");</script>'; // redirects to login.php

		}else{
	mysqli_query($db->link,"INSERT INTO challenges (team1_id, team2_id, loc_id, date, time,t1_score,t2_score) VALUES ('$o_team_id','$u_team_id','$location','$date','$time','0','0')");
	$g_summary=$u_name." vs ".$o_name;
	include 'addEvent.php';

	
	header('location:../ladder.php');
}
	
?>
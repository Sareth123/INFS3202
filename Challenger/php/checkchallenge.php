<?php
	include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	session_start();

	$user = $_SESSION['user'];
	$other =$_POST['other_team'];
	$date = date("Y-m-d",strtotime($_POST['date']));
	$adate= date('Y/m/d',strtotime("+7day",strtotime($date)));
	$bdate = date('Y/m/d',strtotime("-7day",strtotime($date)));
    $time = date("H:i:s",strtotime($_POST['time']));
    $etime= date("H:i:s",strtotime("+1hour",strtotime($time)));
    $g_sdt = $date."T".$time;
    $g_edt = $date."T".$etime;
    $location = $_POST['location'];

    $lname = mysqli_query($db->link,
    	"SELECT * 
    	FROM locations 
    	WHERE loc_id='$location'"
    );

    $lrow=mysqli_fetch_assoc($lname);
    $locName=$lrow['loc_name'];
	$gloc=$lrow['address'].", ".$lrow['suburb'].", ".$lrow['state']." ".$lrow['postcode'];


	$u_idName = mysqli_query($db->link,
		"SELECT tm.team_id, t.name 
		FROM team_members AS tm, users AS u, teams AS t
		WHERE tm.user_id=u.user_id AND u.username=('$user') AND t.team_id=tm.team_id"
	);

	$o_id = mysqli_query($db->link,
		"SELECT name
		FROM teams 
		WHERE team_id=('$other')"
	);

	$uRow=mysqli_fetch_assoc($u_idName);
	$oRow=mysqli_fetch_assoc($o_id);

	$u_team_id=$uRow['team_id'];
	$u_name=$uRow['name'];
	$o_team_id=$other;
	$o_name=$oRow['name'];
		$bool= true;
		
	
	$too_soon = mysqli_query($db->link,
		"SELECT date,time 
		FROM challenges, teams
		WHERE (team1_id = '$o_team_id' OR team2_id = '$o_team_id') AND '$bdate'<=date AND date<='$adate'"
	);
	$two_soon = mysqli_query($db->link,
		"SELECT date,time 
		FROM challenges, teams
		WHERE (team1_id = '$u_team_id' OR team2_id = '$u_team_id') AND '$bdate'<=date AND date<='$adate'"
	);
	$booked = mysqli_query($db->link,
		"SELECT date, time
		FROM challenges
		WHERE loc_id='$location' AND date='$date'");



	if(mysqli_num_rows($too_soon)>1){
		$bool=false;
		Print '<script>alert("This date is too close to game date for this team, please choose outside 7 days of their booked matches");</script>'; // Prompts the user
        Print("<script>window.location.assign('../ladder.php');</script>"); // redirects to back to challenge.php
    }else if(mysqli_num_rows($two_soon)>1){
		$bool=false;
		Print '<script>alert("This date is too close to match you have, please choose outside of 7 days of your booked games");</script>'; // Prompts the user
        Print("<script>window.location.assign('../ladder.php');</script>"); // redirects to back to challenge.php
	}else if(mysqli_num_rows($booked)>1){
		$bool=false;
		Print '<script>alert("This field is booked on this date");</script>'; // Prompts the user
       Print("<script>window.location.assign('../ladder.php');</script>"); // redirects to back to challenge.php

	}else{
		mysqli_query($db->link,
			"INSERT INTO challenges (team1_id, team2_id, loc_id, date, time,t1_score,t2_score) 
			VALUES ('$o_team_id','$u_team_id','$location','$date','$time','0','0')"
		);
	$g_summary=$u_name." vs ".$o_name;
	include 'addEvent.php';

	
	header('location:../ladder.php');
}
	
?>
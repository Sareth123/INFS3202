<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD']="POST")//Added an if to keep the page secured
	{
		$con=mysqli_connect("localhost", "root","") ;
		$details = mysqli_real_escape_string($con,$_POST['details']);
		$time = strftime("%X");//time
		$date = strftime("%B %d, %Y");
		$decision = "no";

		mysqli_select_db($con,"first_db");
		foreach($_POST['public']as $each_check)//gets the data fromt he checkbox
		{
			if($each_check!=null){
				$decision="yes";
			}
		}
		mysqli_query($con,"INSERT INTO list(details, date_posted, time_posted, public) VALUES ('$details', '$date','$time','$decision')"); //SQL QUERY
		header("location: home.php");
	}
	else
	{
		header("location:home.php");
	}

?>
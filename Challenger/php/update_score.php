<?php
$c=$_POST['id'];
$f= $_POST['t1'];
$s = $_POST['t2'];
$t1 =$_POST['t1_score'];
$t2 =$_POST['t2_score'];

if($t1>$t2){
	$w1=1;
	$l1=0;
	$w2=0;
	$l2=1;
}else if($t1<$t2){
	$w1=0;
	$l1=1;
	$w2=1;
	$l2=0;
}else{
	$w1=0;
	$w2=0;
	$l2=0;
	$l1=0;
}

include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	mysqli_query($db->link,"
		UPDATE challenges AS c, teams AS t, teams AS ot
		SET c.t1_score='$t1',c.t2_score='$t2', t.wins=t.wins+'$w1', ot.wins=ot.wins+'$w2',t.losses=t.losses+'$l1', ot.losses=ot.losses+'$l2'
		WHERE c_id='$c' AND t.team_id='$f' AND ot.team_id='$s'
	");
	
header('location:../referee.php');
?>
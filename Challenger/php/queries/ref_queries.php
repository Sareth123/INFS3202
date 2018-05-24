<?php
	include('php/connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	
	$previous_matches= mysqli_query($db->link,
		"SELECT c.c_id,t.team_id, t.name, ot.name AS other, ot.team_id AS o_id , l.loc_name, c.date, c.t1_score, c.t2_score
		FROM teams AS t, teams AS ot, locations AS l, challenges AS c
		WHERE c.team1_id =t.team_id AND c.team2_id = ot.team_id AND c.date <DATE(NOW())
		GROUP BY c.date ORDER BY c.date DESC
	");

	$upcoming_matches= mysqli_query($db->link,
		"SELECT t.name, ot.name AS other, l.loc_name, c.date, c.time
		FROM teams AS t, teams AS ot, locations AS l, challenges AS c
		WHERE c.team1_id =t.team_id AND c.team2_id = ot.team_id AND c.date >=DATE(NOW())
		GROUP BY c.date ORDER BY c.date ASC
	");
?>
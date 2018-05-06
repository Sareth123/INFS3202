<?php 

$query= mysqli_query($db->link,"SELECT t1.name, MAX(c.date) AS d, CASE
					WHEN c.team1_id!=t1.team_id THEN c.t1_score-c.t2_score
   					WHEN c.team1_id=t1.team_id THEN c.t2_score-c.t1_score
    			END AS result
		FROM teams AS t, teams AS t1,  challenges AS c
		WHERE t.name=('$team_name') AND
		IF(t.team_id= c.team2_id,  c.team1_id =t1.team_id ,c.team2_id=t1.team_id)");
$query1=mysqli_query($db->link,"SELECT wins, losses FROM teams WHERE name=('$team_name')");

	
?>

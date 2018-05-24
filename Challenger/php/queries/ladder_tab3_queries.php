<?php
$other_team_names = mysqli_query($db->link,"SELECT t.* 
		FROM teams AS t, team_members as tm, users AS u 
		WHERE t.team_id = tm.team_id AND tm.user_id=u.user_id AND u.username != '$user'"
	);
$locations=mysqli_query($db->link,
		"SELECT loc_id, loc_name 
		FROM locations"
	);
?>
<?php
	//if username is needed
	if(isset($user)){
	
	$team_stats = mysqli_query($db->link,
		"SELECT name, wins, losses 
		FROM teams AS t, team_members AS tm, users AS u 
		WHERE u.username=('$user') AND u.user_id=tm.user_id AND tm.team_id=t.team_id"
	);

	
	$team_members = mysqli_query($db->link,"SELECT firstname, lastname, email, postcode 
		FROM users AS used, (SELECT user_id 
			FROM team_members AS ts, (SELECT t.team_id 
				FROM team_members AS t,(SELECT user_id 
					FROM users 
					WHERE username = ('$user')) AS u 
				WHERE t.user_id=u.user_id) AS td 
			WHERE ts.team_id =td.team_id) AS other 
		WHERE used.user_id=other.user_id "
	);

	$next_match = mysqli_query($db->link,
		"SELECT t.name,l.loc_name, c.date, c.time, t.wins, t.losses
		FROM teams AS t, team_members AS tm, users AS u, locations AS l, challenges AS c
		WHERE u.username=('$user') AND u.user_id = tm.user_id AND c.loc_id=l.loc_id AND c.date>=CURDATE() AND IF(tm.team_id= c.team2_id,  c.team1_id =t.team_id,c.team2_id=t.team_id)
		");

	$previous_matches= mysqli_query($db->link,
		"SELECT t.name,l.loc_name, c.date, 
				CASE
					WHEN c.team1_id!=t.team_id THEN c.t1_score-c.t2_score
   					WHEN c.team1_id=t.team_id THEN c.t2_score-c.t1_score
    			END AS result
		FROM teams AS t, team_members AS tm, users AS u, locations AS l, challenges AS c
		WHERE u.username=('$user') AND u.user_id = tm.user_id AND c.loc_id=l.loc_id AND c.date<CURDATE() AND IF(tm.team_id= c.team2_id,  c.team1_id =t.team_id ,c.team2_id=t.team_id)
	");

	$team_name = mysqli_query($db->link,
		"SELECT t.name 
		FROM team_members AS tm, users AS u, teams AS t 
		WHERE t.team_id=tm.team_id AND tm.user_id=u.user_id AND u.username=('$user')"
	);

	$other_team_names = mysqli_query($db->link,"SELECT t.* 
		FROM teams AS t, team_members as tm, users AS u 
		WHERE t.team_id = tm.team_id AND tm.user_id=u.user_id AND u.username != '$user'"
	);


	}

	//Select queries if another team has been 'selected'
	if(isset($other_team)){

	$last_match= mysqli_query($db->link,
		"SELECT t1.name, MAX(c.date) AS d, CASE
			WHEN c.team1_id!=t1.team_id THEN c.t1_score-c.t2_score
   			WHEN c.team1_id=t1.team_id THEN c.t2_score-c.t1_score
    	END AS result
		FROM teams AS t, teams AS t1,  challenges AS c
		WHERE t.name=('$other_team') AND IF(t.team_id= c.team2_id,  c.team1_id =t1.team_id ,c.team2_id=t1.team_id)
		");

	$other_stats=mysqli_query($db->link,
		"SELECT wins, losses 
		FROM teams 
		WHERE name=('$other_team')"
	);

	
	}

	$locations=mysqli_query($db->link,
		"SELECT loc_id, loc_name 
		FROM locations"
	);
?>
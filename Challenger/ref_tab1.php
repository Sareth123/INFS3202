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
	?>

	<table width="100%">
	<tr>
      <th>Match</th>
      <th>Date</th>
      <th>Location</th>
      <th>Team 1's Score</th>
      <th>Team 2's Score</th>
      <th>Update</th>
    </tr>
    <?php
	while ($row = mysqli_fetch_array($previous_matches)){
		Print '<form action="php/update_score.php" method="POST">';
		Print '<tr>';
		Printf("<input type='hidden' name='id' value=
			"."%s".">",$row['c_id']);
		Printf("<td><input type='hidden' name='t1' value=
			"."%s"."><input type='hidden' name='t2' value=
			"."%s".">"."%s"." vs "."%s"."</td>",$row['team_id'],$row['o_id'],$row['name'],$row['other']);

		Print "<td>".$row['date']."</td>";

		Print "<td>".$row['loc_name']."</td>";

		Printf("<td><input type='number' name='t1_score' min='0' max='100' value=
			"."%s"."></td>",$row['t1_score']);

		Printf("<td><input type='number' name='t2_score' min='0' max='100' value=
			"."%s"."></td>",$row['t2_score']);

		Print '<td>'.'<input type="submit" class="btn btn-primary" align="center" value="Update Score">'.'</td>';

		Print '</tr>';
		Print '</form>';
	}
	?>
	
	</table>

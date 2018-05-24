<?php 
$upcoming_matches= mysqli_query($db->link,
		"SELECT t.name, ot.name AS other, l.loc_name, c.date, c.time
		FROM teams AS t, teams AS ot, locations AS l, challenges AS c
		WHERE c.team1_id =t.team_id AND c.team2_id = ot.team_id AND c.date >=DATE(NOW())
		GROUP BY c.date ORDER BY c.date ASC
	");
	?>

	<table class="table table-hover">
	<tr id="table-head">
      <th>Match</th>
      <th>Date</th>
      <th>Location</th>
      <th>Time</th>
    </tr>
    <?php
	while ($row = mysqli_fetch_array($upcoming_matches)){
		Print '<tr>';
		Print "<td>".$row['name']. " vs ".$row['other']."</td>";

		Print "<td>".$row['date']."</td>";

		Print "<td>".$row['loc_name']."</td>";

		Print "<td>".$row['time']."</td>";
		Print '</tr>';
	}
	?>
	
	</table>
<?php 

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
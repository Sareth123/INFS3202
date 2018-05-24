<?php
$teams=mysqli_query($db->link,"SELECT t.name, t.wins, t.losses, MAX(c.date) FROM teams AS t, challenges AS c WHERE t.team_id=c.team1_id OR t.team_id=c.team2_id GROUP BY t.name");
?>
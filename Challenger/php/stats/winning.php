<?php
require_once('php/connect.php');
        $win = new MySQLDatabase();
        $win->connect("challenger");
      
   $teams = mysqli_query($win->link,"SELECT name, wins, losses FROM teams ORDER BY wins DESC");
   while($row=mysqli_fetch_assoc($teams)){
       $name[]=$row['name'];
       $wins[]=$row['wins'];
    }
    require_once('php/connect.php');
        $w = new MySQLDatabase();
        $w->connect("challenger");
$winMax = mysqli_query($w->link,"SELECT MAX(wins) FROM teams");
$mRow = mysqli_fetch_assoc($winMax);
$max = $mRow['MAX(wins)']+1;
?>
<?php
  require_once('php/connect.php');
    $for = new MySQLDatabase();
          $for->connect("challenger");
        
     $teams = mysqli_query($for->link,
      "SELECT name, wins, losses 
      FROM teams 
      ORDER BY wins DESC"
    );

    while($row=mysqli_fetch_assoc($teams)){
        $name[]=$row['name'];
        $points[]=$row['wins']-$row['losses'];
    }
    
  require_once('php/connect.php');
    $f = new MySQLDatabase();
    $f->connect("challenger");
        $forMax = mysqli_query($f->link,"SELECT MAX(wins),MAX(losses) FROM teams");
        $mRow = mysqli_fetch_assoc($forMax);
        $max = $mRow['MAX(wins)']+1;
        $min = $mRow['MAX(losses)']+1;
?>
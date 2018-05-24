 <?php
 require_once('php/connect.php');
        $losses = new MySQLDatabase();
        $losses->connect("challenger");
      
   $teams = mysqli_query($losses->link,"SELECT name, wins, losses FROM teams ORDER BY wins DESC");
   while($row=mysqli_fetch_assoc($teams)){
       $name[]=$row['name'];
       $wins[]=$row['losses'];
    }
    require_once('php/connect.php');
        $l = new MySQLDatabase();
        $l->connect("challenger");
$winMax = mysqli_query($l->link,"SELECT MAX(losses) FROM teams");
$mRow = mysqli_fetch_assoc($winMax);
$max = $mRow['MAX(losses)']+1;
?>
<body>
  <?php
    include('php/connect.php');
    $db = new MySQLDatabase();
    $db->connect("challenger");
    include('php/queries/ladder_tab1_queries.php');
  ?>
  
  <table class="table table-hover" border="1px" width="100%">
      <tr id="table-head">
        <th>Team Name</th>
        <th>Wins</th>
        <th>Losses</th>
        <th>Last Match</th>
      </tr>

      <?php
        if(isset($_SESSION['user'])){
          $user = $_SESSION['user'];
          
        }
        
        while ($team=mysqli_fetch_assoc($teams))
        {
         Print "<tr>";
              Print '<td align="center">'. $team['name'] ."</td>";
              Print '<td align="center">'. $team['wins'] ."</td>";
              Print '<td align="center">'. $team['losses'] ."</td>";
              Print '<td align="center">'.$team['MAX(c.date)'].'</td>';
          Print '</tr>';
        }
      ?>
  </table>
  <button type="button" class="btn btn-primary" align="center" onClick="makeAPDF();">PDF</button>
</body>

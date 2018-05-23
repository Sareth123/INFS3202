<?php
                include('php/connect.php');
        $db = new MySQLDatabase();
        $db->connect("challenger");
      ?>
  <h2>ladder</h2>
  
  <table border="1px" width="100%">
    <tr>
      <th>Team Name</th>
      <th>Wins</th>
      <th>Losses</th>
      <th>Last Match</th>

    </tr>

  <?php
  if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    include 'php/queries.php';
    $users_team=mysqli_fetch_assoc($team_name);
  }
  $teams=mysqli_query($db->link,"SELECT * FROM teams");
  while ($team=mysqli_fetch_assoc($teams))
    {
       Print "<tr>";
            Print '<td align="center">'. $team['name'] ."</td>";
            Print '<td align="center">'. $team['wins'] ."</td>";
            Print '<td align="center">'. $team['losses'] ."</td>";
            Print '<td align="center">'.'</td>';
            Print '</tr>';
          }
    ?>
  </table>

  <button type="button" class="btn btn-primary" align="center" onClick="makeAPDF();">PDF</button>
<script>
function challenge(name){
  var url = 'challenge.php?';
    var query = 'name=' + name;

    window.location.href = url + query;
 
};
function makeAPDF(){
  var url="php/pdfTeam.php";
  window.location.href=url;
}
</script>
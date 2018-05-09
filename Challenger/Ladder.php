<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Challenger</title>
    </head>

    <body>
      <?php
      include('navbar.php');
      ?>
  <h2>ladder</h2>
  <table border="1px" width="100%">
    <tr>
      <th>Team Name</th>
      <th>Wins</th>
      <th>Losses</th>
      <th>Last Match</th>
      <th></th>
    </tr>

  <?php
  include('php/connect.php');
  $db = new MySQLDatabase();
  $db->connect("challenger");
  $user = $_SESSION['user'];
  $query=mysqli_query($db->link,"SELECT * FROM teams");
  $query1 = mysqli_query($db->link,"SELECT t.name FROM team_members AS tm, users AS u, teams AS t WHERE t.team_id=tm.team_id AND tm.user_id=u.user_id AND u.username=('$user')");
  $row1=mysqli_fetch_assoc($query1);
  while ($row=mysqli_fetch_array($query))
    {
       Print "<tr>";
            Print '<td align="center">'. $row['name'] ."</td>";
            Print '<td align="center">'. $row['wins'] ."</td>";
            Print '<td align="center">'. $row['losses'] ."</td>";
            Print '<td align="center">'."</td>";
            if($row['name']!=$row1['name']){
            Printf('<td button type="button" class="btn btn-primary" align="center" onClick="challenge(\'%s\');">'."Challenge".'</td>',$row['name']);
          }

            Print "</tr>";
}
    ?>
  </table>
<script>
function challenge(name){
  var url = 'challenge.php?';
    var query = 'name=' + name;

    window.location.href = url + query;
 
};
</script>
  <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
            <div class="col l4 s12">
                <h5>Contact Us</h5>
                <ul>
                <li><span>Brisbane, Australia</span></li>
                <li><span>info@challenger.com</span></li>
                <li><span>+61 412 345 678</span></li>
                </ul>
            </div>

            <div class="col l4 s12">
                <h5>Social Media</h5>
                <ul class="d-inline-flex">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
        <div>
            <div class="container">
            © Copyright Challenger 2018
            <a class="black-text right" href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>
  </body>
</html>
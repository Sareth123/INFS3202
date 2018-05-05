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
  session_start();//starts the session
  if($_SESSION['user']){//checks if user is logged in
  }
  else{
    header("location:index.php"); //redirects if user is not logged in
  }
  $user = $_SESSION['user'];
  ?>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Ladder.php">Ladder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rules.php">Rules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUs.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ContactUs.php">Contact Us</a>
                </li>
                </ul>
        </div>
          <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="home.php">Challenger</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="Profile.php">Profile</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="Team.php">Team</a>
              </li>
          </ul>
        </div>
      </nav>

  <h2>ladder</h2>
  <table border="1px" width="100%">
    <tr>
      <th>Team Name</th>
      <th>Wins</th>
      <th>Losses</th>
    <tr>

  <?php
  include('connect.php');
  $db = new MySQLDatabase();
  $db->connect("challenger");

  $query=mysqli_query($db->link,"SELECT * FROM teams");
  while ($row=mysqli_fetch_array($query))
    {
       Print "<tr>";
            Print '<td align="center">'. $row['name'] ."</td>";
            Print '<td align="center">'. $row['wins'] ."</td>";
            Print '<td align="center">'. $row['losses'] ."</td>";
            Print "</tr>";
}
    ?>
  </table>

  
  </body>
</html>
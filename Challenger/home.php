<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="/INFS3202/Challenger/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Challenger</title>
    </head>

    <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/INFS3202/Challenger/Ladder.php">Ladder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/INFS3202/Challenger/Rules.php">Rules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/INFS3202/Challenger/AboutUs.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/INFS3202/Challenger/ContactUs.php">Contact Us</a>
                </li>
                </ul>
        </div>
          <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="/INFS3202/Challenger/home.php">Challenger</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="/INFS3202/Challenger/Profile.php">Profile</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/INFS3202/Challenger/Team.php">Team</a>
              </li>
          </ul>
        </div>
      </nav>
	<?php
	session_start();//starts the session
	if($_SESSION['user']){//checks if user is logged in
	}
	else{
		header("location:index.php"); //redirects if user is not logged in
	}
	$user = $_SESSION['user'];
	?>
	<h2>Team Page</h2>
	<div id="stats">

	<?php
	include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");

	$query=mysqli_query($db->link,"SELECT wins, losses FROM teams AS t, team_members AS tm, users AS u WHERE u.username=('$user') AND u.user_id=tm.user_id AND tm.team_id=t.team_id");
	while ($row=mysqli_fetch_array($query))
		{
			Print '<p>Wins: '.$row['wins'].' Losses: '.$row['losses']."</p>";
		}
		?>
	</div>

	<table border="1px" width="100%">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>PostCode</th>
		<tr>
	<?php
		$query1 =mysqli_query($db->link,"SELECT firstname, lastname, email, postcode FROM users AS used, (SELECT user_id FROM team_members AS ts, (SELECT t.team_id FROM team_members AS t,(SELECT user_id FROM users WHERE username = ('$user')) AS u WHERE t.user_id=u.user_id) AS td WHERE ts.team_id =td.team_id) AS other WHERE used.user_id=other.user_id ");
	while($row1=mysqli_fetch_array($query1))
	{
		Print "<tr>";
						Print '<td align="center">'. $row1['firstname'] ."</td>";
						Print '<td align="center">'. $row1['lastname'] ."</td>";
						Print '<td align="center">'. $row1['email'] ."</td>";
						Print '<td align="center">'. $row1['postcode']."</td";
						Print "</tr>";

	}
	?>
	</table>
	<h2>Next Match</h2>
	<h2>Previous Matches</h2>

	</body>
</html>
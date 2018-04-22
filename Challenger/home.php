<html>
	<head>
		<title>Challenger</title>
	</head>
	<?php
	session_start();//starts the session
	if($_SESSION['user']){//checks if user is logged in
	}
	else{
		header("location:index.php"); //redirects if user is not logged in
	}
	$user = $_SESSION['user'];
	?>
	<body>
	<h2>Team Page</h2>
	<table border="1px" width="100%">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>PostCode</th>
		<tr>
	<?php
	include('connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");
	$query =mysqli_query($db->link,"SELECT firstname, lastname, email, postcode FROM users AS used, (SELECT user_id FROM team_members AS ts, (SELECT t.team_id FROM team_members AS t,(SELECT user_id FROM users WHERE username = ('$user')) AS u WHERE t.user_id=u.user_id) AS td WHERE ts.team_id =td.team_id) AS other WHERE used.user_id=other.user_id ");
	while($row=mysqli_fetch_array($query))
	{
		Print "<tr>";
						Print '<td align="center">'. $row['firstname'] ."</td>";
						Print '<td align="center">'. $row['lastname'] ."</td>";
						Print '<td align="center">'. $row['email'] ."</td>";
						Print '<td align="center">'. $row['postcode']."</td";
						Print "</tr>";

	}
	?>
	</table>

	</body>
</html>
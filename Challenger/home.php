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
		<h2>Home Page</h2>
		<p>Hello <?php Print "$user"?>!</p> <!--Displays user's name-->
		<a href="logout.php">Click here to logout</a><br/><br/>
		<form action="add.php" method="POST">
			Add more to list:<input type ="text" name="details"/><br/>
			public post? <input type="checkbox" name="public[]" value="yes"/><br/>
			<input type="submit" value ="Add to list" />
		</form>
		<h2 align="center">My list</h2>
		<table border="1px" width="100%">
			<tr>
				<th>ID</th>
				<th>Details</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
				$con=mysqli_connect("localhost","root","");
				mysqli_select_db($con,"first_db");
				$query = mysqli_query($con,"SELECT * FROM list");
				while($row= mysqli_fetch_array($query))
					{
						Print "<tr>";
						Print '<td align="center">'. $row['id'] ."</td>";
						Print '<td align="center">'. $row['details'] ."</td>";
						Print '<td align="center">'. $row['date_posted']. " - ". $row['time_posted'] . "</td>";
						Print '<td align="center">'. $row['date_edited']. " - ".$row['time_edited']. "</td>";
						Print '<td align="center"><a href="#" onclick="editFunction('.$row['id'].')">edit</a></td>';
						Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a></td>';
						Print "</tr>";
					}
			?>
		</table>
		<script>
			function editFunction(id)
			{
				window.location.assign("edit.php?id="+id);
			
			}
			function myFunction(id)
			{
				var r=confirm("Are you sure you want to delete this record?");
				if (r==true)
				{
					window.location.assign("delete.php?id="+id);
				}
			}
		</script>
	</body>
</html>
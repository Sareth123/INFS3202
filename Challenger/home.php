<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<script  type="text/javascript" src="js/scripts.js"> </script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
        <title>Challenger</title>
    </head>

    <body>
	    <?php
			include('php/navbar.php');
			include('php/connect.php');
			$db = new MySQLDatabase();
			$db->connect("challenger");
			///ADD CHECK
			if(isset($_SESSION['user'])){
				}else{
					header("location:index.php"); //redirects if user is not logged in
				}
			$user = $_SESSION['user'];
			include('php/queries.php');
		?>

		<section id="page-content">
	        <div class="container">
	          <div class="row">
	            <div class="col-sm text">
	            	<?php
					while ($row=mysqli_fetch_array($team_stats))
						{	Print '<h2>'.$row['name']." Team Page".'</h2>';
							Print'<div id="stats">';
							Print '<p>Wins: '.$row['wins'].' Losses: '.$row['losses']."</p>";
						}
					?>
					

					
					</div>
					<table class="table table-hover" border="1px">
						<tr id="table-head">
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Email</th>
							<th>PostCode</th>
						</tr>

						<?php
							while($row1=mysqli_fetch_array($team_members))
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
					<button type= 'button' class='btn btn-primary' onClick="update()">Update your information</button>
					<h2>Next Match</h2>
					<table class ="table table-hover" border="1px">
						<tr id="table-head">
							<th>Versing</th>
							<th>Location</th>
							<th>Date</th>
							<th>Time</th>
							<th>Stats</th>
						</tr>

						<?php
							while ($row2=mysqli_fetch_array($next_match))
							{
								Print "<tr>";
									Print '<td align="center">'. $row2['name'] ."</td>";
									Print '<td align="center">'. $row2['loc_name'] ."</td>";
									Print '<td align="center">'. $row2['date'] ."</td>";
									Print '<td align="center">'. $row2['time'] ."</td>";
									Print '<td align="center">'. "Wins: ".$row2['wins'] ." Losses: ".$row2['losses']."</td>";
									Print "</tr>";
							}
						?>

					</table>
					<h2>Previous Matches</h2>
					<table class ="table table-hover" border="1px">
						<tr id="table-head">
							<th>Versing</th>
							<th>Location</th>
							<th>Date</th>
							<th>Outcome</th>
						</tr>

						<?php
							while ($row3=mysqli_fetch_array($previous_matches))
							{	
								Print "<tr>";
									Print '<td align="center">'. $row3['name'] ."</td>";
									Print '<td align="center">'. $row3['loc_name'] ."</td>";
									Print '<td align="center">'. $row3['date'] ."</td>";
									if($row3['result']>0){
										Print '<td align="center">'. "WON" ."</td>";
									} else if ($row3['result']<0){
										Print '<td align="center">'. "LOST" ."</td>";
									} else { Print '<td align="center">'. "TIE" ."</td>";
										} 
									Print "</tr>";
							}
						?>

					</table>
				</br>
				<?php 
					$donate = mysqli_query($db->link,"SELECT user_id, donate FROM users WHERE username='$user'");
					$hasDonated=mysqli_fetch_assoc($donate);
					$_SESSION['user_id']=$hasDonated['user_id'];

					if($hasDonated['donate']):
				?>
					<p>Thankyou!</p>
				<?php 
					else: 
				?>
					<p>Would you like to make a one time donation of $10 via PayPal? Donations help to keep the website up and running and allows us to pay our refs for the fantastic job they do! We will send you a sticker as a thankyou.</p>
					<button type="button" class="btn btn-primary" align="center" onclick='donate()'>Donation</button>
				<?php 
					endif; 
				?>
					</div>
				</div>
			</div>
		</section>
		<?php
	      	include('footer.php');
	      ?>
	</body>
</html>


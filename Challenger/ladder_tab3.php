	<?php 

	//$other_team=$_GET['name'];
	//$_SESSION['other']=$other_team;
	//include('php/queries.php');
	?>

	<section id="page-content">
        <div class="container">
          <div class="row">
            <div class="col-sm text">
				<h2>Challenge</h2>
				<form action="php/checkchallenge.php" method="POST">
					<p>Verse: <select name ="other_team">
						<?php $other_team = mysqli_query($db->link,"SELECT t.* FROM teams AS t, team_members as tm, users AS u WHERE t.team_id = tm.team_id AND tm.user_id=u.user_id AND u.username != '$user'");
							
							while ($row1=mysqli_fetch_array($other_team)){
								printf("<option value='%s'>".'%s'."</option>",$row1['team_id'],$row1['name']);
							}
						?></p>
					</select><br/><br/>
				    Enter Date: <input type="date" name="date" required="required" /> <br/><br/>
				    Enter Time: <input type="time" name="time" required="required" /> <br/><br/>
				    
				    <select name="location">
						<?php $locations = mysqli_query($db->link,"SELECT * FROM locations");
							
							while ($row=mysqli_fetch_array($locations)){
								printf("<option value='%s'>".'%s'."</option>",$row['loc_id'],$row['loc_name']);
							}
						?>
					</select><br/><br/>
					<input type="submit" class="btn btn-primary" value="CHALLENGE"/>
			     </form>

			     <p>Upcoming Games</p>
			 	<?php include ('quickstart.php');?>
			</div>
		  </div>
		</div>
	</section>
 
   	
   
  <br><br>
	</body>
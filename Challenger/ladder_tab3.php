<body>
	<section id="page-content">
        <div class="container">
          <div class="row">
            <div class="col-sm text">
				<h2>Challenge</h2>
				<form action="php/checkchallenge.php" method="POST">
					Verse: <select name ="other_team">
						<?php 
							while ($row1=mysqli_fetch_array($other_team_names)){
								printf("<option value='%s'>".'%s'."</option>",$row1['team_id'],$row1['name']);
							}
						?>
					</select><br/><br/>
					
				   	Enter Date: <input type="date" name="date" required="required" /> <br/><br/>
					
				    Enter Time: <input type="time" name="time" required="required" /> <br/><br/>
				  
				    <select name="location">
						<?php 
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
</body>
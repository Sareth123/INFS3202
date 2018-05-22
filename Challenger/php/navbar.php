<title>Challenger</title>
<?php
	session_start();
	if(isset($_SESSION['user']) ? $_SESSION['user'] : ""){?>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
		        <ul class="navbar-nav mr-auto">
		            <li class="nav-item">
		                <a class="nav-link" href="Ladder.php">Ladder</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="Rules.php">Rules</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="Locations.php">Locations</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="Gallery.php">Gallery</a>
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
		                <a class="nav-link" href="Team.php">Team</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="php/logout.php">Logout</a>
		            </li>
		        </ul>
		    </div>
		</nav>
	<?php } else { ?>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
		        <ul class="navbar-nav mr-auto">
		            <li class="nav-item">
		                <a class="nav-link" href="Ladder.php">Ladder</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="Rules.php">Rules</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="Locations.php">Locations</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="ContactUs.php">Contact Us</a>
		            </li>
		        </ul>
		    </div>
		    <div class="mx-auto">
		        <a class="navbar-brand mx-auto" href="home.php">Challenger</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		    </div>
		    <div>
		    	<?php
		    	include("login&register.php");
		    	?>
		   	</div>
		    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
		        <ul class="navbar-nav ml-auto">
		            <li class="px-2">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#content" id="login">Login</button>
					</li>
		            <li>
            			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#content" id="register">Register</button>
		            </li>
		        </ul>
		    </div>
		</nav>
	<?php } 
	?>
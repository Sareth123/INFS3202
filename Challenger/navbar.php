<?php
	session_start();
	if($_SESSION['user']){?>
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
	<?php } else { ?>
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
	<?php } ?>
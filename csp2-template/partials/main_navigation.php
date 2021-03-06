<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">
				Beeer Web App
			</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="home.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="careers.php">Careers</a></li>
			<li><a href="catalog.php">Catalog</a></li>
			<li><a href="contact.php">Contact</a></li>
			<?php 

			if (isset($_SESSION['current_user'])) {
				if ($_SESSION['role'] == 'user') // if regular user
					echo '<li><a href="profile.php">Profile</a></li>';
				else // if admin role
					echo '<li><a href="settings.php">Settings</a></li>';

				echo '<li><a href="signout.php">Sign Out</a></li>';
			}
			else {
				echo '<li><a href="signin.php">Sign In</a></li>';
				echo '<li><a href="signup.php">Sign Up</a></li>';
			}

			?>
		</ul>
	</div>
</nav>
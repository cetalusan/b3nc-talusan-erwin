<?php

function getTitle() {
	echo 'Sign Up | Welcome to Beeer Web App';
}

include 'partials/head.php';

?>
</head>
<body>

	<header>
	<?php 

	require 'partials/main_navigation.php';

	 ?>		
	</header>

	<main class="wrapper">
		<h1>Sign Up</h1>

		<form method="POST" action="registration.php">
			<label for="username">Username</label>
			<input type="username" name="username" id="username" placeholder="Username">
			
			<label>Password</label>
			<input type="password" name="password" id="password" placeholder="Password">

			<label>Confirm Password</label>
			<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">

			<input type="submit" name="submit" value="Sign Up">
		</form>
		
	</main> <!-- /. wrapper -->

	<footer>

		<?php 

			include 'partials/footer.php';
			
		 ?>	

	</footer>

<?php 

include 'partials/foot.php';

 ?>
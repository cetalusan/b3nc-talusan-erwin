<?php

function getTitle() {
	echo 'Index | Welcome to Beeer Web App';
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
		<!-- feedback for signout successful -->

		<h1>Index</h1>
	</main> <!-- /. wrapper -->

	<footer>

		<?php 

			include 'partials/footer.php';
			
		 ?>	

	</footer>

<?php 

include 'partials/foot.php';

 ?>
<?php 

require_once 'assets/lib/twelve_days.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title> <?php echo getTitle(); ?> Lyrics</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>




	<?php 
		 


	// var $gifts = getLyrics();


		for ($days = 1; $days < 12; $days++) {
					echo getLyrics($days);



		// echo 'On the' . getLyrics(0) 'day of Christmas
		// my true love sent to me:' . getLyrics(0);
	}

	 ?>

	 <button onclick="getLyrics()">Next</button>






	<script type="text/javascript" src="assets/js/"></script>

</body>
</html>
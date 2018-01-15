<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title></title>

	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

</head>
<body>


	<?php


	include_once 'assets/lib/hello_world.php';
	require_once 'assets/lib/a_simple_require_file.php';


	// prints a 2x3 table


	function printTable($rows, $cols){
		echo "<table border=1>";

		for ($i=0; $i < $rows; $i++) {
			echo "<tr>";
			for ($j=0; $j < $cols; $j++) {
				echo "<td> Content </td>";
			}
			echo "</tr>";
		}
		echo "</tabe>";
	};

	?>

	<?php  



		function add($a, $b){
			$sum = $a + $b;
			return $sum;
		}

		$number1 = 20;
		$number2 = 12;
		$total = add($number1,$number2);

		function longdate($timestamp){
			return date("l F jS Y" , $timestamp);
		}

		function fix_names($n1, $n2, $n3) {
			$n1 = ucfirst(strtolower($n1));
			$n2 = ucfirst(strtolower($n2));
			$n3 = ucfirst(strtolower($n3));
			return $n1 . " " . $n2 . " " . $n3;
		};

	?>

	


	<?php 

	$a1 = "BILLY"; $a2 = "peejay"; $a3 = "aLLaN";

	// function fix_names()
	// {
	// 	global $a1; $a2
	// }

	 ?>


	 <?php 

	 	function area($a, $b) {
	 		$product = $a * $b;
	 		return $product;
	 	}

	 	$length = 30;
	 	$width = 15;
	 	$product = area($length, $width);


	  ?>


	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php printTable(1,10);
		echo "<br>";
		printTable(1,10);

		?>

		<?php 
			echo "Total is " . $total . "." . "<br>";
		 ?>

		 <?php 

		 echo longdate(time()); 

		 ?>
		<hr>	

		 <?php 

		 echo fix_names("BILLY", "peejay", "AlLaN");

		  ?>	

		  <?php 

		  	echo "Area is " . $product;

		   ?>

		   <?php 
		   iAmRequired();
		    ?>

	</body>
	</html>





</body>
</html>
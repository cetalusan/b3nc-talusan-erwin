<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=0,maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>PHP Programming - Expressions, Control Statements, and Loops</title>

	<style type="text/css">
		.box {
			border:1px solid black;
			display: inline-block;
			padding: 10px;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
		}

	</style>

</head>
<body>

	<?php

	// activity 1

	// $counter = 1;

	// for ($counter = 1; $counter  <= 10; $counter++) { 
	// 	echo $counter;
	// 	if ($counter < 10)
	// 		echo '-';
	// }

	// activity 2

	// for ($x = 1; $x <= 10; $x++) {
	// 	for ($y = 1; $y <= 10; $y++) {
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }

	// activity 3

	// for ($row=1; $row <=10 ; $row++) { 
	// 	for ($col=1; $col <=10; $col++) {
	// 		echo '<span class=box>' . ($row * $col) . '</span>';
	// 	}
	// 	echo '<br>';
	// }

	//activity 4

	// for($row=1; $row<=10; $row++) {
	// 	for ($col=1; $col <= $row ; $col++) { 
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }

	//activity 5

	// for($row=1; $row <= 10; $row++){
	// 	for($col=10; $row <= $col; $col--) {
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }

	//activity 6

	for ($count=1; $count <=50; $count++){
		// divisible by 3 and 5
		if (($count % 3 == 0) and ($count % 5 == 0))
			echo $count . 'FizzBuzz' . '<br>';
		// divisible by 3
		if ($count % 3 == 0)
			echo $count . 'Fizz' . '<br>';
		// divisible by 5
		if ($count % 5 == 0)
			echo $count . 'Buzz' . '<br>';

		
		}




	?>


</body>
</html>
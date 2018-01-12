<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=0,maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	


	<title></title>

</head>
<body>


		<?php
			// for ($x = 0; $x <= 8; $x++) {
			// 	for ($y = 0; $y <= 8; $y++){
			// 		$total = $x + $y;

			// 		if ($total % 2 == 0)
			// 			echo '<span class="box black-box"></span>';
			// 		else
			// 			echo '<span clas="box white-box"></span>';

			// 	}
			// }

		// activity 2 
		// swapping values

			// $a = 1;
			// $b = 2;
			// echo 'Numbers before swap:' . '<br>' . '$a = ' . $a . '<br>';
			// echo '$b' . ' = ' . $b . '<br>';
			// echo 'Numbers after swap:' . '<br>' . '$a = ' . $b . '<br>';
			// echo '$b' . ' = ' . $a;

		// activity 3



		// activity 4
		// $a = 100;
		// $b = 200;

		// echo '$a = ' . $a . '<br>';
		// echo '$b = ' . $b . '<br>';

		// $a = $a + $b;
		// $b = $a - $b;
		// $a = $a - $b;

		// echo '$a = ' . $a . '<br>';
		// echo '$b = ' . $b;

		// $colors = ["red", "green", "blue"];
		// $arrlength = count ($colors);

		// for ($x=0; $x < $arrlength; $x++) { 
		// 	echo $colors[$x] . '<br>';
		// }

		// ==> ARRAYS

		// integer array

		// $age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];

		// foreach ($age as $arr_key => $arr_value) {
		// 	echo "Key=" . $arr_key . ", Value=" . $arr_value . "<br>";
		// }

		// associative array

		// $ages = [
		// 	'Ash' => 21,
		// 	'Misty' => 22,
		// 	'Brock'	=> 23,
		// ];

		// foreach ($ages as $key => $age) {
		// 	echo 'The age of ' . $key . ' is ' . $age. '<br>';
		// }

		// multidimensional array


		// $team_ironman = ["Tony ", "War Machine ", "Vision "];
		// $team_cap = ["Cap America ", "Bucky ", "Hawkeye ", "Falcon "];
		// $civil_war = [$team_ironman , $team_cap];

		// echo $civil_war [1][3];
		// echo $civil_war [0][2];
		// echo $civil_war [0][1];
		// echo $civil_war [1][2];

		// activity

		$items = [
			['product' => 'Lenovo laptop', 'price' => 600.00, 'quantity' => 100],
			['product' => 'Asus tablet', 'price' => 100.00, 'quantity' => 10],
			['product' => 'Acer all-in-one', 'price' => 300.00, 'quantity' => 50],
			['product' => 'HP laptop', 'price' => 400.00, 'quantity' => 1],
			['product' => 'Dell desktop', 'price' => 350.00, 'quantity' => 20],
		];

		?>

		<ul>
			<?php
			// products
			foreach ($items as $item) {
				echo '<li>' . $item['product'] . '</li>';
				// foreach ($item as $key => $value){
				// 	echo '<li>' . $value['product'] . '</li>';
				// }
			}

			?>
		</ul>

		<ul>
			<?php
			// prices
			foreach ($items as $price) {
				echo '<li>' . $price['price'] . '</li>';
			}

			?>
		</ul>

		<ul>
			
			<?php
			// quantity
			foreach ($items as $quantities) {
				echo '<li>' . $quantities['quantity'] . '</li>';
			}

			?>

		</ul>

		<table>
			<thead>
				<th>Product</th>
				<th>Price</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php

				foreach ($items as $value) {
					echo "<tr>";
					echo "<td>" . $value['product'] . "</td>";
					echo "<td>" . $value['price'] . "</td>";
					echo "<td>" . $value['quantity'] . "</td>";
					echo "</tr>";
				}


				?>
			</tbody>
		</table>



</body>
</html>
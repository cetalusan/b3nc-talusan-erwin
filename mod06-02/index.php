<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=0,maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>PHP Programming - Syntax, Printing and Variables</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

	<?php

	// $lyrics = array('star', 'shine', 'yellow');

	// activity #1

	// echo "Look at the $lyrics[0], look how they $lyrics[1] for you, and everything you do. <br> Yeah, they were all $lyrics[2].";
	
	// activity #2

	// echo "
	// 	<ul>
	// 		<li>$lyrics[0]</li>
	// 		<li>$lyrics[1]</li>
	// 		<li>$lyrics[2]</li>

	// 	</ul>
	// ";

	// activity #3

	$firstnames = array('Steph', 'Russel', 'LeBron');
	$lastnames = array('Curry', 'Westbrook', 'James');
	$teams = array('Warriors', 'Thunders', 'Cavaliers');
	$jerseys = array('30', '0', '23');

	// echo "
	// 	Player: $firstnames[0] $lastnames[0]<br>
	// 	Team: $teams[0]<br>
	// 	Jersey: $jerseys[0]<br>
	// 	<br>
	// 	Player: $firstnames[1] $lastnames[1]<br>
	// 	Team: $teams[1]<br>
	// 	Jersey: $jerseys[1]<br>
	// 	<br>
	// 	Player: $firstnames[2] $lastnames[2]<br>
	// 	Team: $teams[2]<br>
	// 	Jersey: $jerseys[2]<br>
	// 	<br>
		
	// ";

	echo "

	<table>
		<tr>
			<th>Player</th>
			<th>Team</th>
			<th>Jersey</th>
		</tr>
		<tr>
			<td>$firstnames[0] $lastnames[0]</td>
			<td>$teams[0]</td>
			<td>$jerseys[0]</td>
		</tr>
		<tr>
			<td>$firstnames[1] $lastnames[1]</td>
			<td>$teams[1]</td>
			<td>$jerseys[1]</td>
		</tr>
		<tr>
			<td>$firstnames[2] $lastnames[2]</td>
			<td>$teams[2]</td>
			<td>$jerseys[2]</td>
		</tr>
	</table>
	";



	?>






	
</body>
</html>
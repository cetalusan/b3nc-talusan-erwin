<?php 

function getTitle() {
	return '12 Days of Christmas';
}

function getLyrics($day) {

	$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eight', 'ninth', 'tenth', 'eleventh', 'twelfth');

	$gifts = array(
		'A partide in a pear tree',
		'Two turle doves',
		'Three french hens',
		'Four calling birds',
		'Five golden rings',
		'Six geese a-laying',
		'Seven swans a-swimming',
		'Eight maids a-milking',
		'Nine ladies dancing',
		'Ten lords a-leaping',
		'Eleven pipers piping',
		'Twelve drummers drumming'
	);



	for ($i = 0; $i < count($days); $i++) { 
			echo '<div id="line' . $i . '">';
			echo 'On the ' . $days[$i] . ' of Christmas my true love sent to me:<br>';

			if ($i == 0)
				echo $gifts[$i] . '<br>';
			else
				for ($j = $i; $j >= 0; $j--) {
					if ($j == 0)
						echo 'And ' . $gifts[$j] . '<br>';
					else
						echo $gifts[$j] . '<br>';
				}
			}


	// return $days[$day] . ' ' . $gifts[$day];

}


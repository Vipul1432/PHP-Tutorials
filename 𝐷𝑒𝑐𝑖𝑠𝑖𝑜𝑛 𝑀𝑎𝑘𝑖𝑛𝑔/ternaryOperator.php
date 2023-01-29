<?php
$x = -12;

if ($x > 0) {
	echo "The number is positive \n";
}
else {
	echo "The number is negative \n";
}

// This whole lot can be written in a
// single line using ternary operator
echo ($x > 0) ? 'The number is positive' :
				'The number is negative';
?>
 
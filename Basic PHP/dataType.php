<!-- Integer  -->
<?php

// decimal base integers
$deci1 = 50;
$deci2 = 654;

// octal base integers
$octal1 = 07;

// hexadecimal base integers
$octal = 0x45;

$sum = $deci1 + $deci2;
echo $sum;
echo "<br>";

//returns data type and value
var_dump($sum);
echo "<br>";
var_dump($octal);
?>

 <!-- Double  -->
<?php
echo "<br>";
$val1 = 50.85;
$val2 = 654.26;

$sum = $val1 + $val2;

echo $sum;
echo "<br>";

//returns data type and value
var_dump($sum);
echo "<br>";
?>

<!-- String  -->

<?php

$name = "Krishna";
echo "The name of the Geek is $name \n";
echo 'The name of the geek is $name ';
echo "\n\n";

//returns data type, size and value
var_dump($name);
echo "<br>";
?>

<!-- Boolean  -->

<?php

if(TRUE)
	echo "This condition is TRUE";
if(FALSE)
	echo "This condition is not TRUE";
    echo "<br>";
?>

<!-- Array  -->

<?php

$intArray = array( 10, 20 , 30);

echo "First Element: $intArray[0]\n";
echo "Second Element: $intArray[1]\n";
echo "Third Element: $intArray[2]\n\n";

//returns data type and value
var_dump($intArray);
echo "<br>";
?>

<!-- Object  -->

<?php

class gfg {
var $message;

function gfg($message) {
	$this->message = $message;
}

function msg() {
	return "This is an example of " . $this->message . "!";
}
}

// instantiating a object
$newObj = new gfg("Object Data Type");
echo $newObj -> msg();
echo "<br>";
?>

<!-- NULL  -->

<?php

$nm = NULL;
echo $nm; // this will return no output

// return data type
var_dump($nm);

?>





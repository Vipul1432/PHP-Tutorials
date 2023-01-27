<?php

// without argument funtion 

function greet() {
    echo "Hello World!";
}

greet();
echo "<br>";

// funntiion with parameter 

function greet2($name) {
    $var = "Hello";
    echo $var . " " . $name;
}

greet2("Vipul");

?>
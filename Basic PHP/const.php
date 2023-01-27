<?php
// Contsant 
$firstname = 'Vipul';
$firstname = 'Kumar';
define('Status', 'Vipul');
echo Status;
echo $firstname;
echo '<br>';

//dynamic constant define 
$constant = 'Status';
define('Abc_'.$constant, $constant);
echo Abc_Status;

echo '<br>';
echo defined('Status');
echo '<br>';

//constant using define keyword
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
  echo '<br>';
  echo PHP_VERSION;
?>
<?php
echo strlen("Hello World!");
?>

<?php
echo strrev("Hello World!");
?>

<?php
echo str_replace("World", "Vipul", "Hello World!"), "\n";
echo str_replace("Hi", "Hello", "Hello World!"), "\n";
?>

<?php
echo strpos("Hello Vipul", "Vipul"), "\n";
echo strpos("Hello Vipul!", "Vip"), "\n";
var_dump(strpos("Hello MrVipul!", "Peek"));
?>

<?php
echo trim("Hello World!", "Hed!");
?>

<?php
$input = "Welcome to PHP Course";
print_r(explode(" ",$input));
?>

<?php
$input = "WELCOME TO PHP COURSE";
echo strtolower($input);
?>

<?php
$input = "Welcome to PHP Course";
echo strtoupper($input);
?>

<?php
$input = "Welcome to PHP Course";
echo str_word_count($input);
?>

<?php
$input = "Welcome to PHP Course";
echo(substr($input,3));
?>


<?php
$var = 'Vipul';
$var2 = 'Kumar';
echo $var . ' ' . $var2;
echo "<br>";

// Array 
$num = array(24,34,56,78,95);
echo $num;
echo "<br>";
echo $num[0];
echo "<br>";

for($i = 0; $i <= 4; $i++)
{
    echo $num[$i] . ", ";
}

echo "<br>";
print_r($num);


echo "<br>";
$ages = array(
    "Vipul" => "22",
    "Shibu" => "23",
    "Raj" => "23"
);
echo $ages['Vipul'];

echo "<br>";
echo count($ages);
echo "<br>";
$numbers = array(2,4,6,9,5,1);
 foreach($numbers as $number)
{
    echo $number . ", ";
}
echo "<br>";
sort($numbers);
echo "<br>";
foreach($ages as $name => $age)
{
    echo $name . " is " . $age . " year old. <br>";
}
?>
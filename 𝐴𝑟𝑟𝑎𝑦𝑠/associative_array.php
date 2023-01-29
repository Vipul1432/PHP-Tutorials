<!-- first way -->

<?php
$salary=array("Vipul"=>"350000","John"=>"450000","Kartik"=>"200000");  
echo "Salary of Vipul is ".$salary['Sonoo'];
?>

<!-- second way -->

<?php
$salary['Vipul']="350000";
$salary['John']="450000";
$salary['Kartik']="200000";
echo "Salary of Vipul is ".$salary['Sonoo'];
?>
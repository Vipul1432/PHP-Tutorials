<?php
	$arr = array (10, 20, 30, 40, 50, 60);
	foreach ($arr as $val) {
		echo "$val \n";
	}
	
	$arr = array ("Ram", "Laxman", "Sita");
	foreach ($arr as $val) {
		echo "$val \n";
	}
?>

<?php  
    //declare array  
    $employee = array (  
        "Name" => "Vipul",  
        "Email" => "vipul1432@gmail.com",  
        "Age" => 21,  
        "Gender" => "Male"  
    );  
      
    //display associative array element through foreach loop  
    foreach ($employee as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>";   
    }  
?>  
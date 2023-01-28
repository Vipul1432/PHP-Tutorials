<?php  
    $name = "Vipul Kumar";        //Global Variable  
    function global_var()  
    {  
        global $name;  
        echo "Variable inside the function: ". $name;  
        echo "</br>";  
    }  
    global_var();  
    echo "Variable outside the function: ". $name;  
?>  

<!-- Another way to use the global variable inside the function is predefined $GLOBALS array. -->

<?php  
 echo "</br>"; 
    $num1 = 5;      //global variable  
    $num2 = 13;     //global variable  
    function global_var2()  
    {  
            $sum = $GLOBALS['num1'] + $GLOBALS['num2'];  
            echo "Sum of global variables is: " .$sum;  
    }  
    global_var2();  
?>  

<?php  
    $x = 5;  
    function mytest()  
    {  
        $x = 7;  
        echo "value of x: " .$x;  
    }  
    mytest();  
?>  
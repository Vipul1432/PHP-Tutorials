<?php  
        //class declaration  
        class Developer  
        {}  
        class Programmer  
        {}  
        //creating an object of type Developer  
        $vipul = new Developer();  
          
        //testing the type of object  
        if( $vipul instanceof Developer)  
        {  
            echo "Vipul is a developer.";  
        }  
        else  
        {     
            echo "Vipul is a programmer.";  
        }  
        echo "</br>";  
        var_dump($vipul instanceof Developer);           //It will return true.  
        var_dump($vipul instanceof Programmer);       //It will return false.  
    ?>  
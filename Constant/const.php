<?php  
const MESSAGE="Hello const by const Keyword";  
echo MESSAGE;  
?>  

<!-- Constant function  -->

<?php      
    define("MSG", "This msg is using constant() funtion");  
    echo MSG, "</br>";  
    echo constant("MSG");  
    //both are similar  
?>  
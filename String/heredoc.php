<?php
$input = <<<testHeredoc

Welcome to PHP Course.
Started coding in PHP!.
I am enjoying this.

testHeredoc;

echo $input;

?>
<?php  
    $str = <<<demo
It is the example   
of multiple  
lines of text.  
demo;  
    echo $str;  
  
echo '</br>';  
  
    // Here we are not storing string content in variable str.   
echo <<<demo
It is the example   
of multiple  
lines of text.  
demo;  
 ?>  
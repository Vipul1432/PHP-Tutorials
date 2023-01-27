<!-- Magic Constant __LINE__ -->

<?php   
    echo "<h3>Example for __LINE__</h3>";    
    // print Your current line number i.e;4     
    echo "You are at line number " . __LINE__ . "<br><br>";  
?>

<?php echo "</br>"; ?>

<!-- Magic Constant __FILE__ -->

<?php   
    echo "<h3>Example for __FILE__</h3>";    
    // print Your current file name i.e; magic_constant.php     
    echo "You are in file " . __FILE__ . "<br><br>";
?>

<?php echo "</br>"; ?>

<!-- Magic Constant __DIR__ -->

<?php   
    echo "<h3>Example for __DIR__</h3>";    
    // print Your current directory name i.e; Constant     
    echo "You are in directory " . __DIR__ . "<br><br>";
?>

<?php echo "</br>"; ?>

<!-- Magic Constant __FUNCTION__ -->

<?php   
    echo "<h3>Example for __FUNCTION__</h3>";    
    // print Your current function name i.e; main 
    function fun(){    
    echo "You are in function " . __FUNCTION__ . "<br><br>";
    }
    fun();
?>

<?php echo "</br>"; ?>

<!-- Magic Constant __CLASS__ -->

<?php   
    echo "<h3>Example for __CLASS__</h3>";    
    // print Your current class name i.e; main 
    class A{
        function fun(){    
        echo "You are in class " . __CLASS__ . "<br><br>";
        }
    }
    $a = new A();
    $a->fun();
?>

<?php echo "</br>"; ?>

<!-- Magic Constant __METHOD__ -->

<?php   
    echo "<h3>Example for __METHOD__</h3>";    
    // print Your current method name i.e; fun 
    class B{
        function fun(){    
        echo "You are in method " . __METHOD__ . "<br><br>";
        }
    }
    $b = new B();
    $b->fun();
?>

<?php echo "</br>"; ?>


<!-- Magic Constant __TRAIT__ -->

<?php   
    echo "<h3>Example for __TRAIT__</h3>";    
    // print Your current trait name i.e; main 
    trait C{
        function fun(){    
        echo "You are in trait " . __TRAIT__ . "<br><br>";
        }
    }
    class D{
        use C;
    }
    $d = new D();
    $d->fun();
?>

<?php echo "</br>"; ?>

<!-- Magic Constant __NAMESPACE__ -->

<?php   
    echo "<h3>Example for __NAMESPACE__</h3>";    
    // print Your current namespace name i.e; main 
   // namespace nameSpace;
    class testClass{
        function fun(){    
        echo "You are in namespace " . __NAMESPACE__ . "<br><br>";
        }
    }
    $f = new testClass();
    $f->fun();  
?>


<?php echo "</br>"; ?>

<!-- Magic Constant 𝐶𝑙𝑎𝑠𝑠𝑁𝑎𝑚𝑒::𝑐𝑙𝑎𝑠𝑠 : -->

<?php   
    echo "<h3>Example for ClassName::class</h3>";    
    // print Your current class name i.e; main 
    class E{
        function fun(){    
        echo "You are in class " . __CLASS__ . "<br><br>";
        }
    }
    $e = new E();
    $e->fun();
?>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>

<?php echo "<br/>"?> 

<?php  
    class ParentClass  
    {  
        public function __construct()  
        {  
            echo "This is Parent Costructor";  
        }  
    }  
      
    class Child extends ParentClass  
    {  
        public function __construct()  
        {             
            echo parent::__construct();
            echo "This is Child Costructor";  
        }  
    }  
    $obj= new Child();
?> 
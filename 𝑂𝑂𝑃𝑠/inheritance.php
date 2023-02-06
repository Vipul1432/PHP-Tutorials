<!-- // write a program for inheritance in php ?  -->



<?php 

class ParentClass { 
   public $name; 
   public $age; 

   public function __construct($name, $age) {
      $this->name = $name; 
      $this->age = $age; 
   } 

   public function getName() {
      return $this->name; 
   } 

   public function getAge() {
      return $this->age; 
   }    
} 

 class ChildClass extends ParentClass {

    public function __construct($name,$age) {
        parent::__construct($name,$age);
    }   

    public function getNameAge(){
        return "Name: ".$this->getName()." Age: ".$this->getAge();
    }    

 }    

 // create an object of ChildClass class    
$obj = new ChildClass("Vipul", 22);    

 // print the name and age of the object    
echo "Name and Age of the person is : ".$obj->getNameAge();

 ?>
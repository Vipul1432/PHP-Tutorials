<?php
class person
{
    public $name;
    public $age;
    public function __construct($n, $a)
    {
        $this->name=$n;
        $this->age=$a;
    }
    public function setAge($ag)
    {
        $this->age=$ag;
    }

    public function display()
    {
        echo  "welcome ".$this->name."<br/>";
        return $this->age;
    }
}

$person=new person("Vipul", 20);
$person->setAge(23);

echo "You are ".$person->display()." years old";
?>  
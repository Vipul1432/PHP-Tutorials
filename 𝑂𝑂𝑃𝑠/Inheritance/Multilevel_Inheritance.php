<?php

class GrandParent
{
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class ParentClass extends GrandParent
{
    public $age;

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Child extends ParentClass
{
    public $gender;

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }
}

$child = new Child();
$child->setName("Vipul");
$child->setAge(23);
$child->setGender("Male");

echo $child->getName(); // John
echo $child->getAge(); // 30
echo $child->getGender(); // Male

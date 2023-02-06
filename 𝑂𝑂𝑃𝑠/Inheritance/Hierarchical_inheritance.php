<?php

class Animal
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

class Dog extends Animal
{
    public $breed;

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function getBreed()
    {
        return $this->breed;
    }
}

class Cat extends Animal
{
    public $color;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$dog = new Dog();
$dog->setName("Rufus");
$dog->setBreed("Labrador");

echo $dog->getName(); // Rufus
echo $dog->getBreed(); // Labrador

$cat = new Cat();
$cat->setName("Whiskers");
$cat->setColor("Black");

echo $cat->getName(); // Whiskers
echo $cat->getColor(); // Black

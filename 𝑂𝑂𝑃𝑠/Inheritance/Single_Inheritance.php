<?php

class Car
{
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }
}

class SportsCar extends Car
{
    private $topSpeed;

    public function __construct($make, $model, $year, $topSpeed)
    {
        parent::__construct($make, $model, $year);
        $this->topSpeed = $topSpeed;
    }

    public function getTopSpeed()
    {
        return $this->topSpeed;
    }
}

$sportsCar = new SportsCar("Porsche", "911", 2020, 200);

// The SportsCar class inherits the properties and methods of the Car class
echo $sportsCar->getMake(); // Porsche
echo $sportsCar->getModel(); // 911
echo $sportsCar->getYear(); // 2020

// The SportsCar class also has its own properties and methods
echo $sportsCar->getTopSpeed(); // 200

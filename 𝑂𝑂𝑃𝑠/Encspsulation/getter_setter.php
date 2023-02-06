<?php

class Car
{
    private $make;
    private $model;
    private $year;
    private $engineSize;

    public function __construct($make, $model, $year, $engineSize)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->engineSize = $engineSize;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function setMake($make)
    {
        $this->make = $make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getEngineSize()
    {
        return $this->engineSize;
    }

    public function setEngineSize($engineSize)
    {
        $this->engineSize = $engineSize;
    }
}

$car = new Car("Toyota", "Camry", 2020, 2.5);

// Retrieve the make of the car using a getter
echo $car->getMake();

// Set the make of the car using a setter
$car->setMake("Honda");

<?php

interface Driveable
{
    public function drive();
}

interface Flyable
{
    public function fly();
}

class Car implements Driveable
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

    public function drive()
    {
        return "Driving the car";
    }
}

class Plane implements Flyable
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

    public function fly()
    {
        return "Flying the plane";
    }
}

class FlyingCar implements Driveable, Flyable
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

    public function drive()
    {
        return "Driving the flying car";
    }

    public function fly()
    {
        return "Flying the flying car";
    }
}

$flyingCar = new FlyingCar("Tesla", "Roadster", 2022);

    // The FlyingCar class implements the Driveable and Flyable interfaces
echo $flyingCar->drive(); // Driving the flying car
echo $flyingCar->fly(); // Flying the flying car

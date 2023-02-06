<?php

class Shape
{
    public function draw()
    {
        return "Drawing a shape";
    }
}

class Circle extends Shape
{
    public function draw()
    {
        return "Drawing a circle";
    }
}

class Rectangle extends Shape
{
    public function draw()
    {
        return "Drawing a rectangle";
    }
}

$shapes = array(new Shape(), new Circle(), new Rectangle());

foreach ($shapes as $shape) {
    echo $shape->draw() . PHP_EOL;
}

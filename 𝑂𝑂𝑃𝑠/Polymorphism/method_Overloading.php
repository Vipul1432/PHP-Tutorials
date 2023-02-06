<?php

class Calculator
{
    public function add()
    {
        $args = func_get_args();
        $sum = 0;
        foreach ($args as $arg) {
            $sum += $arg;
        }
        return $sum;
    }
}

$calculator = new Calculator();

 // Add two numbers
echo $calculator->add(1, 2); // Outputs 3

 // Add three numbers
echo $calculator->add(1, 2, 3); // Outputs 6

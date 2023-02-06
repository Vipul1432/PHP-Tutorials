<?php

class ComplexNumber
{
    private $real;
    private $imag;

    public function __construct($real, $imag)
    {
        $this->real = $real;
        $this->imag = $imag;
    }

    public static function __add(ComplexNumber $a, ComplexNumber $b)
    {
        $real = $a->real + $b->real;
        $imag = $a->imag + $b->imag;
        return new ComplexNumber($real, $imag);
    }

    public function __toString()
    {
        return $this->real . " + " . $this->imag . "i";
    }
}

$a = new ComplexNumber(1, 2);
$b = new ComplexNumber(3, 4);

$c = ComplexNumber::__add($a, $b);

echo $c;

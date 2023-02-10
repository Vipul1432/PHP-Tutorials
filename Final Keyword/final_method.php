<?php

class Base
{
    // Final method
    final public function printdata()
    {
        echo " Base class final printdata function";
    }

    // Non final method
    public function nonfinal()
    {
        echo "\n This is nonfinal function of base class";
    }
}

// Class that extend base class
class Derived extends Base
{
    // Inheriting method nonfinal
    public function nonfinal()
    {
        echo "\n Derived class non final function";
    }

    // Here printdata function can
    // not be overridden
}

$obj = new Derived();
$obj->printdata();
$obj->nonfinal();

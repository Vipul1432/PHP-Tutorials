<?php

final class Base
{
    // Final method
    final public function printdata()
    {
        echo "final base class final method";
    }

    // Non final method
    public function nonfinal()
    {
        echo "\nnon final method of final base class";
    }
}

$obj = new Base();
$obj->printdata();
$obj->nonfinal();

/* If we uncomment these lines then it will
show Class Derived may not inherit from final
class (Base)
class Derived extends Base {

} */

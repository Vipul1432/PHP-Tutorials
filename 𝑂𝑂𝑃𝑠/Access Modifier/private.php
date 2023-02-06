<?php

class ParentClass
{
    private $name = "Vipul";
    private function show()
    {
        echo "This is private method of parent class";
    }
}

class child extends ParentClass
{
    public function show1()
    {
        echo $this->name;
    }
}
$obj = new child();
$obj->show();
$obj->show1();

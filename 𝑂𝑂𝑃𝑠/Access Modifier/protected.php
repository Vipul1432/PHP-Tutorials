<?php
class ParentClass
{
    protected $x=500;
    protected $y=100;
    public function add()
    {
        echo $sum = $this->x+$this->y."<br/>";
    }
}
class child extends ParentClass
{
    public function sub()
    {
        echo $sub = $this->x-$this->y."<br/>";
    }
}
$obj= new child();
$obj->add();
$obj->sub();
?> 
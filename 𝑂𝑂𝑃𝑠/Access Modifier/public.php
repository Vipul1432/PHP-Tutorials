<?php

class demo
{
    public $name="Vipul";
    public function disp()
    {
        echo $this->name."<br/>";
    }
}
class child extends demo
{
    public function show()
    {
        echo $this->name;
    }
}
$obj= new child();
echo $obj->name."<br/>";
$obj->disp();
$obj->show();

?>

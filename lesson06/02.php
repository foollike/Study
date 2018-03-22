<?php

$a = new classname;

$a->attribute = 5;

 class classname
{
    private $attribute;
    private $test;

    function __get($name)
    {
        return $this->$name;
    }

    function __set ($name, $value)
    {
        $this->$name = $value;
    }
}

class A
{    
    private function operation1()
    {
        echo "operation1 called";
    }

    protected function operation2()
    {
        echo "operation2 called<br />";
    }

    public function operation3()
    {
        echo "operation3 called<br />";
    }
}


class B extends A
{
    function __construct()
    {
        //$this-> operation1();
        $this-> operation2();
        $this-> operation3();
    }    
}

$b = new B;
//$b->operation2();
$b->operation3();

/*
$b = new B;
$b->operation1();
$b->attribute1 = 10;
$b->operation2();
$b->attribute2 = 10;
*/

?>
<?php

//$a = new connection("first");
//$a = new connection("second");
//$a-> test ("test") ;

$a = new connection();
$b =$a ->operation ("test",30);

echo $b;

class connection
{
    
    //public $test2;    

    function operation($param,$test2)
    {
        //$this ->attribute = $param."、another one:".$test2;
        //echo $this ->attribute;

        $attribute = $param." not that all ".$test2;

        return $attribute;
    }

}




    /*
    function __construct($param)  
    {
        $this ->$value = $param;
        echo $this->$attribute;     
    }*/

    /*$a = new connection();
    $a->attribute = "hello";
    $a->test = 50;
    echo $a->attribute;
    echo "<br />".$a->test;
    */
    
    




?>
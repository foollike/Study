<!DOCTYPE html>
<html>

<title>first time coding</title>

<body>

<h1>my test php</h1>


<?php

class Car
{
    var $colorball;
    var $fuck;
    function Car($colorball,$fuck) {
      $this->colorball = $colorball;
      $this->fuck= $fuck;
    }
    /*
    function what_color() {
      return $this->color;
    }*/
}

echo strlen("hihihihihiihii");

echo "<br/>".strpos("hey","a");

function print_vars($obj) {
   foreach (get_object_vars($obj) as $v => $p) {
     echo "$v |||| $p<br/>";
   }
}

// instantiate one object
$herbie = new Car("black","whatthe");

// show herbie properties
print_vars($herbie);

/*

static $b=0;

    function test()
    {               
      global $b;
      
      $b++;
    }    

    $test=array("hello","hey","you");

    print "i want to do this {$test[0]} <br/>";
    
    $x=8E-5;

    var_dump($test);

    test();
    test();
    test();

    define ("hello","what are you talking about<br/>");
    
        echo hello;

    echo $b;   
    */
    


?>


</body>
</html>
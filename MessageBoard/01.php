<?php

class Message{
     var $name;
     var $time;
     var $content;
     var $id;
    
    function __construct($n, $t, $c ,$i)
    {
        $this->name = $n;
        $this->time = $t;
        $this->content = $c;
        $this->id = $i;
    }

    function show()
    {
        echo "Name: ".$this->name."<br />";
        echo "Time: ".$this->time."<br />";
        echo "Content: ".$this->content."<br />";
        echo "<input type='button' onclick=\"javascript:location.href='http://localhost/Study/MessageBoard/MessageBoard.php?id=".$this->id."'\" value='Delete'>";
        echo "<br />"."=================================="."<br />";
    }

}

class DB{

    var $database = null;

    function __construct(){
        //connect

        $dbhost = "localhost"; //127.0.0.1
        $account = "root";
        $password = "";
        $dbselect = "dbmessages";
        $dbconnect = "mysql:host=".$dbhost.";dbname=".$dbselect;

        $this->database = new PDO($dbconnect,$account,$password);
        if($this->database){
            //echo "DB connected.";
        }
        else{
            //echo "DB connect fail";
        }
    }
    
}

//implement
// $m = new Message("Howard","2018-01-16","I am Howard.");
// $m->show();
// var_dump($m);

?>
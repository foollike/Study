<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MessageBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="//code.jquery.com/jquery-2.2.3.min.js "></script>
</head>
<body>
    
</body>
</html>

<?php

include_once('01.php');
class MessageBoard extends DB
{
    var $messages = array();

    function __construct()
    {
        parent::__construct();
        $this->receiveMessage();
        $this->loadData();
        $this->showAllMessages();
        $this->showForm();
        $this->deleteData();
    }

    function receiveMessage()
    {        
        date_default_timezone_set("Asia/Taipei");

        if(count($_POST) != 0){
            $this->saveData($_POST['userName'],$_POST['content'],date("Y-m-d h:i:s",time()));
        }       
              
    }
    function saveData($u, $c, $t)
    {        
         $query = "INSERT INTO `all_messages`(`name`, `time`, `content`) VALUES ('".$u."','".$t."','".$c."')";
         $this->database->exec($query);
    }

    function deleteData()
    {
        if(isset($_GET["id"])){
            $query = "DELETE FROM `all_messages` WHERE ID='".$_GET["id"]."'";
            $this->database->exec($query);
        }
        
    }

    function loadData()
    {
        $query = "SELECT * FROM `all_messages`";
        $result = $this->database->query($query);
        $row=$result->fetchAll();
        
        for($x=0;$x<count($row);$x++)
        {
           $show = $row[$x];
           $temp = new Message($show['name'],$show['time'],$show['content'],$show['ID']);
           array_push($this->messages,$temp);
        }
    }
    function showAllMessages()
    {
        foreach($this->messages as $m)
        {
            $m->show();
        }
    }
    function showForm()
    {
        echo "<form action='' method='POST'>";
        echo "Name:"."<input type='text' name='userName' >"."<br />";
        echo "Content: "."<input type='text' name='content'>"." ";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }

}

$mb = new MessageBoard();


?>
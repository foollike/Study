<?php

$reason = $_POST["reason"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$email = $_POST["email"];


echo $reason."<br />";
echo $name."<br />";
echo $gender."<br />";
echo $email."<br />";

$database = null;

$dbhost = "localhost"; //127.0.0.1
$account = "root";
$password = "";
$dbselect = "dbmessages";
$dbconnect = "mysql:host=".$dbhost.";dbname=".$dbselect;

$database = new PDO($dbconnect,$account,$password);

$name = $_POST["name"];
$query = "INSERT INTO `questionnaire`(`reason`, `time`, `gender`,'email') VALUES ('$reason','$name','$gender','$email')";
$database->exec($query);

?>
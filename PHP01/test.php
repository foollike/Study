<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
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
$dbselect = "study";
$dbconnect = "mysql:host=".$dbhost.";dbname=".$dbselect.";charset=utf8";

$database = new PDO($dbconnect,$account,$password);

$name = $_POST["name"];
$query = "INSERT INTO `questionnaire`(`reason`, `name`, `gender`,`email`) VALUES ('$reason','$name','$gender','$email')";
$database->exec($query);

$sql = "SELECT * FROM `questionnaire`";


?>

</head>
<body>
    
</body>
</html>
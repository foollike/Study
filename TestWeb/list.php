<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div style="overflow:scroll;height:700px;width:500px;">
<?php
$database = null;

$dbhost = "localhost"; //127.0.0.1
$account = "root";
$password = "";
$dbselect = "study";
$dbconnect = "mysql:host=".$dbhost.";dbname=".$dbselect.";charset=utf8";

$database = new PDO($dbconnect,$account,$password);

$sql = "SELECT * FROM `questionnaire`";
$result = $database->query($sql);
$row=$result->fetchAll();

for($x=0;$x<count($row);$x++)
{
    $temp = $row[$x];

    echo "<p style='color:red;'>姓名: ".$temp['name']."</p>";
    echo "姓別: ".$temp['gender']."<br />";
    echo "電子信箱: ".$temp['email']."<br />";
    echo "為何喜歡persona5: ".$temp['reason']."<br /><br />";
}
?>

</div>
<br/>
<a href="test.html"><button>返回首頁</button></a>
</body>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aliens Abducted Me - Report an Abduction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Aliens Abducted Me - Report an Abducion</h2>

<?php
    $when_it_happened = $_POST['whenithappened'];

    $From = "";
    $To = "";
    $Title = "";
    $msg = "";


    echo 'Thanks for submitting the form.<br />';
    echo 'You were abducted' . $when_it_happened;

    mail()

?>

</body>
</html>
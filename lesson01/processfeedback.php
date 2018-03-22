<?php

$name=trim($_REQUEST['name']);
$email=trim($_REQUEST['email']);
$feedback=trim($_REQUEST['feedback']);

$toaddress = 'howard@aiming-inc.com.tw';

$subject = "Feedback from web site";

$mailcontent = "Customer name: ".str_replace("\r","",$name)."<br />".
               "Customer email:".str_replace("\r\n","",$email)."<br />".
               "Customer comments:".str_replace("\r\n","",$feedback)."<br />";

               $fromaddress = "From: howard@aiming-inc.com.tw";

               $test = 12.5;

               printf("now is just a test %.4f really holy %s",$test,$test);

               echo "<br />".substr($subject,0,-3);

               //mail($toaddress, $subject, $mailcontent, $fromaddress);

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Bob's Auto Parts - Feedback Submitted</title>
    </head>
    <body>
    
        <h1>Feedback submitted</h1>
        <p>Your feedback has been sent.</p> 

    </body>
</html>
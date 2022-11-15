<?php
$to = "dennisspruijt2005@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: manku@gmail.com" . "\r\n" .
"CC: manku@gmail.com";

mail($to,$subject,$txt,$headers);
?>
<?php
    $to      = 'dennisspruijt2005@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: manku@example.com'       . "\r\n" .
                 'Reply-To: manku@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers); ini_set()
?>
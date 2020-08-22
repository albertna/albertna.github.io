<?php
if(isset($_POST['submit'])){
    $to = "dun.na@vanderbilt.edu";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Form submission from albertna.net";
    $subject2 = "Copy of your message to Albert Na";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message to Albert Na: " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $name . " for your message!";
    }
?>
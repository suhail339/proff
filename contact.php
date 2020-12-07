<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];


if (empty($name) || empty($email) || empty($subject || empty($message))
{

    echo "Please Fill All THE FIELDS";
}

else
{

    mail("munibhassan341@gmail.com", "Contact Form Of Website", $subject, $message, "From: $name < $email>");

    echo "<script type='text/javascript'>alert('Your Message Sent Successfully.');
    
    window.history.log(-1);
    
    </script>";
}

?>
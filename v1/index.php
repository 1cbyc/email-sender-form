<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'me@theirdaddy.com';
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully";
    } else {
        echo "Error sending message";
    }
}

?>

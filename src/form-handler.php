<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$email_from='info@yourwebsite.com';
$email_subject = 'New form submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Subject: $subject.\n".
                        "User Message: $message .\n";

$to = 'samy.harras@mail.mcgill.ca';
$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'sbubass@gmail.com';

$email_subject = 'New Form Submission'

$email_body = "User First Name: $firstName.\n".
              "User Last Name: $lastName.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

$to = 'sbubass@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>
<?php

// Set recipient email address (replace with your actual email)
$to = 'straetatech@gmail.com';

// Get form data (assuming form field names match)
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Construct email body
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Subject: $subject\n";
$body .= "Message:\n$message";

// Set email headers (replace with your website domain if applicable)
$headers = "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8 \r\n";

// Send email using PHP mail function (replace with your error handling)
if (mail($to, $subject, $body, $headers)) {
  echo "Email sent successfully!";
} else {
  echo "Error sending email.";
}

?>

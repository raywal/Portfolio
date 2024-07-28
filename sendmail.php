<?php
  // Configuration
  $to_email = 'rayanagrwl@gmail.com'; 
  $subject = 'Message from Website';

  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Create email body
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message: $message\n";

  // Send email
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  mail($to_email, $subject, $body, $headers);

  // Redirect back to the website
  header('Location: index.html');
  exit;
?>
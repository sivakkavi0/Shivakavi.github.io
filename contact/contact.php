<?php
// Get form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Example: Send email
$to = 'sivakavi673@gmail.com';
$subject = 'New Message from ' . $fname . ' ' . $lname;
$body = "Email: $email\n\nSubject: $subject\n\nMessage:\n$message";
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully!';
} else {
    echo 'Failed to send message.';
}
?>

<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "acepainting_co@yahoo.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "\n\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\n\n" . $message;
$msg = wordwrap($msg,70);
$mymsg = "Customer has sent you a message!" . $msg;
$replymsg = "Thank you for your form submission!" . $msg;
mail($myemail,"Customer has sent you a message",$mymsg);
mail($email,"Thank you for your form submission",$replymsg);
echo 'Thank you for your submission.  Please <a href="index.html">Click here to return to our homepage.';

?>

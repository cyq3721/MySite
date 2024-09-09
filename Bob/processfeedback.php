<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$toaddress = "cyq3721@hotmail.com";
$subject = "Feedback from web site";

$mailcontent = "Customer name: " . filter_var($name) . "\n" .
	       "Customer email: " . $email . "\n" .
	       "Customer comments: \n" . $feedback ."\n";
$fromaddress = "From: webserver@example.com";

mail($toaddress, $subject, $mailcontent, $fromaddress);

?>

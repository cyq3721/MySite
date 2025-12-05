<!doctype html>
<html>
  <head>
    <title>Bob's Auto Parts -- Porcessfeedback</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>Customer Feedback</h1>
    <p>Your feedback (show below) has been sent. </p>

    <?php
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $feedback = $_POST['feedback'];

    $toaddress = "feedback@example.com";
    $subject = "Feedback from web site";
    $mailcontent = "Customer name:" . filter_var($name) . "\n" .
                   "Customer email:" . $email ."\n" .
                   "Customer comments: \n" . $feedback . "\n";

    $fromaddress = "From: webserver@example.com";

    // mail($toaddress, $subject, $mailcontent, $fromaddress);
    echo "<p>" . nl2br(htmlspecialchars($feedback)) . "</p>";
    ?>

  </body>
</html>

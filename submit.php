<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $to = "youremail@example.com";
    $subject = "New FitNation Membership Request";
    $message = "Email: " . $email;
    $headers = "From: no-reply@fitnation.com";

    mail($to, $subject, $message, $headers);
    echo "Success!";
  } else {
    echo "Invalid email address.";
  }
}
?>

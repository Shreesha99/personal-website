<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = "$name";

  $email_subject = "Form Query";

  $email_body = "Name : $name. \n".
                  "Email : $email. \n".
                    "Subject: $subject. \n".
                      "Message: $message. \n";


$to = "shreeshavenkatram08@gmail.com";

$headers = "From: $email \r\n";

$headers .= "Reply To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: thankyou.html");

?>
<?php
  $name = $_POST['name'];
  $visitor_email  $_POST['email'];
  $message = $_POST['message'];
  
  $email_from = '6367@pierson.nl';
  
  $email_subject = "New Form Submission";
  
  $email_body = "User Name $name.\n".
                  "User Emai: $visitor_email.\n";
                    "User Message: $message.\n";
  
  $to = "6367@pierson.nl";
  
  $headers = "from: $email_from\r\n";
  
  $headers ."reply-to: $visitor_email \r\n";
  
  mail($to,$email_subject,$email_body,$headers);
  
  header("Location: index.html");
  ?>
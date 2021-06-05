<?php
$name=$_post['name'];
$phone=$_post['phone'];
$visitor_email=$_post['email'];
$subject=$_post['message'];
$email_from='security@gmail.com';

$email_subject='new form submission';

$email_body="user Name:$name.\n";
            "user Phone:$phone.\n";  
             "user email:$visitor_email.\n";
              "user message:$message.\n";

$to ='abc@gmail.com';
$headers ='from:$email_from\r\n';y

$headers ="Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>







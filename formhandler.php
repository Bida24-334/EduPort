<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from ='info@Bida24-334.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n". 
                "User Message: $message.\n";   
$to = 'bida24-334@thuto.bac.ac.bw';

$headers = "Reply-To: $visitors_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html.html");


?>
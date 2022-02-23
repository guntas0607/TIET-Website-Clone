<? php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@projectwebsite.com'

$email_subject ='New Form Submission'
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $visitor_email.\n".
              "User Message: $message .\n";

$to = 'dhillonguntas693@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>
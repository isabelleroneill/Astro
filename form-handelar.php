<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $visitor_email = htmlspecialchars(strip_tags($_POST['email']));
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    $to = "astrovisionariesinitiative@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "Name: $name\nEmail: $visitor_email\nSubject: $subject\nMessage:\n$message";

    $headers = "From: $visitor_email\r\n";
    $headers .= "Reply-To: $visitor_email\r\n";

    if(mail($to, $email_subject, $email_body, $headers)) {
        header("Location: Contact.html");
        exit;
    } else {
        echo "Error sending email.";
    }
}
?>

<?php

$to = "recipient@example.com";
$subject = "Test Email with Attachments from PHP";
$message = "This is a test email message sent from a PHP script with attachments.";
$headers = "From: sender@example.com" . "\r\n" .
    "CC: recipient2@example.com";

// Define the boundary for the email message
$boundary = uniqid("np");

// Create the header for the email message
$headers .= "\r\nMIME-Version: 1.0\r\n" .
    "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

// Create the message body with the attachments
$body = "--$boundary\r\n" .
    "Content-Type: text/plain; charset=UTF-8\r\n" .
    "Content-Transfer-Encoding: base64\r\n\r\n" .
    chunk_split(base64_encode($message)) . "\r\n";

// Add the attachments to the message body
$attachments = array("file1.pdf", "file2.jpg");

foreach ($attachments as $file) {
    $file_content = file_get_contents($file);
    $file_name = basename($file);
    $body .= "--$boundary\r\n" .
        "Content-Type: application/octet-stream; name=$file_name\r\n" .
        "Content-Disposition: attachment; filename=$file_name\r\n" .
        "Content-Transfer-Encoding: base64\r\n\r\n" .
        chunk_split(base64_encode($file_content)) . "\r\n";
}

// Send the email message
if (mail($to, $subject, $body, $headers)) {
    echo "Email with attachments sent successfully!";
} else {
    echo "Email sending failed.";
}

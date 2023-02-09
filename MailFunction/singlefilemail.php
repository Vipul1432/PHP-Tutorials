<!DOCTYPE html>
<html>
<head>
    <title>Send Email using Localhost</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to = $_POST["to"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $headers = "From: your_email@example.com" . "\r\n" .
                   "CC: another_email@example.com";
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully.";
        } else {
            echo "Error sending email.";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="to">To:</label>
        <input type="email" id="to" name="to" required>
        <br>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>

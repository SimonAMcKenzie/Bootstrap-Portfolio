<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Form Submission from $name";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent";
    } else {
        echo "Message sending failed";
    }
} else {
    echo "Invalid request";
}
?>

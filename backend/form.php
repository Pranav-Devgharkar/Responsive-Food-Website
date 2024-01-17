<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate data (you might want to add more validation)
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        exit();
    }

    // Email configuration
    $to = "clinop8477@gmail.com";  // Replace with your email address
    $headers = "From: $email";

    // Send email
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    // Redirect or handle invalid requests
    echo "Invalid request";
}

?>

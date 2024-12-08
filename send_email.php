<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "travisbickleis15482@gmail.com"; // The recipient's email address
    $subject = "Message from HTML Form"; // Subject of the email
    $message = $_POST['user_message']; // Get the user's input from the form
    $headers = "From: travisbickleis15482@gmail.com\r\n"; // The "from" email address

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "There was an error sending the email.";
    }
}
?>

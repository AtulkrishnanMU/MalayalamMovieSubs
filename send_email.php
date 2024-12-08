<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    if (isset($_POST['user_message']) && !empty($_POST['user_message'])) {
        $message = strip_tags(trim($_POST['user_message'])); // Sanitize input (remove HTML tags)

        $to = "travisbickleis15482@gmail.com"; // The recipient's email address
        $subject = "Message from HTML Form"; // Subject of the email
        $headers = "From: travisbickleis15482@gmail.com\r\n"; // The "from" email address
        $headers .= "Reply-To: travisbickleis15482@gmail.com\r\n"; // Optional, reply-to header
        
        // Additional headers
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; // Set content type to plain text
        
        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "There was an error sending the email.";
        }
    } else {
        echo "Message field is empty or not set.";
    }
}
?>

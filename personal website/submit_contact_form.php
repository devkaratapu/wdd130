<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate the form data (you can add further validation as needed)

// Example email content
$subject = 'Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
$to = 'samson.dev007@gmail.com'; // Replace with your email address
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    http_response_code(200); // Set the HTTP response code to 200 (OK)
    echo 'Message sent successfully';
} else {
    // Error sending email
    http_response_code(500); // Set the HTTP response code to 500 (Internal Server Error)
    echo 'Error sending message';
}

Make sure to replace 'your-email@example.com' with your actual email address where you want to receive the form submissions.

In this example, the script retrieves the form data from the $_POST superglobal array, validates it (you can add additional validation as needed), and then sends an email using the mail() function in PHP. It checks if the email was sent successfully and returns the appropriate response and HTTP status code.

Remember to configure your server's email settings correctly to ensure that the mail() function works. Additionally, you may need to install and configure additional libraries or use third-party services for more advanced email handling.

Note: This is a basic example and may require further customization based on your specific requirements and server environment.

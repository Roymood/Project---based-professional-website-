<?php
// Initialize variables to hold the form data
$name = $email = $dob = $message = "";

// Check if the form was submitted
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $dob = sanitize_input($_POST['dob']);
    $message = sanitize_input($_POST['message']);

    // The HTML for your thank you message
    $thankYouHtml = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Roy's Portfolio</title>
    <meta name='description' content='Portfolio'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>
<body>
    <div class='container'>
        <div class='thank-you-message bg-black-10'>
            <h1>Thank you, your message has been submitted!</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Date of Birth:</strong> $dob</p>
            <p><strong>Message:</strong> $message</p>
            <a href='index.html' class='btn btn-secondary'>Return Home</a>
        </div>
    </div>
</body>
</html>";

    echo $thankYouHtml;
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

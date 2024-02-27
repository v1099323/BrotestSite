<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $firstName = $_POST['form']['FirstName'];
    $lastName = $_POST['form']['LastName'];
    $jobTitle = $_POST['form']['Job'];
    $companyName = $_POST['form']['CompanyName'];
    $phoneNumber = $_POST['form']['Phone'];
    $email = $_POST['form']['Email'];
    $website = $_POST['form']['website'];
    $message = $_POST['form']['Message'];

    // Perform validation and processing here

    // For example, send an email with the form data
    $to = "berezovski73@gmail.com";
    $subject = "New Form Submission";
    $messageBody = "Name: $firstName $lastName\nJob Title: $jobTitle\nCompany Name: $companyName\nPhone: $phoneNumber\nEmail: $email\nWebsite: $website\nMessage: $message";

    // Send email
    mail($to, $subject, $messageBody);

    // Redirect to a thank you page
    //header("Location: thank_you.html");
    exit;
}
?>

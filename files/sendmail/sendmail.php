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
    $to = "contact@asterionglobalcorp.com";
    $subject = "New Form Submission";
    $messageBody = "
        <html>
        <head>
            <title>New Form Submission</title>
            <style>
                body {
                    font-family: Poppins, sans-serif;
                    background-color: #f4f4f4;
                    padding: 20px;
                }
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                .header {
                    background-color: #007bff;
                    color: #fff;
                    padding: 10px;
                    text-align: center;
                    border-radius: 5px 5px 0 0;
                }
                .content {
                    padding: 20px;
                    color: #000;
                    font-weight: 600;
                    font-size: 14px;
                }
                .footer {
                    background-color: #f4f4f4;
                    padding: 10px;
                    text-align: center;
                    border-radius: 0 0 5px 5px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>New Form Submission</h1>
                </div>
                <div class='content'>
                    <p>Name: $firstName $lastName</p>
                    <p>Job Title: $jobTitle</p>
                    <p>Company Name: $companyName</p>
                    <p>Phone: $phoneNumber</p>
                    <p>Email: $email</p>
                    <p>Website: $website</p>
                    <p>Message: $message</p>
                </div>
                <div class='footer'>
                    <p>Thank you for your submission!</p>
                </div>
            </div>
        </body>
        </html>
    ";

    // Set content-type header for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Send email
    mail($to, $subject, $messageBody, $headers);

    // Return JSON response
    $response = array(
        'success' => true,
        'message' => 'Form submitted successfully'
    );

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>

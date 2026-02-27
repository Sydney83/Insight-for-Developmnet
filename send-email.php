<?php
// Disable error reporting to prevent "Headers already sent" errors
error_reporting(0);
ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $to = "techielinkmw@gmail.com";
    
    // Sanitize Inputs
    $name    = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email   = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone   = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS);
    $enquiry = filter_input(INPUT_POST, 'enquiry_type', FILTER_SANITIZE_SPECIAL_CHARS);
    $msg_body = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    // Subject Line
    $subject = "I4D Website Inquiry: $enquiry ($name)";

    // Construct Body
    $body = "New Message from I4D Website\r\n";
    $body .= "---------------------------\r\n";
    $body .= "Name: $name\r\n";
    $body .= "Email: $email\r\n";
    $body .= "Phone: $phone\r\n";
    $body .= "Country: $country\r\n";
    $body .= "Type: $enquiry\r\n";
    $body .= "Message: \r\n$msg_body\r\n";

    // Headers - Use an email from your domain if possible to avoid Spam filters
    $from_email = "techielinkmw@gmail.com"; 
    $headers = "From: I4D Website <$from_email>\r\n"; 
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // The -f parameter helps Gmail verify the sender
    $success = mail($to, $subject, $body, $headers, "-f" . $from_email);

    if ($success) {
        // Redirect back to index with success status
        echo "<script>window.location.href='index.php?status=success#contact';</script>";
        exit;
    } else {
        // Redirect back to index with error status
        echo "<script>window.location.href='index.php?status=error#contact';</script>";
        exit;
    }

} else {
    // Direct access redirect
    header("Location: index.php");
    exit;
}
?>
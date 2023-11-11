<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "rahulpathak2632@gmail.com";  // Change this to the desired email address
    $subject = "New Form Submission";

    $message = "Contact Number: " . $_POST["message"]["phone"] . "\n";
    $message .= "Company: " . $_POST["message"]["company"] . "\n";
    $message .= "Position: " . $_POST["message"]["jobtitle"] . "\n";
    $message .= "Message: " . $_POST["message"]["enquiry"] . "\n";

    $headers = "From: webmaster@example.com";  // Change this to your website's email address

    mail($to, $subject, $message, $headers);

    // Redirect back to your website with a success message
    header("Location: http://www.yourwebsite.com/thank-you.html");
    exit();
}
?>

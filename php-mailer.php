<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$nameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = '';
$name = $email = $phone = $subject = $message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
      $subject  = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : 'New Inquiry';
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    $hasError = false;
    // VALIDATIONS
    if (empty($name)) {
        $nameErr = "Name is required";
        $hasError = true;
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Valid email required";
        $hasError = true;
    }

    if (empty($phone) || !preg_match("/^[0-9]{10,15}$/", $phone)) {
        $phoneErr = "Valid phone required";
        $hasError = true;
    }

    if (empty($subject)) {
        $subjectErr = "Subject is required";
        $hasError = true;
    }

    if (empty($message)) {
        $messageErr = "Message is required";
        $hasError = true;
    }

    if (!$hasError) {

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'web.hoverbusinessservices@gmail.com';
            $mail->Password = 'zrtycnkdwjjgbybt';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('web.hoverbusinessservices@gmail.com', 'Garg Enterprises');
            $mail->addAddress('web.hoverbusinessservices@gmail.com', 'Garg Enterprises');

            $mail->isHTML(true);
            $mail->Subject = "New Appointment Request from Website";

            $mail->Body = "
                  <div style='font-family: Arial, sans-serif; line-height:1.7; color:#333;'>
                      <h2 style='color:#1e2e65; margin-bottom:10px;'> New Inquiry Received</h2>                  
                      <p>You have received a new inquiry from the Garg Enterprises website.</p>                  
                      <p>
                          <strong>Name:</strong> $name <br>
                          <strong>Email:</strong> $email <br>
                          <strong>Phone:</strong> $phone <br>
                          <strong>Subject:</strong> $subject
                      </p>                  
                      <p>
                          <strong>Message:</strong><br>
                          $message
                      </p>                  
                      <p style='margin-top:20px;'>
                          Regards,<br>
                          <strong>Website Enquiry System</strong>
                      </p>                  
                  </div>
                  ";

            $mail->send();

            header("Location: thank-you.php");
            exit();

        } catch (Exception $e) {
            header("Location: error.php");
            exit();
        }
    }
}
?>
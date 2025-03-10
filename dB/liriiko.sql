<?php
session_start();
require 'config.php'; // Database connection
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

// User Registration
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $token = md5(rand());
    $role = 'user';
    
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, role, token) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $password, $role, $token);
    if ($stmt->execute()) {
        sendVerificationEmail($email, $token);
        echo "Registration successful! Please check your email to verify your account.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Email Verification Function
function sendVerificationEmail($email, $token) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com'; // Replace with SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'b@gmail.com'; // Replace with your email
        $mail->Password = '123'; // Replace with your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('your_email@example.com', 'Liriiko');
        $mail->addAddress($email);
        $mail->Subject = 'Verify Your Email';
        $mail->Body = "Click the link to verify your email: http://yourwebsite.com/verify.php?token=$token";
        $mail->send();
    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Email Verification Process
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $stmt = $conn->prepare("UPDATE users SET verified = 1 WHERE token = ?");
    $stmt->bind_param("s", $token);
    if ($stmt->execute() && $stmt->affected_rows > 0) {
        echo "Email verified successfully! You can now log in.";
    } else {
        echo "Invalid or expired token.";
    }
    $stmt->close();
}

?>

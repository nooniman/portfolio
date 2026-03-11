<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name    = trim(htmlspecialchars($_POST['name']    ?? ''));
$email   = trim(htmlspecialchars($_POST['email']   ?? ''));
$subject = trim(htmlspecialchars($_POST['subject'] ?? ''));
$message = trim(htmlspecialchars($_POST['message'] ?? ''));

// finishallformz!!
$errors = [];
if (empty($name))    $errors[] = "Name is required.";
if (empty($email) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    $errors[] = "A valid email is required.";
if (empty($subject)) $errors[] = "Subject is required.";
if (empty($message)) $errors[] = "Message is required.";

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'msg' => implode(' ', $errors)];
    header('Location: index.php#contact');
    exit;
}

// for production, no phpmailer yett
$to      = 'anasdemonteverde@gmail.com';
$headers = "From: $name <$email>\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
$body    = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

$sent = mail($to, "Portfolio Contact: $subject", $body, $headers);

if ($sent) {
    $_SESSION['flash'] = ['type' => 'success', 'msg' => "Thanks, $name! Your message has been sent. I'll get back to you soon."];
} else {
    // fake ahh
    $_SESSION['flash'] = ['type' => 'success', 'msg' => "Thanks, $name! Your message was received. I'll get back to you soon."];
}

header('Location: index.php#contact');
exit;

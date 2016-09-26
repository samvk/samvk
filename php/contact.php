<?php

error_reporting(0);

//Correct serve connection test
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}

require "dbconnection.php";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = trim($_POST["message"]);

//empty fields check (shouldn't be seen unless falsey value passed on purpose)
if (empty($name) || empty($email) || empty($message)) {
    echo "<p class='loud'>Oops! You left some required fields blank.</p>";
    exit;
}

//Valid email check (shouldn't be seen unless falsey value passed on purpose)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p class='loud'>Oops! Can you double check your email?</p>";
    exit;
}

//Spam bot honeypot
if ($_POST["address"] !== "") {
    echo "<p class='loud'>Bad form input.</p>";
    exit;
}

// Send message to database
$stmt = $db->prepare("INSERT INTO contact(name, email, phone, message) VALUES (:name, :email, :phone, :message)");
$stmt->execute(array(':name' => $name, ':email' => $email, ':phone' => $phone, ':message' => $message));

// Send message to email
$to = "hello@samvk.com";
$email_subject = "New message from $name | SamVK";
$email_body = "You have received a new message from SamVK. Here are the details...\n\nName: $name\n\nEmail: $email\n\nPhone Number: $phone\n\nMessage:\n$message";
$headers = "From: samvk.com\n";
$headers .= "Reply-To: $email_address";	

mail($to, $email_subject, $email_body, $headers);

echo "<p class='loud'>Submitted!</p>";
<?php

error_reporting(0);

//Correct serve connection test
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}

require "dbconnection.php";

$name = mysqli_real_escape_string($dbc, trim($_POST["name"]));
$email = mysqli_real_escape_string($dbc, trim($_POST["email"]));
$phone = mysqli_real_escape_string($dbc, trim($_POST["phone"]));
$message = mysqli_real_escape_string($dbc, trim($_POST["message"]));

//empty fields check (shouldn't be seen if html:required working)
if (empty($name) || empty($email) || empty($message)) {
    echo "<p>Oops! You left some required fields blank.</p>";
    exit;
}

//Valid email check (shouldn't be seen if html-required working)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Invalid email format.</p>";
    exit;
}

//Spam bot honeypot
if ($_POST["address"] != "") {
    echo "<p class='error'>Bad form input.</p>";
    exit;
}

// Send copy of message to database
mysqli_query($dbc, "INSERT INTO contact(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')");

// Send message directly to crec email
$to = "hello@samvk.com";
$email_subject = "New message from $name - SamVK";
$email_body = "You have received a new message from SamVK. Here are the details...\n\nName: $name\n\nEmail: $email\n\nPhone Number: $phone\n\nMessage:\n$message";
$headers = "From: samvk.com\n";
$headers .= "Reply-To: $email_address";	

mail(stripslashes($to), stripslashes($email_subject), stripslashes($email_body), stripslashes($headers));

echo "<p>Submitted!</p>";
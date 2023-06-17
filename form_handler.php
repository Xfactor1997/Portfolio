<?php
header('Access-Control-Allow-Origin:');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mailheader = "From:" . $name . "<" . $email . ">\r\n";

$recipient = "markgamal722@gmail.com";
mail($recipient,$subject,$message,$mailheader)
or die("Error!");
echo "<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Mark Gamal</title>
</head>
<body>
    <div class="container">
        <h1>
            Thank you for contacting me.
            I will get back to you as soon as possible!
        </h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
    </div>
</body>
</html>
";
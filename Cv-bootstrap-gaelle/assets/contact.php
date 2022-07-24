<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<?php $name = $_POST['fc1'];
$email = $_POST['fc2'];
$objet = $_POST['fc3'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "albericogaelle@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Nous reviendrons vers vous dans les plus brefs délais !";
?>
</body>
</html>

<!-- BESOIN DE SECURISER LE FORM -->
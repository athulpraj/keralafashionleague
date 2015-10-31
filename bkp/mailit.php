<?php
$firstname = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['message'];

$to = "founder@abhildev.com";
$subject = "abhildev.com -Contact Message";
$message = " Name: $firstname \n\n  Email: $email \n\n Comments: $comments";
$from = $email;
$headers = "From:".$from;
mail($to,$subject,$message,$headers);
$txt = "Thank you for contacting us.";
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('$txt')
    window.location.href='http://abhildev.com/contact.html';
    </SCRIPT>");
?>
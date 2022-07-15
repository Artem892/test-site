<?php
session_start();

unset($_SESSION['user_name']);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);

unset($_SESSION['$error_username']);
unset($_SESSION['$error_email']);
unset($_SESSION['$error_subject']);
unset($_SESSION['$error_message']);

function redirect(){
    header('Location: contact.php');
    exit;
}

$user_name = htmlspecialchars(trim($_POST['username']));
$from = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['user_name'] = $user_name;
$_SESSION['email'] = $from;
$_SESSION['subject'] = $subject ;
$_SESSION['message'] = $message;

if(strlen($user_name) <= 1){
    $error_username = "Введіть коректне ім'я";
    redirect();
}
else if(strlen($from) < 5 || strpos($from, "@") == false){
    $error_email = "Ви ввели не коректний email";
    redirect();
}
else if(strlen($subject) <= 5){
    $error_message = "Тема має бути";
    redirect();}

else if(strlen($message) <= 5){
    $error_message = "Повідомлення має бути не меньше 5 символів";
    redirect();
}
else{
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8";
  mail("sulymaartem@gmail.com",$subject , $message);
  $_SESSION['success_mail'] = "Ви успішно відправили повідомлення, згодом вам відповідять!";
  redirect();
}

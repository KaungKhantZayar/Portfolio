<?php

if (empty($_POST['name']) OR empty($_POST['email']) OR empty($_POST['subject']) OR empty($_POST['message'])){
  if (empty($_POST['name'])) {
    $nameError = 'Name cannot be empty';
  }
  if (empty($_POST['email'])) {
    $emailError = 'Email cannot be empty';
  }
  if (empty($_POST['subject'])) {
    $subjectError = 'Subject cannot be empty';
  }
  if (empty($_POST['message'])) {
    $messageError = 'message cannot be empty';
  }
}else{

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  use phpmailer\phpmailer\phpmailer;
  use phpmailer\phpmailer\SMTP;

   require "vendor/autoload.php";

   $mail = new PHPMailer(true);

   $mail->isSMTP();
   $mail->SMTPAuth = true;

   $mail->Host = "smtp.gmail.com";
   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
   $mail->Port = 587;

   $mail->Username = "thawhtooin@gmail.com";
   $mail->Password = "mhtnnxlmtkqltsrd";

   $mail->setFrom($email,$name);
   $mail->addAddress("dave@example.com", "Dave");

   $mail->Subject = $subject;
   $mail->Body = $message;

   $mail->send();
     echo "<script>alert('Thank you for your message');window.location.href='index.php'</script>";

 ?>

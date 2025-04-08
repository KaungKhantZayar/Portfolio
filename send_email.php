<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


   require "vendor/autoload.php";

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;

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

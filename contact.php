<?php
   $email = "cs@gitasoft.id";
 
   $name = $_POST['name'];
   //$phone = $_POST['phone'];
   $message = $_POST['message'];
   $emailAnony = $_POST['email'];
   $mailMsg = "Pesan Dari <br>
               Nama  : $name <br>
               Email : $emailAnony <br>
   			   Pesan Adalah :$message<br>";

  
   echo "$mailMsg"; 
   require "PHPMailer/PHPMailerAutoload.php";
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "nikkirufiansya@gitasoft.id"; //email cuciin
   $mail ->Password = "rahasia"; //password gmail
   $mail ->SetFrom("cs@gitasoft.id"); //email cuciin
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($email);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Email Terikirim";
   }

    header("location:index.html");


?>

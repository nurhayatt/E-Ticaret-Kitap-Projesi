<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['message'])) {
    if (empty($_POST['name']) || empty($_POST['mail']) || empty($_POST['message']) || empty($_POST['phone']) ) {
        echo "Lütfen Formu Eksiksiz Doldurunuz!";
    } else {


	    $name           = strip_tags($_POST['name']);
        $email        = strip_tags($_POST['mail']);
        $message      = strip_tags($_POST['message']);
        $phone        = strip_tags($_POST["phone"]);


        include "forms/PHPMailer.php"; // include the class file name
        include "forms/SMTP.php";
        include "forms/Exception.php";
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->SMTPAutoTLS = true;
			$mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($email, $name);
            $mail->Username = "radiomonitornetwork@gmail.com"; //Username for SMTP authentication any valid email created in your domain
        		$mail->Password = "123.Radiomonitornetwork"; //Password for SMTP authentication
            $mail->addAddress("info@radiomonitornetwork.com", $name);
            //$mail->addAddress("mert297344@gmail.com", $name);
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Radio Monitor Network';
            //$mail->Body    = " {$message}" ;
            $mail->Body    = "From : ".$name."<br /> E-mail : ".$email."<br />Phone: ".$_POST['phone']."<br /><br />".$message;
            $mail->AltBody = " {$message}";

            $mail->send();
            echo 'Your message has been sent. You are redirected to the homepage...';

        } catch (Exception $e) {
            echo "Something went wrong. Please try again later. You are redirected to the homepage...";
        }
    }
} else {
    echo "Please fill out the form completely. You are redirected to the homepage...";
}

echo "<script> setTimeout(() => {window.location = '/'}, 5000);  </script>";

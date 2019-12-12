<?php
require_once '/phpmailer/PHPMailerAutoLoad.php';
session_start();

$message="the Client"." ".$_SESSION["name"]." ".$_SESSION["surname"]." his Id Number"." ".$_SESSION["id"]."will pass by and recover his command from snackfit shop ";
$mail = new PHPMailer();
	//set a host
	$mail->Host = "smtp.gmail.com";
	//enable SMTP
	$mail->isSMTP();

	$mail->SMTPDebug =0;
	//set authentification to true
	$mail->SMTPAuth = true;
	//set login details for Gmail account
	$mail->Username = "ons.driss@esprit.tn";
	$mail->Password = "Nouretons1999";

	//set type of protection
	$mail->SMTPSecure = "tls"; //or we can use TLS

	$mail->SMTPOptions = array(
    	'ssl' => array(
        	'verify_peer' => false,
        	'verify_peer_name' => false,
        	'allow_self_signed' => true
    	)
	);

	//set a port
	$mail->Port = 587; // or 587 if TLS
	//set a subject
	$mail->Subject ="Recover Command";
	//set HTML to true
	$mail->isHTML(true);
	//set a body
	$body =$message;
	$mail->Body=$body;
	//set who is sending an email
	$mail->setFrom('ons.driss@esprit.tn','geekgadgets');
	//set where we are sending email (recipients)
	$mail->addAddress("ons.driss@esprit.tn");
	//send an email
	if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else 
	{
		header("location:oui.php?sent=true");
    }

?>
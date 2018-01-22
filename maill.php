<?php
	$mailto="vikasmswpl@gmail.com";
	$mailsub="1";
	$mailmsg="2";
	require 'C:\wamp64\PHPMailer-master\PHPMailerAutoload.php';
	$mail=new PHPMailer();
	$mail->IsSmtp();
	$mail->SMTP=1;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	$mail->IsHTML(true);
	$mail->Username="kingvik.98@gmail.com";
	$mail->Password="lawargasakiv"; 
	$mail->SetFrom("kingvik.98@gmail.com"); 
	$mail->Subject=$mailsub;
	$mail->Body=$mailmsg;
	$mail->AddAddress($mailto);
	$mail->send();
	if(!$mail->send())
	{
	echo"not";
	}
	else
	{
	"yes";
	}

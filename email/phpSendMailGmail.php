<html>
<head>
</head>
<body>
<?php
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "vasupol.ch@ku.th"; // GMAIL username
	$mail->Password = "@Sun0852224434"; // GMAIL password
	$mail->From = "vasupol.ch@ku.th"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
	$mail->FromName = $_POST['fromName']  // set from Name
	$mail->Subject = "Test sending mail."; 
	$mail->Body = "My Body<b>My Description</b>";

	$mail->AddAddress("kittichai.te@ku.th", "Mr.kanokpon"); // to Address

	

	//$mail->AddCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

	if($mail->Send()){
		echo 'ส่งเรียบร้อย'	;	
	}
?>
</body>
</html>
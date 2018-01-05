<?php
function send_mail($from,$to,$subject,$body){
	$charset = 'utf-8';
	mb_language("ru");
	
	$headers = "MIME-Version: 1.0 \n";
	$headers .= "From: <".$from.">\n";
	$headers .= "Reply-to: <".$from."> \n";
	$headers .= "Content-Type: text/html; charset=$charset \n";
	
	$subject = '=?'.$charset.'?B?'.base64_encode($subject).'?=';
	
	mail($to,$subject,$body,$headers);
	
	
	
}

$phone = $_POST["phone"];

if($phone == ""){
	
}
else{
	send_mail('Demo_website','ya-gans@mail.ru','Call back','From:'.$phone);
	header("Location:index.php");
}
?>
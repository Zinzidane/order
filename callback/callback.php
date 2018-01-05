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

$username = $_POST["username"];
$phone_number = $_POST["phone_number"];

if($username == "" && $phone_number == ""){
	
}
else{
	send_mail('Demo_website','developerkz44@gmail.com','Call back','From:'.$username.' <br/> '.$phone_number);
	header("Location:index.php");
}
?>
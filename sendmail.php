<?php

$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$message=$_POST['message'];

if (empty($name)||empty($phonenumber)||empty($email) ||empty($message)) {
	echo "FILL THE FORM AGAIN!!! MESSAGE IS NOT SENT TO OWNER!!!. Something missing";
	echo header('Refresh: 4; url=index.html');
	exit;
}

$email_from = "$email";
$email_subject = "New Mail!! FROM $name";
$email_body = "You have received a new message from the  $name.\n"."HERE IS THE MESSAGE:\n $message";

$to = "satkar.tiwari1@gmail.com";
$headers = "From:$email_from";

mail($to, $email_subject, $email_body,$headers);
echo "message send successfully";
echo header('Refresh: 1; url=index.html');
?>
<?php
error_reporting(0);
if (empty($_POST['otp'])) {
	$message['status'] = "success";
	$message = $class->VerifyOTP($_POST['phone'],$_POST['otp']);
}
echo json_encode($message);
?>
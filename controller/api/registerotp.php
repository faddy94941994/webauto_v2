<?php
error_reporting(0);
if (empty($_POST['phone_mb'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณากรอก เบอร์โทรศัพท์";
}elseif (empty($_POST['password_mb'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณากรอก รหัสผ่าน";	
}elseif (empty($_POST['phone_true'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณากรอก ไอดีทรูวอเล็ต ถ้าไม่ตั้งใส่เบอร์โทรศัพท์";
}elseif (empty($_POST['bank_mb'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณา เลือกธนาคาร";
}elseif (empty($_POST['bankacc_mb'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณากรอก เลขบัญชี";
}else{
	$message = $class->register_otp($_POST['phone_mb'],$_POST['phone_true'],$_POST['password_mb'],$_POST['bank_mb'],$_POST['bankacc_mb']);
}
echo json_encode($message);
?>
<?php
//error_reporting(0);
if (empty($_POST['phone_mb'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณากรอก เบอร์โทรศัพท์";
}elseif (empty($_POST['password_mb'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณากรอก รหัสผ่าน";
}else{
	$message = $class->login($_POST['phone_mb'],$_POST['password_mb']);
}
echo json_encode($message);
?>
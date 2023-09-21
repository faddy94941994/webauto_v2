<?php
error_reporting(0);
date_default_timezone_set("Asia/Bangkok");
$ipaddress = $_SERVER['REMOTE_ADDR']; //Get user IP
$datetime = date("Y-m-d H:i:s");
$status_mb = "2";

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
}elseif (empty($_POST['name_mb'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณากรอก ชื่อจริง-นามสกุลจริง";
}else{
	$message = $class->register($_POST['phone_mb'],$_POST['phone_true'],$_POST['password_mb'],$_POST['bank_mb'],$_POST['bankacc_mb'],$_POST['name_mb'],$status_mb,$ipaddress,$datetime,$_POST['aff']);
}

echo json_encode($message);

if ($message['status'] == "success") {
	
$timeregister = date("Y/m/d H:i:s");

$load_setting = $class->load_db_setting();
$sMessage = "สมาชิกใหม่ \nเบอร์: ".$_POST['phone_mb']."\nชื่อ: ".$_POST['name_mb']."\nแนะนํา: ".$_POST['aff']."\n".$timeregister;
$token = $load_setting->lineregister;
$run_class = $class->notify_line($sMessage,$token);

}
?>
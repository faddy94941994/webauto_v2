<?php 
if (empty($_POST['username'])) {
	$message['status'] = "error_username";
}elseif (empty($_POST['amount'])) {
	$message['status'] = "error_amount";
}else{

	$status = $Load_Master->Master_Withdraw($_POST['username'],$_POST['amount']);
	if ($status == "success"){
		$message['status'] = "success";
	}else{
		$message['status'] = "error";
	}
}
echo json_encode($message);

if ($message['status'] == "success") {
	
$load_profile_user = $class_admin->profile_user($_POST['username']);
$sMessage = "ตัดเครดิตโดยแอดมิน \nจำนวนเงิน ".$_POST['amount']." บาท\nยูสเซอร์ ".$load_profile_user->username_mb ." \nเบอร์โทรศัพท์ ".$load_profile_user->phone_mb ." \nชื่อ ".$load_profile_user->name_mb ." \nผู้ทำรายการ ".$_SESSION["name_ad"];
$token = $Get_Setting->linewithdraw;
$run_class = $class_admin->notify_line($sMessage,$token);

}
?>
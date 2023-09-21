<?php
if (empty($_POST['amount_wd'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณากรอก จำนวนเงินที่จะถอน";
}else{
	$message = $class->withdraw_wd($_POST['amount_wd']);
}
echo json_encode($message);

if ($message['status'] == "success") {

$sMessage = "แจ้งถอนเงิน \nจำนวนเงิน ".$_POST['amount_wd']." บาท\nเบอร์ ". $Get_Profile->phone_mb ." \nเลขบัญชี ".$Get_Profile->bankacc_mb ." \nธนาคาร ".$Get_Profile->bank_mb ." \nชื่อ ".$Get_Profile->name_mb;
$token = $Get_Setting->linewithdraw;
$run_class = $class->notify_line($sMessage,$token);

}
?>
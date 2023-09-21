<?php

$amount_wd = $_POST["amount_wd"];
$phone_mb = $_POST["phone_mb"];

$sql = "SELECT * FROM member WHERE phone_mb = '$phone_mb'";
$result = $class_admin->load_date_sql($sql);
$row = mysqli_fetch_array($result);
extract($row);


$check = "SELECT username_wd FROM withdraw WHERE confirm_wd = 'รอดำเนินการ' AND id_wd = '$id_mb' ";
$result1 = $class_admin->load_date_sql($check);
$num = mysqli_num_rows($result1);
if($num > 0){
	$message['status'] = "error";
	$message['info'] = "ท่านมีรายการถอนอยู่ 1 รายการ";
}else{
	
	
	$message['status'] = "success";
	$message['info'] = "แจ้งถอนสำเร็จ";
		 
	$sql9 = "INSERT INTO withdraw (id_wd, username_wd, phone_wd, bank_wd, bankacc_wd, name_wd, confirm_wd, pin_wd, amount_wd)
			 VALUES('$id_mb', '$username_mb', '$phone_mb', '$bank_mb', '$bankacc_mb','$name_mb', 'รอดำเนินการ', 'unknown6134', '$amount_wd')";		 
	$result = $class_admin->run_insert_sql($sql9);
	
	$load_setting = $class_admin->load_db_setting();
	$sMessage = "แอดมินแจ้งถอนเงิน \nจำนวนเงิน ".$amount_wd." บาท\nเบอร์ ".$phone_mb." \nเลขบัญชี ".$bankacc_mb." \nธนาคาร ".$bank_mb;
	$token = $load_setting->linewithdraw;
	$run_class = $class_admin->notify_line($sMessage,$token);
	
	
}






echo json_encode($message);
?>
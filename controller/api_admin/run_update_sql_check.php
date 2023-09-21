<?php
error_reporting(0);
$POST_Array = $_POST;
$sql = "UPDATE " . $POST_Array['TABLE_NAME'] . " SET ";
foreach($POST_Array as $key=>$value) {
	if($key == "TABLE_NAME"){
		
	}else if ($key == "in_bankout_wd") {
		
	}else if ($key == "WHERE_NAME") {
		
	}else if ($key == "WHERE_VALUE") {
		
	}else{
		$sql .= $key . " = " . "'" . $value . "' " . ", "; 
	}
}

$sql = trim($sql, ' ');
$sql = trim($sql, ',');
$sql .= "WHERE " . $POST_Array['WHERE_NAME'] . " = '" . $POST_Array['WHERE_VALUE'] . "'";
$update = $class_admin->run_update_sql($sql);
if($POST_Array['in_bankout_wd'] == 'คืนเครดิต'){
	 
	$phone_mb = $POST_Array['phone_wd'];
	$load_member = $class_admin->load_date_sql("SELECT * FROM member WHERE phone_mb = '$phone_mb'");
	$rowmember = mysqli_fetch_array($load_member);
	
	$UsernameAgent = $LoadConfig->user_agent . $rowmember['username_mb'];
	$status = $Load_Master->Master_Deposit($UsernameAgent,$POST_Array['amount_wd']);

	if ($status == "success"){
		$message['status'] = "success";
		$message['info'] = "สำเร็จ";
	}else{
		$message['status'] = "error";
		$message['info'] = "ผิดพลาด";
	}
	
	
}else{
	$message['status'] = "success";
	$message['info'] = "สำเร็จ";
}

echo json_encode($message); 
?> 
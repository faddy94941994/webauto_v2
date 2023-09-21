<?php
date_default_timezone_set("Asia/Bangkok");
$Load_Master = $class_admin->Return_Master();
$status = $Load_Master->Master_Agent();
if($status == "error"){
	$message['info'] = 'API ผิดพลาด';
}else{
	$credit_agent = $status;
	$sql_update_credit = "UPDATE credit SET credit_ufa = '$credit_agent' WHERE id = '1'";
    $query_update_credit = $class_admin->run_update_sql($sql_update_credit);
	
	$message['info'] = $credit_agent;
}

$message['DateGet'] = date("Y-m-d H:i:s");
echo json_encode($message);
?>
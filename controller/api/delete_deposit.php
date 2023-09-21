<?php
if (empty($_POST['id'])) {
	$message['status'] = "error";
	$message['info'] = "ผิดพลาด";
}else{
	
	$id = $_POST['id'];
	$result = $class->Query_Mysqli("UPDATE deposit SET confirm_dp = 'ยกเลิก' WHERE id = '$id'");
	
	if($result === true){
		$message['status'] = "success";
		$message['info'] = "สำเร็จ";
	}else{
		$message['status'] = "error";
		$message['info'] = "ผิดพลาด";
	}
	
}
echo json_encode($message);

?>
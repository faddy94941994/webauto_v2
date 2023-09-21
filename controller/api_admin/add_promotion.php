<?php
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
	exit();
}else{
if(isset($_SESSION['id_ad'])){
	
$filenamecheck = $_FILES['fileupload_pro']['name'];
$ext = pathinfo($filenamecheck, PATHINFO_EXTENSION);
if ($ext !== 'png' && $ext !== 'jpg') {
	$message['status'] = "error";
	$message['info'] = "เพิ่มรูป ไม่สำเร็จ";
}else{
	$New_date = array_merge($_POST, $_FILES);
	$message = $class_admin->api_promotion($New_date);
}
echo json_encode($message);
}
}
?>
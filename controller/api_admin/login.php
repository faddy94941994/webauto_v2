<?php 
if (empty($_POST['username_ad'])) {
	$message['status'] = "error";
	$message['info'] = "";
}elseif (empty($_POST['password_ad'])) {
	$message['status'] = "error";
	$message['info'] = "";
}else{
	$message = $class_admin->login($_POST['username_ad'],$_POST['password_ad']);
}
echo json_encode($message);
?>
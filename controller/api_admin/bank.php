<?php
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
	exit();
}else{
if(isset($_SESSION['id_ad'])){
$message = $class_admin->api_bank($_POST);
echo json_encode($message);
}
}
?>
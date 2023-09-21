<?php
if (empty($_POST['NameGame'])) {
	
}
if (empty($_POST['CodeGame'])) {
	$_POST['CodeGame'] = "";
}
$message = $Load_Master->PlayGame($UsernameAgent,$_POST['NameGame'],$_POST['CodeGame']);
echo json_encode($message);
?>
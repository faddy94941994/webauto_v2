<?php
if (empty($_POST['promotion_dp'])) {
	$message['status'] = "error";
	$message['info'] = "กรุณาเลือก โปรโมชั่น";
}else{
	$message = $class->deposit_dp($_POST['promotion_dp']);
}
echo json_encode($message);
?>
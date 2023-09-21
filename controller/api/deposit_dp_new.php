<?php
$get_check_pro = $class->check_pro();
$show_pro1 = $class->show_pro1();
$show_pro2 = $class->show_pro2();
$checknamepro = $_POST['DateNamePro'];

$status['checkstatus'] = "";

if ($get_check_pro > 0) {
	foreach ($show_pro1 as  $row) {
		if ($row["name_pro"] == $checknamepro){
			$status['checkstatus'] = "success";
		}
	}
}else{
	foreach ($show_pro2 as  $row) {
		if ($row["name_pro"] == $checknamepro){
			$status['checkstatus'] = "success";
		}
	}
}

if($status['checkstatus'] == "success"){
	$message = $class->deposit_dp($checknamepro);
}else{
	$message['status'] = "error";
	$message['info'] = "เงื่อนไข ไม่ตรงกับ โปรโมชั่น";
}


echo json_encode($message);
?>
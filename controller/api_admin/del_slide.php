<?php
    if(unlink($_POST['name'])) {
        $message['status'] = "success";
		$message['info'] = "เพิ่มข้อมูลเรียบร้อย";
    } else {
        $message['status'] = "error";
		$message['info'] = "เพิ่มข้อมูล ไม่สำเร็จ";
    }
echo json_encode($message);	
?>
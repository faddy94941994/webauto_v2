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
		$filenamecheck = $_FILES['fileupload_pro']['name'];
		$type = strrchr($filenamecheck,".");
		$date = date("Ymd");
		$numrand = (mt_rand());
		$newname = $date.$numrand.$type;
		$imagetype = $_FILES['fileupload_pro']['type'];
		$imageerror = $_FILES['fileupload_pro']['error'];
		$imagetemp = $_FILES['fileupload_pro']['tmp_name'];
		$imagePath = "assets/img/slide/";
		if(is_uploaded_file($imagetemp)) {
			if(move_uploaded_file($imagetemp, $imagePath . $newname)) {
				$message['status'] = "success";
				$message['info'] = "เพิ่มข้อมูลเรียบร้อย";
			}
			else {
				$message['status'] = "error";
				$message['info'] = "เพิ่มข้อมูล ไม่สำเร็จ";
			}
		} else {
			$message['status'] = "error";
			$message['info'] = "เพิ่มข้อมูล ไม่สำเร็จ";
		}
	}
echo json_encode($message);
}
}
?>
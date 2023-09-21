<?php
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
	exit();
}else{
if(isset($_SESSION['id_ad'])){

if(isset($_FILES['fileupload']['name'])){
	
	$files = glob('assets/img/popup/*');
	foreach($files as $file){
	  if(is_file($file)) {
		unlink($file);
	  }
	}
	
	$filenamecheck = $_FILES['fileupload']['name'];
	$ext = pathinfo($filenamecheck, PATHINFO_EXTENSION);
	if ($ext !== 'png' && $ext !== 'jpg') {
		$message['status'] = "error";
		$message['info'] = "เพิ่มรูป ไม่สำเร็จ";
	}else{
		
		$ran = (rand(10000,99999));
		$filenamecheck = $_FILES["fileupload"]["name"];
		$extension = end(explode(".", $filenamecheck));
		$newfilename = $ran.".".$extension;
		$location = "assets/img/popup/".$newfilename;
		$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
		$imageFileType = strtolower($imageFileType);
		$moveResult = move_uploaded_file($_FILES['fileupload']['tmp_name'],$location);
		if ($moveResult == true) {
			$message['status'] = "success";
			$message['info'] = "เพิ่มรูปเรียบร้อย";
		}
		
	}
	
}

echo json_encode($message);

}
}
?>
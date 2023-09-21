<?php
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	exit();
} else {
	if (isset($_SESSION['id_ad'])) {

		if (isset($_FILES['fileupload']['name'])) {

			$files = glob('assets/img/slip/*');
			foreach ($files as $file) {
				if (is_file($file)) {
					unlink($file);
				}
			}

			$filenamecheck = $_FILES['fileupload']['name'];
			$ext = pathinfo($filenamecheck, PATHINFO_EXTENSION);
			if ($ext !== 'png' && $ext !== 'jpg') {
				$message['status'] = "error";
				$message['info'] = "เพิ่มรูป ไม่สำเร็จ";
			} else {

				$ran = (rand(10000, 99999));
				$filenamecheck = $_FILES["fileupload"]["name"];
				$extension = end(explode(".", $filenamecheck));
				$newfilename = $ran . "." . $extension;
				$location = "assets/img/slip/" . $newfilename;
				$imageFileType = pathinfo($location, PATHINFO_EXTENSION);
				$imageFileType = strtolower($imageFileType);
				$moveResult = move_uploaded_file($_FILES['fileupload']['tmp_name'], $location);
				if ($moveResult == true) {
					// echo ($location);
					$Load_Class_KBank = $class_admin->return_class_KBank();
					$file = $location;
					$data_encode = $Load_Class_KBank->QR($file);
					// $data_encode =  json_decode($data_encode);
					//   $balance = json_decode($data_encode);
					$code_dp = $data_encode['rawQrBarcode'] ;
					$TransactionDate = $data_encode['verifySlipInfo']['transDate'] ;
					$deposit = $data_encode['verifySlipInfo']['transAmount'] ;
					$fromAccount1 = $data_encode['verifySlipInfo']['fromAccountNo'] ;
					$fromAccountName1 = $data_encode['verifySlipInfo']['fromBankName'] ;
					$fromName = $data_encode['verifySlipInfo']['fromAccountNameTh'];
					$check = $data_encode['freeText'];
						
				if ($check = 'สำเร็จ') {
					$Ftype = 'รับโอนเงิน';	
					// if ($fromAccountName3=='ธ.ทหารไทยธนชาต') {
					// 	$fromAccountName='ธ.ทหารไทยธนชาติ';
					print_r($data_encode) ;

					// $message1['actionCode'] = $QRR['actionCode'];
					// $message1['info'] = "เพิ่มรูปเรียบร้อย";
					// $data_array = json_decode($QRR);

					// print_r($data['response']);

				$sql = "INSERT INTO reportkbank(code, TransactionDate, amount, fromacc, frombank, type, toacc, tobank, toname, fromname) VALUES ('$code_dp', '$TransactionDate', '$deposit',  '$fromAccount1',  'ธ.$fromAccountName1',  '$Ftype',  '$toacc',  '$toBankName',  '$toname',  '$fromName')";
				$result_query_sqlcheck1 = $class_admin->run_insert_sql($sql);
		
				}}
				
	}				

echo json_encode($message);
}	}	}		

?>
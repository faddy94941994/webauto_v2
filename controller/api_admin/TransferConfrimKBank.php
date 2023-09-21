<?php
	  error_reporting(0);
	  $sMessage = $_POST['sMessage'];
	  $InternalSessionId = $_POST['InternalSessionId'];
	  
	  $Load_Class_KBank = $class_admin->return_class_KBank();
	  $data2 = json_encode($Load_Class_KBank->transferConfrim($InternalSessionId));
	  $qrcode2 = json_decode($data2);
	  $qrcode = $qrcode2->rawQr;
	  
	  if ($qrcode != '') {
		  
		$message['status'] = "success";
		$message['info'] = "โอนเงินสำเร็จ";
		
		$load_setting = $class_admin->load_db_setting();
		$token = $load_setting->linewithdraw;
		$run_class = $class_admin->notify_line($sMessage,$token);
		
	  }else{
		  
		$message['status'] = "error";
		$message['info'] = "โอนเงินผิดพลาด";
		
	  }
	echo json_encode($message);
?>
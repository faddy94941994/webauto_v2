<?php
error_reporting(0);
function code($value){
  $value=trim($value);
  if ($value=="ธ.ไทยพาณิชย์") {
    return '010';
  }
  if ($value=="ธ.กรุงเทพ") {
    return '003';
  }
  if ($value=="ธ.กสิกรไทย") {
    return '001';
  }
  if ($value=="ธ.กรุงไทย") {
    return '004';
  }
  if ($value=="ธ.ทหารไทยธนชาติ") {
    return '007';
  }
  if ($value=="ธ.กรุงศรีอยุธยา") {
    return '017';
  }
  if ($value=="ธ.ออมสิน") {
    return '022';
  }
  if ($value=="ธ.ก.ส.") {
    return '026';
  }
  if ($value=="ธ.ซีไอเอ็มบี") {
    return '018';
  }
  if ($value=="ธ.เกียรตินาคินภัทร") {
    return '023';
  }
  if ($value=="ธ.ทิสโก้") {
    return '029';
  }
  if ($value=="ธ.ยูโอบี") {
    return '016';
  }
  if ($value=="ธ.อิสลาม") {
    return '028';
  }
  if ($value=="ธ.ไอซีบีซี") {
    return '030';
  }
}

$accountTo = $_POST['accountTo'];
$namebank = $_POST['accountToBankCode'];
$accountToBankCode = code($_POST['accountToBankCode']);
$amount = $_POST['amount']; 
$key_input = $_POST['key_input'];

if ( $key_input == '555555' ) {

	$Load_Class_KBank = $class_admin->return_class_KBank();

	$data = json_encode($Load_Class_KBank->transferVerify($accountToBankCode, $accountTo, $amount));
	$wd = json_decode($data);
	
	$code_wd5 = $wd->kbankInternalSessionId;
	$code_wd = $wd->error;
	$Name_Account = $wd->toAccountName;
	
	if ($code_wd == 'NF-CIGW21, เลขที่บัญชีปลายทางไม่ถูกต้อง กรุณาตรวจสอบและทำรายการใหม่อีกครั้ง') {
		$message['status'] = "error";
		$message['info'] = "เลขที่บัญชีปลายทางไม่ถูกต้อง";
	}elseif ($code_wd == 'ERR3055, ระบบไม่อนุญาตให้เครื่องโทรศัพท์ที่ผ่านการดัดแปลงเข้าใช้งานเพื่อความปลอดภัยในการทำธุรกรรม (281)') {
		$message['status'] = "error";
		$message['info'] = "ไม่อนุญาต โทรศัพท์ที่ผ่านการดัดแปลง";
	}else{
		
		$sMessage = "โอนเงินออก KBank \nจำนวนเงิน ".$amount." บาท \nเข้า ".$namebank." \nเลขบัญชี ".$accountTo." \nชื่อ ". $Name_Account ." \nผู้ทำรายการ ".$_SESSION["name_ad"];
		
		$message['InternalSessionId'] = $code_wd5;
		$message['Name_Account'] = $Name_Account;
		$message['sMessage'] = $sMessage;
		$message['amount'] = $amount;
		$message['status'] = "success";
	  
	}

}else{
	
  $message['status'] = "error";
  $message['info'] = "รหัสโอนเงินไม่ถูกต้อง";
  
}

echo json_encode($message);
?>
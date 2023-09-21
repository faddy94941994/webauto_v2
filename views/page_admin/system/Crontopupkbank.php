<?php
error_reporting(0);
date_default_timezone_set("Asia/Bangkok");

$status_transfer = $Get_Setting->status_auto;
$max_autowd = $Get_Setting->max_autowd;
$status_auto2 = $Get_Setting->status_auto2;


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

if ($status_auto2 == 'เปิด') {
	
	if ($status_transfer != 'เปิด') {
		//echo 'ถอนออโต้ปิดอยู่';
		$message['info'] = "ถอนออโต้ปิดอยู่";
		$message['status'] = "error";
	}else{
		
		
		
		$message['status'] = "success";
		$sql = 'SELECT * FROM withdraw WHERE confirm_wd = "รอดำเนินการ" AND bank_wd != "ทรูวอเล็ต" ORDER BY id ASC limit 1';
		$rowresult = $class_admin->load_date_sql($sql);
		$Num_Rows_Withdraw = mysqli_num_rows($rowresult);
		if($Num_Rows_Withdraw > 0){
			//echo "มีรายการถอน" . '<br>';
			$message['info'] = "มีรายการถอน";
			$Rows_Withdraw = mysqli_fetch_assoc($rowresult);
			$Phone_Withdraw = $Rows_Withdraw['phone_wd'];
			//echo $phone. '<br>';
			$today_pro = date('Y-m-d');
			$sql2 = "SELECT * FROM deposit WHERE phone_dp = '$Phone_Withdraw' AND date_dp LIKE '%$today_pro%' AND promotion_dp!='ไม่รับโบนัส' AND confirm_dp='อนุมัติ'";
			$query2 = $class_admin->load_date_sql($sql2);
			$Num_Rows_Check = mysqli_num_rows($query2);
			if ($Num_Rows_Check > 0) {
				//echo 'ลูกค้ารับโปรก่อนหน้านี้';
				$message['info'] = "ลูกค้ารับโปรก่อนหน้านี้";
			}else{
				
				$new_withdraw = 'SELECT * FROM withdraw WHERE confirm_wd="รอดำเนินการ" AND bank_wd!="ทรูวอเล็ต" AND lastpro="ไม่รับโบนัส" AND pin_wd="unknown6134" ORDER BY id ASC limit 1'; //ถ้าไม่ต้องการเช็คคนที่รับโปร ก่อนถอน เอา lastpro="ไม่รับโบนัส" ออก
				$new_result = $class_admin->load_date_sql($new_withdraw);
				
				foreach ($new_result as  $row_withdraw) {
	
					$accountTo = $row_withdraw['bankacc_wd'];
					$accountToBankCode = code($row_withdraw['bank_wd']);
					$NameBank = $row_withdraw['bank_wd'];
					$amount = $row_withdraw["amount_wd"];
					$key_input = $row_withdraw["pin_wd"];
					$phone_wd = $row_withdraw["phone_wd"];
					
					
					if($amount > $max_autowd){
						
						$message['info'] = "ยอดถอนเกินที่ตั้งไว้";
						
					}else{
						
					
					if ( $key_input == 'unknown6134' ) {
						
						$Load_Class_KBank = $class_admin->return_class_KBank();

						$DataTransfer = json_encode($Load_Class_KBank->transferVerify($accountToBankCode, $accountTo, $amount));
						$DataVerify = json_decode($DataTransfer);
						
						$Data_InternalSessionId = $DataVerify->kbankInternalSessionId;
						$Name_Account = $DataVerify->toAccountName;
						$Data_Error = $DataVerify->error;
						if ($Data_Error == 'NF-CIGW21, เลขที่บัญชีปลายทางไม่ถูกต้อง กรุณาตรวจสอบและทำรายการใหม่อีกครั้ง') {
							//echo "เลขที่บัญชีปลายทางไม่ถูกต้อง";
							$message['info'] = "เลขที่บัญชีปลายทางไม่ถูกต้อง";
						}elseif ($Data_Error == 'ERR3055, ระบบไม่อนุญาตให้เครื่องโทรศัพท์ที่ผ่านการดัดแปลงเข้าใช้งานเพื่อความปลอดภัยในการทำธุรกรรม (281)') {
							//echo "ไม่อนุญาต โทรศัพท์ที่ผ่านการดัดแปลง";
							$message['info'] = "ไม่อนุญาตโทรศัพท์ที่ผ่านการดัดแปลง";
						}else{

							if (empty($Data_InternalSessionId)) {
								//echo "มีบางอย่าผิดพลาด";
								$message['info'] = "มีบางอย่าผิดพลาด";
							}else{
								
								$DataConfrim = json_encode($Load_Class_KBank->transferConfrim($Data_InternalSessionId));
								$DataQRcode = json_decode($DataConfrim);
								$qrcode = $DataQRcode->rawQr;
								
								if ($qrcode != '') {
									
								$sql_bank = 'SELECT * FROM bank WHERE name_bank = "ธนาคารกสิกรไทย" AND status_bank = "เปิด"';
								$result_bank = $class_admin->load_date_sql($sql_bank);
								$row_bank = mysqli_fetch_assoc($result_bank);	
								$bankout_no = $row_bank['bankacc_bank'];

								
									$sql_success = "UPDATE withdraw SET  
            					confirm_wd = 'อนุมัติ' , 
            					pin_wd = '',
            					bankout_wd = 'ธนาคารกสิกรไทย $bankout_no' 
            					WHERE phone_wd = '$phone_wd' AND confirm_wd = 'รอดำเนินการ'";
								if ($class_admin->load_date_sql($sql_success) === TRUE) {
									//echo "โอนเงินสำเร็จ";
									$message['info'] = "โอนเงินสำเร็จ";
									$sMessage = "BOT-KBank อนุมัติถอน \nจำนวนเงิน " . $amount . " บาท\nเบอร์ " . $phone_wd. "\n". "เข้า " . $NameBank. "\n". "ชื่อ " . $Name_Account;
									$token = $Get_Setting->linewithdraw;
									$run_class = $class_admin->notify_line($sMessage,$token);
									
								}else{
									//echo 'error load_date_sql';
									$message['info'] = "Error_Query_Mysqli";
								}
									
									
									
								}else{
									//echo "โอนเงินผิดพลาด";
									$message['info'] = "โอนเงินผิดพลาด";
								}
							}
						}
					}else{
					  //echo "รหัสโอนเงินไม่ถูกต้อง";
					  $message['info'] = "รหัสโอนเงินไม่ถูกต้อง";
					}
					
				}
				}
			}
		}else{
			//echo "ไม่มีรายการถอน";
			$message['info'] = "ไม่มีรายการถอน";
		}
	}
}else{
	$message['info'] = "ระบบออโต้ปิด";
	$message['status'] = "error";
	//echo "ระบบออโต้ปิด";
}

$message['DateGet'] = date("Y-m-d H:i:s");
echo json_encode($message);
?>

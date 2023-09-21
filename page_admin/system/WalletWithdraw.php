<?php
$load_setting = $class_admin->load_db_setting();


$sql = "SELECT * FROM bank WHERE name_bank='ทรูวอเล็ต'";
$result = $class_admin->load_date_sql($sql);
$row = mysqli_fetch_assoc($result);
$number = $row['bankacc_bank'];
$password = $row['password_true'];
$pin = $row['pin_bank'];
//echo $number;
// $no_true = $row['no_true'];
// $otp_true = $row['otp_true'];
$sql_scb = "SELECT * FROM setting";
$result_scb = $class_admin->load_date_sql($sql_scb);
$row_scb = mysqli_fetch_assoc($result_scb);
$limit_scb=$row_scb['max_autowd'];
//echo 	$limit_scb;	
$status_transfer=$row_scb['status_auto'];
$status_auto2 = $row_scb['status_auto2'];

if ($status_auto2=='ปิด') {
echo 'ระบบถอนปิด';
}else{

$sql = 'SELECT * FROM withdraw WHERE confirm_wd = "รอดำเนินการ" AND bank_wd = "ทรูวอเล็ต" ORDER by id asc LIMIT 1';
	$result = $class_admin->load_date_sql($sql);
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
		
	
	
	$phone2 = $row['phone_wd'];
	//echo $phone;

	$today_pro = date('Y-m-d');
	$sql2 = "SELECT * FROM deposit WHERE phone_dp = $phone2 AND date_dp LIKE '%$today_pro%' AND promotion_dp!='ไม่รับโบนัส' AND confirm_dp='อนุมัติ'";
	$query2 = $class_admin->load_date_sql($sql2);
	$check2 = mysqli_num_rows($query2);
	//echo $check2;

	if ($check2 > 0) {
		echo 'ลูกค้ารับโปรก่อนหน้านี้';
		
	}else{

$sql2 = "SELECT * FROM withdraw WHERE confirm_wd = 'รอดำเนินการ' AND bank_wd = 'ทรูวอเล็ต' AND lastpro="ไม่รับโบนัส" ORDER BY id ASC limit 1 ";//ถ้าไม่ต้องการเช็คคนที่รับโปร ก่อนถอน เอา lastpro="ไม่รับโบนัส" ออก


$result2 = $class_admin->load_date_sql($sql2);
$check = mysqli_num_rows($result2);
$row2 = mysqli_fetch_assoc($result2);
$phone = $row2['phone_wd'];
$bank_number = $row2['bankacc_wd'];
$amount = $row2['amount_wd'];
$bankout = $row['name_bank'].$row['bankacc_bank'];
//echo $check; 


	
if($status_transfer!='เปิด'){
	echo 'ฟังชั่นปิดอยู่';

}


$tw = $class_admin->return_class_TrueWallet($number,$password,$pin);



print_r($tw->GetBalance());

//echo $check;
if ($check!=0) {
	if ($amount<=$limit_scb){

echo $bank_number;
echo '<br>';
echo $amount;

	$withdraw2 = $tw->P2p($bank_number, $amount);
	$status = $withdraw2["data"]["transfer_status"];
echo $status;
	if ($status=='PROCESSING') {
	
	
	$sql="UPDATE `withdraw` SET `confirm_wd`='อนุมัติ' , `bankout_wd`='".$bankout."' WHERE phone_wd='".$phone."'";
		if ($class_admin->load_date_sql($sql) === TRUE) {
			

			$sMessage = "BOT true อนุมัติถอน \nจำนวนเงิน ".$amount." บาท\nเบอร์ ".$phone;
			$token = $load_setting->linewithdraw;
			$run_class = $class_admin->notify_line($sMessage,$token);

}
}




}
}
}
}else{ echo 'ระบบออโต้ปิด';}

?>

<?php


date_default_timezone_set("Asia/Bangkok");

//วันนี้
if (isset($_POST['todayshow'])) {
	$T_fromTime = date("Y-m-d");
	$T_toTime = date("Y-m-d");
}

//เมื่อวาน
if (isset($_POST['yesterday'])) {
	$T_fromTime = date('Y-m-d' , strtotime(" - 1 day"));
	$T_toTime = $T_toTime = date("Y-m-d");
}
//เดือนนี้
if (isset($_POST['thismonth'])) {
	$thismonth = date("Y-m-01");
	$thismonth2 = date("Y-m-t");
	
	$T_fromTime = $thismonth ;
	$T_toTime = $thismonth2;
}
//เดือนที่แล้ว
if (isset($_POST['lastmonth'])) {
	$lastmonth = date("Y-m-01", strtotime("-1 month"));
	$lastmonth2 = date("Y-m-t", strtotime(date($lastmonth)));
	
	$T_fromTime = $lastmonth;
	$T_toTime = $lastmonth2;
}

	$T_fromTime = $_POST['FromDay'];
	$T_toTime = $_POST['ToDay'];

	$fromTime = date('Y-m-d' , strtotime(" - 1 day"));
	$toTime = date('Y-m-d');

		$checkdp = "SELECT * FROM deposit ORDER BY id DESC LIMIT 500";
		$query12 = $class_admin->load_date_sql($checkdp);
		foreach ($query12 as $v) {
	$memdp = $v['phone_dp'];
	$datedp = $v['date_dp'];
	$datedpa = mb_substr($datedp, 0, 10);
	// echo ($memdp).($datedpa);
	
	// echo '<br>';

	}
	$checkmb = "SELECT * FROM member WHERE phone_mb='$memdp'";
	$query99 = $class_admin->load_date_sql($checkmb);
	$check22 = mysqli_num_rows($query99);
	// echo ($check22);						
	// echo '<br>';
$sql_count_member = $class_admin->load_date_sql("SELECT * FROM member WHERE phone_mb !='' AND $fromTime LIKE $toTime");
$count_member = mysqli_num_rows($sql_count_member);

$sql_count_withdraw = $class_admin->load_date_sql("SELECT * FROM withdraw WHERE confirm_wd = 'รอดำเนินการ'");
$count_withdraw = mysqli_num_rows($sql_count_withdraw);

$sql_count_deposit = $class_admin->load_date_sql("SELECT * FROM deposit WHERE confirm_dp = 'รอดำเนินการ'");
$count_deposit = mysqli_num_rows($sql_count_deposit);

$sql_count_withdrawaff = $class_admin->load_date_sql("SELECT * FROM withdrawaff WHERE confirm_aff = 'รอดำเนินการ'");
$count_withdrawaff = mysqli_num_rows($sql_count_withdrawaff);


$sqlkbank = "SELECT * FROM status_bank WHERE name_bank = 'Kbank'";
$date_kbank  = $class_admin->load_db_date($sqlkbank);
$message['status_bank_kbank'] = $date_kbank->status_bank;

$sqlscb = "SELECT * FROM status_bank WHERE name_bank = 'SCB'";
$date_scb  = $class_admin->load_db_date($sqlscb);
$message['status_bank_scb'] = $date_scb->status_bank;

$sqltruewallet = "SELECT * FROM status_bank WHERE name_bank = 'TrueWallet'";
$date_truewallet  = $class_admin->load_db_date($sqltruewallet);


//สมาชิกทั้งหมด
$sql_select_allmembers = $class_admin->Query_Mysqli("SELECT * FROM member WHERE phone_mb !='' ORDER BY username_mb");
$result_allmembers = mysqli_num_rows($sql_select_allmembers);
//////////////////////////////////////////////////////////////////////
//สมาชิกทั้งหมด
$sql_select_stockmembers = $class_admin->Query_Mysqli("SELECT * FROM member WHERE phone_mb =''");
$result_stockmembers = mysqli_num_rows($sql_select_stockmembers);
//////////////////////////////////////////////////////////////////////
//ยอดฝากวันนี้
$sql_SUM_Amount_dp = $class_admin->Query_Mysqli("SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp='อนุมัติ' AND bankin_dp != 'ไม่ถูกต้อง' AND date_dp BETWEEN '$fromTime' AND '$toTime'");
while($row = mysqli_fetch_array($sql_SUM_Amount_dp)) {
	$result_SUM_Amount_DP = $row['SUM(amount_dp)']; 
}
if (is_null($result_SUM_Amount_DP)) {
$result_SUM_Amount_DP = "0";
}
//////////////////////////////////////////////////////////////////////
//ยอดถอนวันนี้
$sql_SUM_Amount_wd = $class_admin->Query_Mysqli("SELECT SUM(amount_wd) FROM withdraw WHERE confirm_wd='อนุมัติ' AND date_wd BETWEEN '$fromTime' AND '$toTime'");
while($row = mysqli_fetch_array($sql_SUM_Amount_wd)) {
	$result_SUM_Amount_WD = $row['SUM(amount_wd)']; 
}
if (is_null($result_SUM_Amount_WD)) {
$result_SUM_Amount_WD = "0";
}
//////////////////////////////////////////////////////////////////////
//รับยอดเสียรวมวันนี้
$sql_cashback = $class_admin->Query_Mysqli("SELECT SUM(amount_cashback) FROM withdraw WHERE confirm_wd='อนุมัติ' AND date_wd BETWEEN '$fromTime' AND '$toTime'");
while($row = mysqli_fetch_array($sql_cashback)) {
	$result_cashback = $row['SUM(amount_cashback)']; 
}
if (is_null($result_cashback)) {
$result_cashback = "0";
}
//////////////////////////////////////////////////////////////////////
//ยอดถอนแนะนำเพื่อน
$sql_amount_aff = $class_admin->Query_Mysqli("SELECT SUM(amount_aff) FROM withdrawaff WHERE confirm_aff='อนุมัติ' AND date_aff BETWEEN '$fromTime' AND '$toTime'");
while($row = mysqli_fetch_array($sql_amount_aff)) {
	$result_amount_aff = $row['SUM(amount_aff)']; 
}
if (is_null($result_amount_aff)) {
$result_amount_aff = "0";
}
//////////////////////////////////////////////////////////////////////
//รายการฝากวันนี้
$sql_dpbill = $class_admin->Query_Mysqli("SELECT * FROM deposit WHERE date_dp BETWEEN '$fromTime' AND '$toTime' AND promotion_dp NOT LIKE '%ฟรี%' AND confirm_dp='อนุมัติ'");
$result_dpbill = mysqli_num_rows($sql_dpbill);
//////////////////////////////////////////////////////////////////////
//รายการถอนวันนี้
$sql_wdbill = $class_admin->Query_Mysqli("SELECT * FROM withdraw WHERE date_wd BETWEEN '$fromTime' AND '$toTime' AND bankout_wd!='คืนยอดเสีย' AND confirm_wd='อนุมัติ'");
$result_wdbill = mysqli_num_rows($sql_wdbill);
//////////////////////////////////////////////////////////////////////
//แลกพ้อยด์วงล้อวันนี้
$sql_change_spinner = $class_admin->Query_Mysqli("SELECT SUM(amount) FROM change_spinner WHERE date_change BETWEEN '$fromTime' AND '$toTime'");
while($row = mysqli_fetch_array($sql_change_spinner)) {
	$result_change_spinner = $row['SUM(amount)']; 
}
if (is_null($result_change_spinner)) {
$result_change_spinner = "0";
}

//แลกพ้อยด์รับเพชร
$sql_change_diamond = $class_admin->Query_Mysqli("SELECT SUM(amount) FROM change_diamond WHERE date_change BETWEEN '$fromTime' AND '$toTime'");
while($row = mysqli_fetch_array($sql_change_diamond)) {
	$result_change_diamond = $row['SUM(amount)']; 
}
if (is_null($result_change_diamond)) {
$result_change_diamond = "0";
}
//////////////////////////////////////////////////////////////////////
//ยอดโบนัสวันนี้
$sql_bonus = $class_admin->Query_Mysqli("SELECT SUM(bonus_dp) FROM deposit WHERE confirm_dp='อนุมัติ' AND date_dp BETWEEN '$fromTime' AND '$toTime'");
while($row = mysqli_fetch_array($sql_bonus)) {
	$result_bonus = $row['SUM(bonus_dp)']; 
}
if (is_null($result_bonus)) {
$result_bonus = "0";
}
$sql_bonus = $class_admin->Query_Mysqli("SELECT SUM(bonus_dp) FROM deposit WHERE confirm_dp='อนุมัติ' AND date_dp BETWEEN '$fromTime' AND '$toTime'");
while($row = mysqli_fetch_array($sql_bonus)) {
	$result_bonus = $row['SUM(bonus_dp)']; 
}
if (is_null($result_bonus)) {
$result_bonus = "0";
}
//////////////////////////////////////////////////////////////////////
//จำนวนสมาชิกฝากเงินวันนี้
$sql_members_deposit_today = $class_admin->Query_Mysqli("SELECT DISTINCT id_dp FROM deposit WHERE promotion_dp!= 'กิจกรรม' AND amount_dp!= 'กิจกรรม' AND confirm_dp = 'อนุมัติ' AND bankin_dp!='ไม่ถูกต้อง' AND date_dp BETWEEN '$fromTime' AND '$toTime'");
$result_members_deposit_today = mysqli_num_rows($sql_members_deposit_today);
//////////////////////////////////////////////////////////////////////
//เครดิตคงเหลือ
$sql_credit_balance = $class_admin->Query_Mysqli("SELECT * FROM credit ORDER BY id DESC LIMIT 1");
$result_credit_balance = mysqli_fetch_assoc($sql_credit_balance);
$result_credit_ufa = $result_credit_balance['credit_ufa'];
$result_credit_scb = $result_credit_balance['credit_scb'];
$result_credit_true = $result_credit_balance['credit_true'];
$result_credit_kbank = $result_credit_balance['credit_kbank'];
if(empty($result_credit_ufa)) {
	$result_credit_ufa = "0";
}
if(empty($result_credit_scb)) {
	$result_credit_scb = "0";
}
if(empty($result_credit_true)) {
	$result_credit_true = "0";
}
if(empty($result_credit_kbank)) {
	$result_credit_kbank = "0";
}
//////////////////////////////////////////////////////////////////////
$load_credit_sms = $class_admin->load_credit_sms();
 

if (isset($_POST['search'])) {

$message['fromTime'] = date('Y-m-d', strtotime($T_fromTime));
$message['toTime'] = date('Y-m-d', strtotime($T_toTime));
$message['allmembers'] = $result_allmembers;
$message['stockmembers'] = $result_stockmembers;
$message['TotalAmount'] = (int)($result_SUM_Amount_DP-$result_SUM_Amount_WD);
$message['SUM_Amount_DP_ToDay'] = (int)$result_SUM_Amount_DP;
$message['SUM_Amount_WD_ToDay'] = (int)$result_SUM_Amount_WD;
$message['bill_DP'] = $result_dpbill;
$message['bill_WD'] = $result_wdbill;
$message['amount_cashback'] = (int)$result_cashback;
$message['amount_aff'] = (int)$result_amount_aff;
$message['change_point'] = (int)($result_change_spinner + $result_change_diamond);
$message['members_deposit_today'] = (int)$result_members_deposit_today;
$message['credit_ufa'] = $result_credit_ufa;
$message['credit_scb'] = $result_credit_scb;
$message['credit_true'] = $result_credit_true;
$message['credit_kbank'] = $result_credit_kbank;
$message['credit_sms'] = $load_credit_sms;
$message['bonustoday'] = (int)$result_bonus;
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	
}else{

$message['fromTime'] = date('Y-m-d', strtotime($fromTime));
$message['toTime'] = date('Y-m-d', strtotime($toTime));
$message['allmembers'] = $result_allmembers;
$message['count_member'] = $count_member;
$message['stockmembers'] = $result_stockmembers;
$message['newmemdep'] = $check22;
$message['TotalAmount'] = (int)($result_SUM_Amount_DP-$result_SUM_Amount_WD) ;
$message['SUM_Amount_DP_ToDay'] = (int)$result_SUM_Amount_DP;
$message['SUM_Amount_WD_ToDay'] = (int)$result_SUM_Amount_WD;
$message['bill_DP'] = $result_dpbill;
$message['bill_WD'] = $result_wdbill;
$message['amount_cashback'] = (int)$result_cashback;
$message['count_withdrawaff'] = $count_withdrawaff;
$message['amount_aff'] = (int)$result_amount_aff;
$message['change_point'] = (int)($result_change_spinner + $result_change_diamond);
$message['members_deposit_today'] = (int)$result_members_deposit_today;
$message['credit_ufa'] = $result_credit_ufa;
$message['credit_scb'] = $result_credit_scb;
$message['credit_true'] = $result_credit_true;
$message['credit_kbank'] = $result_credit_kbank;
$message['credit_sms'] = $load_credit_sms;
$message['bonustoday'] = (int)$result_bonus;
}
// $message['status_bank_truewallet'] = $date_truewallet->status_bank;


// $message['count_member'] = $count_member;
// 
// $message['count_withdraw'] = $count_withdraw;
// $message['count_withdrawaff'] = $count_withdrawaff;
echo ($_POST['yesterday']);


// echo json_encode($message);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
// W8MdQLxE0y44kQmp289vmhrp02Fe3405HTsHd9ZyMrv
// $sToken = "0LaYL1uOxZ3iaVgyDE9IWgwenPfJ0VuJiX6GpfqPHgW";
$sToken = "0LaYL1uOxZ3iaVgyDE9IWgwenPfJ0VuJiX6GpfqPHgW";
$sMessage = $sMessage = "\nตั้งแต่: ".$message['fromTime']."\nถึง: ".$message['toTime']." "."\n "."\nสมาชิกทั้งหมด: ".$message['allmembers']." คน"."\nสมาชิกใหม่: ".$message['count_member']." คน"."\nรายการฝาก: ".$message['bill_DP']." รายการ"."\nรายการถอน: ".$message['bill_WD']." รายการ"."\nยอดฝากวันนี้ ".$message['SUM_Amount_DP_ToDay']." บาท"."\nยอดถอนวันนี้ ".$message['SUM_Amount_WD_ToDay']." บาท"."\nโบนัส ".$message['bonustoday']." บาท"."\nคืนยอดเสีย ".$message['amount_cashback']." บาท"."\nยอดถอนแนะนำเพื่อน ".$message['amount_aff']." บาท"."\nสมาชิกฝากทั้งหมด ".$message['members_deposit_today']."\nสมาชิกใหม่ฝากทั้งหมด ".$message['newmemdep']." คน"."\nรายได้หักลบ ".$message['TotalAmount']." บาท"."\n";


$chOne = curl_init(); 
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt( $chOne, CURLOPT_POST, 1); 
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec( $chOne ); 

//Result error 
if(curl_error($chOne)) 
{ 
	// echo 'error:' . curl_error($chOne); 
} 
else { 
	$result_ = json_decode($result, true); 
	// echo "status : ".$result_['status']; echo "message : ". $result_['message'];
} 
curl_close( $chOne );   



echo json_encode($message);

?>



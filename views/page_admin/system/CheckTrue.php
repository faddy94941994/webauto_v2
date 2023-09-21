<?php
date_default_timezone_set("Asia/Bangkok");
 
$sql = "SELECT * FROM bank WHERE name_bank='ทรูวอเล็ต'";
$result = $class_admin->load_date_sql($sql);
$row = mysqli_fetch_assoc($result);
$number = $row['bankacc_bank'];
$password = $row['password_true'];
// $no_true = $row['no_true'];
// $otp_true = $row['otp_true'];

//echo $number;

$pin = $row['pin_bank'];

$tw = $class_admin->return_class_TrueWallet($number,$password,$pin);

//$tw = new iWallet($number,$password,$pin);


$test = $tw->GetBalance();
$credit_true = $test["data"]["current_balance"];
$message['BalanceTrueWallet'] = $credit_true;
//print_r($tw->GetBalance());
//echo '<br>';

$sql8 = "UPDATE credit SET  
            credit_true='$credit_true'
            WHERE id=1";
$result9 = $class_admin->load_date_sql($sql8);

$transactions = $tw->GetTransaction();
//print_r($transactions);

$sql2 = "SELECT * FROM setting ORDER BY id DESC LIMIT 1";
$result2 = $class_admin->load_date_sql($sql2);
$row2 = mysqli_fetch_assoc($result2);
$agent_user = $LoadConfig->user_agent;
$status_auto2 = $row2['status_auto2'];

if ($status_auto2=='เปิด') {

if($transactions == null){ ///ถ้าไม่มีรายการ ให้ปิดการใช้งาน
 $sqlKbank = "UPDATE status_bank SET status_bank = 'ปิด' WHERE name_bank = 'TrueWallet'";
 $resultKbank = $class_admin->load_date_sql($sqlKbank);
 $message['info'] = "ทำงานปกติ";
 $message['status'] = "success";
}else{
 //echo 'ดึงรายการสำเร็จ';
 $message['info'] = "ดึงรายการสำเร็จ";
 $message['status'] = "success";
 $sqlKbank = "UPDATE status_bank SET status_bank = 'เปิด' WHERE name_bank = 'TrueWallet'";
    $resultKbank = $class_admin->load_date_sql($sqlKbank);
}
	
	
foreach ($transactions["data"]["activities"] as $v) {

$date_time = $v["date_time"];
$name = $v["sub_title"];
//echo $date_time;
$vowels = array("+", ",");
$balance = str_replace($vowels, "", $v["amount"]);
//echo $balance;
// echo '<br>';
$vowels2 = array("-", "+");
$phone_in = str_replace($vowels2, "", $v["transaction_reference_id"]);
$deposit = $balance;
//echo $phone_in;
if ($balance > 0) {
  $status='รับโอนเงิน';
}else{
  $status='โอนเงิน';
}


$checkdptrue = "SELECT id FROM reporttrue WHERE datetrue='$date_time' AND amount='$balance'";
$query122 = $class_admin->load_date_sql($checkdptrue);
$check122 = mysqli_num_rows($query122);

  if ($check122==0 AND $phone_in!='') {

  	$sql20 = "INSERT INTO reporttrue(status, amount, trueacc, name, datetrue)
             
            VALUES('$status', '$balance',  '$phone_in',  '$name',  '$date_time')";
    $result = $class_admin->load_date_sql($sql20);

  }





}

}else{
	$message['info'] = "ระบบปิด";
    $message['status'] = "error";
}

$message['DateGet'] = date("Y/m/d H:i:s");
echo json_encode($message);
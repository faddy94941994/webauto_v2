<?php
date_default_timezone_set("Asia/Bangkok");

$Load_Class_KBank = $class_admin->return_class_KBank();
$data_encode = json_encode($Load_Class_KBank->getBalance(),JSON_UNESCAPED_UNICODE);
$balance = json_decode($data_encode);
$balanceKbank = $balance->outstandingBalance;
//echo $balanceKbank;

if ($balanceKbank!='') {
  //echo 'ดึงรายการ Kbank สำเร็จ';
  $message['status'] = "success";
  $message['info'] = "ปกติ";
  $message['BalanceKbank'] = $balanceKbank;
  $sqlKbank = "UPDATE status_bank SET status_bank = 'เปิด' WHERE name_bank = 'Kbank'";
  $resultKbank = $class_admin->load_date_sql($sqlKbank);
  
  $sql_update_credit = "UPDATE credit SET credit_kbank = '$balanceKbank' WHERE id = '1'";
  $query_update_credit = $class_admin->load_date_sql($sql_update_credit);
  
  $data_Transactions = json_encode($Load_Class_KBank->getTransactions());
$Transactions_list = json_decode($data_Transactions);

foreach ($Transactions_list->activityList as $v) {
	
$code_dp = $v->rqUid;

$deposit = $v->amount;
$transactionDescription2 = $v->transactionDescription;
$transactionDescription = $v->transactionType;
$TransactionDate = $v->transactionUxDate;
$kplus = $v->channel;
$toacc = $v->toAccountNo;


$doublecheck = $class_admin->load_date_sql("SELECT id FROM reportkbank WHERE TransactionDate = '$TransactionDate'");
$check_doublecheck = mysqli_num_rows($doublecheck);


if($check_doublecheck  == 0){

$json = json_encode($Load_Class_KBank->getTransactionDetail($code_dp));
$balance2 = json_decode($json);
$fromAccount4 = $balance2->fromAccountNo;
$fromAccountName3 = $balance2->fromBankName;
$toBankName = $balance2->toBankName;
$toname = $balance2->toAccountName;
$fromname = $balance2->fromAccountName;	


if ($fromAccountName3=='ธ.ทหารไทยธนชาต') {
  $fromAccountName='ธ.ทหารไทยธนชาติ';
}else{
  $fromAccountName=$fromAccountName3;
}

if ($kplus=='K PLUS') {
  $fromAccount1 = $v->fromAccountNo;
}elseif($kplus=='LINE BK') {
  $fromAccount1 = $v->fromAccountNo;
}elseif($kplus=='K PLUS SME') {
  $fromAccount1 = $v->fromAccountNo;
}elseif($kplus=='K-Cash Connect Plus') {
  $fromAccount1 = $v->fromAccountNo;
}else{
  $fromAccount1 = $balance2->fromAccountNo;
}


if ($kplus=='K PLUS') {
  $fromName = $v->fromAccountName;
}elseif($kplus=='LINE BK') {
  $fromName = $v->fromAccountName;
}elseif($kplus=='K PLUS SME') {
  $fromName = $v->fromAccountName;
}else{
  $fromName = $balance2->fromAccountName;
}


$vowels2 = array("-", "x");
$fromAccount = str_replace($vowels2, "", $fromAccount1);

$sql_checkdp = "SELECT id FROM reportkbank WHERE code='$code_dp'";
$setting_bank = $class_admin->load_date_sql($sql_checkdp);
$check12 = mysqli_num_rows($setting_bank);


if ($fromAccount!='') {

  if ($check12==0) {

		$sqlcheck1 = "INSERT INTO reportkbank(code, TransactionDate, amount, fromacc, frombank, type, toacc, tobank, toname, fromname) VALUES ('$code_dp', '$TransactionDate', '$deposit',  '$fromAccount1',  '$fromAccountName',  '$transactionDescription2',  '$toacc',  '$toBankName',  '$toname',  '$fromName')";
		$result_query_sqlcheck1 = $class_admin->run_insert_sql($sqlcheck1);
	
  }

}elseif ($transactionDescription2=='โอนเงิน') {
	
    if ($check12==0) {

		$sqlcheck2 = "INSERT INTO reportkbank(code, TransactionDate, amount, fromacc, frombank, type, toacc, tobank, toname, fromname) VALUES ('$code_dp', '$TransactionDate', '$deposit',  '$fromAccount1',  '$fromAccountName',  '$transactionDescription2',  '$toacc',  '$toBankName',  '$toname',  '$fromName')";
		$result_query_sqlcheck2 = $class_admin->run_insert_sql($sqlcheck2);
	}
	
}


}else{
	
	$message['status'] = "success";
	$message['info'] = "ปกติ";
	
}


	
}
  
}else{
  //echo 'เช็ค Kbank ด่วน!!!';
  $message['status'] = "error";
  $message['info'] = "ผิดปกติ";
  $sqlKbank = "UPDATE status_bank SET status_bank = 'ปิด' WHERE name_bank = 'Kbank'";
  $resultKbank = $class_admin->load_date_sql($sqlKbank);
}

$message['DateGet'] = date("Y/m/d H:i:s");
echo json_encode($message);
?>
<?php
$message = $Load_Master->Master_Balance_Refresh($UsernameAgent);


$phone = $_SESSION["phone_mb"];

$Load_Deposit_All = $class->Query_Mysqli("SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp = 'อนุมัติ' AND phone_dp = '$phone' AND amount_dp != 'กิจกรรม'");
$Row_Deposit_All = mysqli_fetch_assoc($Load_Deposit_All);
$Deposit_All = $Row_Deposit_All['SUM(amount_dp)'];

$Load_Withdraw_All = $class->Query_Mysqli("SELECT SUM(amount_wd) FROM withdraw WHERE confirm_wd = 'อนุมัติ' AND phone_wd = '$phone'");
$Row_Withdraw_All = mysqli_fetch_assoc($Load_Withdraw_All);
$Withdraw_All = $Row_Withdraw_All['SUM(amount_wd)'];


$Load_CountDeposit = $class->Query_Mysqli("SELECT * FROM deposit WHERE confirm_dp = 'อนุมัติ' AND phone_dp = '$phone'");
$CountDeposit = mysqli_num_rows($Load_CountDeposit);


$message['Deposit_All'] = $Deposit_All;
$message['CountDeposit'] = $CountDeposit;

$_SESSION["Withdraw_All"] = number_format($Withdraw_All,2);

if ($message['Balance'] == "0"){
	$message['Balance'] = "0.00";
}else{
	$message['Balance'] = number_format($message['Balance'],2);
}


//$message['status'] = "success";
//$message['Balance'] = "160";
//$message['UsernameAgent'] = $UsernameAgent;
echo json_encode($message);
?>
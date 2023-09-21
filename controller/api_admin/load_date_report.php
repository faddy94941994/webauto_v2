<?php
date_default_timezone_set("Asia/Bangkok");
$nowdate = date("Y-m-d");


if (isset($_POST['today'])) {
	$_POST['FromDay'] = $nowdate;
	$_POST['ToDay'] = $nowdate;
}
if (isset($_POST['yesterday'])) {
	$_POST['FromDay'] = date('Y-m-d',strtotime('-1 day'));
	$_POST['ToDay'] = date('Y-m-d',strtotime('-1 day'));
}
if (isset($_POST['thismonth'])) {
	$_POST['FromDay'] = date('Y-m-d', strtotime(date("Y-m")));
	$_POST['ToDay'] = $nowdate;
}

if (empty($_POST['FromDay'])) {
	$_POST['FromDay'] = '';
}
if (empty($_POST['ToDay'])) {
	$_POST['ToDay'] = $nowdate;
}
$FromDay = date('Y-m-d', strtotime($_POST['FromDay']));
$ToDay = date('Y-m-d', strtotime($_POST['ToDay'] . " + 1 day"));

$message['ShowFromDay'] = $FromDay;
$message['ShowToDay'] = date('Y-m-d', strtotime($_POST['ToDay']));
$sql_select_deposit = "SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp='อนุมัติ' AND bankin_dp!='ไม่ถูกต้อง' AND date_dp BETWEEN '$FromDay' AND '$ToDay' ";
$sql_select_withdraw = "SELECT SUM(amount_wd) FROM withdraw WHERE confirm_wd='อนุมัติ' AND bankout_wd!='เงินคืน' AND date_wd BETWEEN '$FromDay' AND '$ToDay' ";
$load_date_select_deposit = $class_admin->load_date_sql($sql_select_deposit);
$load_date_select_withdraw = $class_admin->load_date_sql($sql_select_withdraw);
while($row = mysqli_fetch_array($load_date_select_deposit)) {
	$totalnumber_deposit = $row['SUM(amount_dp)'] * 1 / 1; 
}
while($row = mysqli_fetch_array($load_date_select_withdraw)) {
	$totalnumber_withdraw = $row['SUM(amount_wd)'] * 1 / 1; 
}
$message['totalnumber_deposit'] = $totalnumber_deposit;
$message['totalnumber_withdraw'] = $totalnumber_withdraw;
$message['total'] = $totalnumber_deposit-$totalnumber_withdraw;
echo json_encode($message);
?>
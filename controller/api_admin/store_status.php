<?php
error_reporting(0);
date_default_timezone_set("Asia/Bangkok");
$DayNow = date("Y-m-d");


$sql_count_member = $class_admin->load_date_sql("SELECT * FROM member WHERE phone_mb !='' AND date_mb LIKE '%$DayNow%'");
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
$message['status_bank_truewallet'] = $date_truewallet->status_bank;


$message['count_member'] = $count_member;
$message['count_deposit'] = $count_deposit;
$message['count_withdraw'] = $count_withdraw;
$message['count_withdrawaff'] = $count_withdrawaff;
echo json_encode($message);
?>
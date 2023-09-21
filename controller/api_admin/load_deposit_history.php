<?php
date_default_timezone_set("Asia/Bangkok");
$nowdate = date("Y-m-d");
$message['ShowFromDay'] = '';
$message['ShowToDay'] = '';
$load_db_setting = $class_admin->load_db_setting();


if (isset($_POST['show100'])) {
	$sql_select = "SELECT * FROM deposit WHERE confirm_dp != 'รอดำเนินการ' AND confirm_dp != 'ยกเลิก' AND amount_dp != 'กิจกรรม' ORDER BY id DESC LIMIT 100";
}elseif (isset($_POST['show500'])) {
	$sql_select = "SELECT * FROM deposit WHERE confirm_dp != 'รอดำเนินการ' AND confirm_dp != 'ยกเลิก' AND amount_dp != 'กิจกรรม' ORDER BY id DESC LIMIT 500";
}elseif (isset($_POST['show1000'])) {
	$sql_select = "SELECT * FROM deposit WHERE confirm_dp != 'รอดำเนินการ' AND confirm_dp != 'ยกเลิก' AND amount_dp != 'กิจกรรม' ORDER BY id DESC LIMIT 1000";
}elseif (isset($_POST['showAll'])) {
	$sql_select = "SELECT * FROM deposit WHERE confirm_dp != 'รอดำเนินการ' AND confirm_dp != 'ยกเลิก' AND amount_dp != 'กิจกรรม' ORDER BY id DESC";
}elseif (isset($_POST['search'])) {
	$phone = $_POST['phone_dp'];
	$vowels = array($load_db_setting->agent);
	$str = $phone;
	$test = str_replace($vowels, "", $str);
	$sql_select = "SELECT * FROM deposit WHERE confirm_dp != 'รอดำเนินการ' AND amount_dp != 'กิจกรรม' AND phone_dp LIKE '%$phone%' OR username_dp LIKE '%$test%' OR name_dp LIKE '%$phone%' OR bankacc_dp LIKE '%$phone%' ORDER BY id DESC";	
}else{
	
if (empty($_POST['FromDay'])) {
	$_POST['FromDay'] = $nowdate;
}
if (empty($_POST['ToDay'])) {
	$_POST['ToDay'] = $nowdate;
}

$FromDay = date('Y-m-d', strtotime($_POST['FromDay']));
$ToDay = date('Y-m-d', strtotime($_POST['ToDay'] . " + 1 day"));

$sql_select = "SELECT * FROM deposit WHERE confirm_dp != 'รอดำเนินการ' AND amount_dp != 'กิจกรรม' AND date_dp BETWEEN '$FromDay' AND '$ToDay' ORDER BY id DESC";	

$message['ShowFromDay'] = $FromDay;
$message['ShowToDay'] = date('Y-m-d', strtotime($_POST['ToDay']));
	
}


$load_date_select = $class_admin->load_date_sql($sql_select);
while($row = mysqli_fetch_array($load_date_select)) {
	$result[] = $row; 
}


if (empty($result)) {
	$result = null;
}

$message['result'] = $result;
echo json_encode($message);
?>
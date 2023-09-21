<?php
date_default_timezone_set("Asia/Bangkok");
$nowdate = date("Y-m-d");
$message['ShowFromDay'] = '';
$message['ShowToDay'] = '';
$load_db_setting = $class_admin->load_db_setting();


if (isset($_POST['show100'])) {
	$sql_select = "SELECT * FROM change_diamond ORDER BY id DESC LIMIT 100";
}elseif (isset($_POST['show500'])) {
	$sql_select = "SELECT * FROM change_diamond ORDER BY id DESC LIMIT 500";
}elseif (isset($_POST['show1000'])) {
	$sql_select = "SELECT * FROM change_diamond ORDER BY id DESC LIMIT 1000";
}elseif (isset($_POST['showAll'])) {
	$sql_select = "SELECT * FROM change_diamond ORDER BY id DESC";
}elseif (isset($_POST['search'])) {
	$phone = $_POST['phone_dp'];
	$vowels = array($load_db_setting->agent);
	$str = $phone;
	$test = str_replace($vowels, "", $str);
	$sql_select = "SELECT * FROM change_diamond WHERE phone LIKE '%$phone%' OR name LIKE '%$test%' OR username LIKE '%$test%' ORDER BY id DESC";	
}else{
	
if (empty($_POST['FromDay'])) {
	$_POST['FromDay'] = $nowdate;
}
if (empty($_POST['ToDay'])) {
	$_POST['ToDay'] = $nowdate;
}

$FromDay = date('Y-m-d', strtotime($_POST['FromDay']));
$ToDay = date('Y-m-d', strtotime($_POST['ToDay'] . " + 1 day"));

$sql_select = "SELECT * FROM change_diamond WHERE date_change BETWEEN '$FromDay' AND '$ToDay' ORDER BY id DESC";	

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
<?php
date_default_timezone_set("Asia/Bangkok");

if (isset($_POST['show100'])) {
	$sql_select = "SELECT * FROM reportkbank ORDER BY id DESC limit 100";
}elseif (isset($_POST['show500'])) {
	$sql_select = "SELECT * FROM reportkbank ORDER BY id DESC limit 500";
}elseif (isset($_POST['show1000'])) {
	$sql_select = "SELECT * FROM reportkbank ORDER BY id DESC limit 1000";
}elseif (isset($_POST['showAll'])) {
	$sql_select = "SELECT * FROM reportkbank ORDER BY id DESC";
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
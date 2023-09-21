<?php

if (isset($_POST['search'])) {
	
	$phone = $_POST['input_search'];
	$vowels = array($LoadConfig->user_agent);
	$str = $phone;
	$test = str_replace($vowels, "", $str);
	
	$sql_select = "SELECT * FROM member WHERE phone_mb LIKE '%$phone%' OR username_mb LIKE '%$test%' OR name_mb LIKE '%$phone%' OR bankacc_mb LIKE '%$phone%'";
	
}elseif (isset($_POST['show100'])) {
	$sql_select = "SELECT * FROM member WHERE phone_mb != '' ORDER BY id_mb DESC LIMIT 100";
}elseif (isset($_POST['show500'])) {
	$sql_select = "SELECT * FROM member WHERE phone_mb != '' ORDER BY id_mb DESC LIMIT 500";
}elseif (isset($_POST['show1000'])) {
	$sql_select = "SELECT * FROM member WHERE phone_mb != '' ORDER BY id_mb DESC LIMIT 1000";
}elseif (isset($_POST['showAll'])) {
	$sql_select = "SELECT * FROM member WHERE phone_mb != '' ORDER BY id_mb DESC";
}

$load_date = $class_admin->Query_Mysqli($sql_select);
while($row = mysqli_fetch_array($load_date,MYSQLI_ASSOC)) {
	
	$username_mb = $row["username_mb"];
	$row["Balance"] = $Load_Master->Master_Balance($LoadConfig->user_agent . $username_mb);
	$row["agent"] = $LoadConfig->user_agent;
	$result[] = $row;
	
}

$message['result'] = $result;
echo json_encode($message);

?>
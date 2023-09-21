<?php
$POST_Array = $_POST;
$sql = "UPDATE " . $POST_Array['TABLE_NAME'] . " SET ";
foreach($POST_Array as $key=>$value) {
	if($key == "TABLE_NAME"){
		
	}else if ($key == "WHERE_NAME") {
		
	}else if ($key == "WHERE_VALUE") {
		
	}else{
		$sql .= $key . " = " . "'" . $value . "' " . ", "; 
	}
}
$sql = trim($sql, ' ');
$sql = trim($sql, ',');
$sql .= "WHERE " . $POST_Array['WHERE_NAME'] . " = '" . $POST_Array['WHERE_VALUE'] . "'";
$message = $class_admin->run_update_sql($sql);
echo json_encode($message);
?>
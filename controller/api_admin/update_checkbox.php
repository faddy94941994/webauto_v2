<?php

$TABLE_NAME = $_POST['TABLE_NAME'];
$SET_NAME = $_POST['SET_NAME'];
$SET_VALUE = $_POST['SET_VALUE'];
$WHERE_NAME = $_POST['WHERE_NAME'];
$WHERE_VALUE = $_POST['WHERE_VALUE'];


$sql = "UPDATE " . $TABLE_NAME . " SET " . $SET_NAME . " = '" . $SET_VALUE . "' WHERE " . $WHERE_NAME . " = " . $WHERE_VALUE . "";
$message = $class_admin->run_update_sql($sql);
$message['result'] = $sql;
echo json_encode($message);
?>
<?php
$FROM_NAME = $_REQUEST["FROM_NAME"];
$WHERE_NAME = $_REQUEST["WHERE_NAME"];
$WHERE_VALUE = $_REQUEST["WHERE_VALUE"];
$sql = "DELETE FROM " . $FROM_NAME . " WHERE " . $WHERE_NAME . " = " . $WHERE_VALUE . "";
$message = $class_admin->run_delete_sql($sql);
echo json_encode($message);
?>
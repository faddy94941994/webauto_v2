<?php
$sql = $_REQUEST["sql"];
$message = $class_admin->run_insert_sql($sql);
echo json_encode($message);
?>
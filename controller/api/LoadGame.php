<?php
$result_list = $class->LoadGame($_POST['Link']);
echo json_encode($result_list);
?>
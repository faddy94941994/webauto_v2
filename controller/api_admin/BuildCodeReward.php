<?php
$message = $class_admin->build_Code_Reward($_POST['reward'],$_POST['turnover']);
echo json_encode($message);
?>
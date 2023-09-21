<?php
error_reporting(0);
$message = $class->ResendOTP();
echo json_encode($message);
?>
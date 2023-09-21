<?php
session_start();

include 'controller/system/router.class.php';

error_reporting(E_ALL);

$class = new router;

$class->start_router();

?>
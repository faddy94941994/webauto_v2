<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
	exit('is not allowed ?');
}
?>
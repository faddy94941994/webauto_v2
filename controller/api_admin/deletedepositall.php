<?php
$name_ad = $_SESSION["name_ad"];

$checkdp = "SELECT * FROM deposit WHERE confirm_dp = 'รอดำเนินการ' ORDER BY id DESC LIMIT 100";
$querydp = $class_admin->load_date_sql($checkdp);
foreach ($querydp as $v) {
	$id = $v['id'];
	$sql = "UPDATE deposit SET confirm_dp = 'หมดเวลา' , edit_dp = '$name_ad' WHERE id = '$id'";
    $result = $class_admin->load_date_sql($sql);
}
?>
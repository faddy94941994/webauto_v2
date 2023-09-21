<?php
$load_db_setting = $class_admin->load_db_setting();
$code = $_POST['input_search'];

$sqlnum = "SELECT * FROM member WHERE aff = '$code' ORDER BY id_mb DESC";


$load_date_num = $class_admin->load_date_sql($sqlnum);
$numteam = mysqli_num_rows($load_date_num);
while($row = mysqli_fetch_array($load_date_num,MYSQLI_ASSOC)) {
	
	
	$phone_dp = $row["phone_mb"];
	$username_mb = $row["username_mb"];
	
	
	
	$sqlsumdp = "SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp = 'อนุมัติ' AND phone_dp = '$phone_dp' AND promotion_dp NOT LIKE '%เครดิตฟรี%' ";
	$load_date_sumdp = $class_admin->load_date_sql($sqlsumdp);
    while($rowsumdp = mysqli_fetch_array($load_date_sumdp)){
         $sumdp = $rowsumdp['SUM(amount_dp)'] * 1 / 1;
    }
	//$result['sumdp'] = $sumdp;
	
	
	$sqlsumwp = "SELECT SUM(amount_wd) FROM withdraw WHERE confirm_wd = 'อนุมัติ' AND phone_wd = '$phone_dp'";
	$load_date_sumwp = $class_admin->load_date_sql($sqlsumwp);
    while($rowsumwp = mysqli_fetch_array($load_date_sumwp)){
		$sumwd = $rowsumwp['SUM(amount_wd)'] * 1 / 1;
    }
	
	
	//array_push($row,"sumdp",$sumdp);
	//array_push($row,"sumwd",$sumwd);
	//array_push($row,"summary",$sumdp-$sumwd);
	
	$row["sumdp"] = $sumdp;
	$row["sumwd"] = $sumwd;
	$row["summary"] = $sumdp-$sumwd;
	
	$result[] = $row;
	
	
	//$result['sumwd'] = $sumwd;
	//$result['summary'] = $sumdp-$sumwd;
	
	//$result[] = $row;
}

$sqlamount = "SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp = 'อนุมัติ' AND aff_dp = '$code' AND aff_dp != '' AND promotion_dp NOT LIKE '%เครดิตฟรี%' ";
$load_date_amount = $class_admin->load_date_sql($sqlamount);
$rowamount = mysqli_fetch_array($load_date_amount);
$sumamount = $rowamount['SUM(amount_dp)'] * $load_db_setting->affcashback / 100;




$message['numteam'] = $numteam;
$message['amount'] = $sumamount;
$message['result'] = $result;
echo json_encode($message);
?>
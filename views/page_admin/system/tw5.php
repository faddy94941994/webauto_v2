<?php

$sql = "SELECT * FROM bank WHERE name_bank='ทรูวอเล็ต' ORDER BY id DESC LIMIT 1";
$result = $class_admin->load_date_sql($sql);

$row = mysqli_fetch_assoc($result);
$number = $row['bankacc_bank'];
$password = $row['password_true'];
$no_true = $row['no_true'];
$otp_true = $row['otp_true'];

$pin = $row['pin_bank'];
$tw = $class_admin->return_class_TrueWallet($number,$password,$pin);
		
		
	//$row = $tw->RequestLoginOTP();
		$row = $tw->SubmitLoginOTP($otp_true, $no_true);
		
		
	//$row = $tw->GetProfile();
//$row = $tw->GetBalance();



//$row = $tw->GetTransaction();

		
		print_r($row);
?>
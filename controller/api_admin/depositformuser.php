<?php

$promotion_dp = $_POST["promotion_dp"];
$amount_dp = $_POST["amount_dp"];
$phone_mb = $_POST["phone_mb"];
$name_bank = $_POST["name_bank"];

$dpspin = $Get_Setting->dp_creditspin;
$name_ad = $_SESSION["name_ad"];

$sql = "SELECT * FROM member WHERE phone_mb = '$phone_mb'";
$result = $class_admin->load_date_sql($sql);
$row = mysqli_fetch_array($result);
extract($row);


$check = "SELECT username_dp FROM deposit WHERE confirm_dp = 'รอดำเนินการ' AND id_dp = $id_mb AND username_dp = '$username_mb'";
$result1 = $class_admin->load_date_sql($check);
$num = mysqli_num_rows($result1);
if($num > 0){
	$message['status'] = "error";
	$message['info'] = "ท่านมีรายการฝากอยู่ 1 รายการ";
}else{


$check2 = "SELECT username_dp FROM deposit , promotion WHERE username_dp = '$username_mb' AND time_pro = 'รับได้ครั้งเดียว' AND promotion_dp = '$promotion_dp' AND confirm_dp = 'อนุมัติ' AND name_pro = '$promotion_dp'";
$result2 = $class_admin->load_date_sql($check2);
$num2 = mysqli_num_rows($result2);
if($num2 > 0){
	$message['status'] = "error";
	$message['info'] = "ท่านรับโปรโมชั่นนี้ไปแล้ว ! กรุณาเลือกโปรโมชั่นอื่น";
}else{



$date3 = date("Y-m-d");
$check3 = "SELECT username_dp FROM deposit , promotion WHERE username_dp = '$username_mb' AND promotion_dp = '$promotion_dp' AND time_pro = 'รับได้วันละ 1 ครั้ง' AND confirm_dp = 'อนุมัติ' AND name_pro = '$promotion_dp' AND date_dp LIKE '%$date3%'";
$result3 = $class_admin->load_date_sql($check3);
$num3 = mysqli_num_rows($result3);
if($num3 > 0){
	$message['status'] = "error";
	$message['info'] = "วันนี้ท่านรับโปรโมชั่นรายวันนี้ไปแล้ว ! กรุณาเลือกโปรโมชั่นอื่น";
}else{
	
	$usernameufa = $LoadConfig->user_agent . $username_mb;
	
	if($promotion_dp == 'ไม่รับโบนัส'){
		$BalanceBefore = $Load_Master->Master_Balance($usernameufa);
		$status = $Load_Master->Master_Deposit($usernameufa, $amount_dp);
        if ($status == "success") {
			
			$message['status'] = "success";
			$message['info'] = "ทำรายการฝาก สำเร็จ";
			
			if ($amount_dp >= $dpspin) {
				$UPDATESPIN = $class_admin->load_date_sql("UPDATE member SET creditspin = creditspin + 1 WHERE username_mb = '$username_mb'");
			}
			
			$sql9 = "INSERT INTO deposit (id_dp, username_dp, phone_dp, bank_dp, bankacc_dp, name_dp, confirm_dp, amount_dp, promotion_dp, aff_dp, note_dp, bonus_dp, turnover, fromTrue, add_dp, creditbefore, bankin_dp)
             VALUES('$id_mb', '$username_mb', '$phone_mb', '$bank_mb', '$bankacc_mb','$name_mb', 'อนุมัติ', '$amount_dp', '$promotion_dp', '$aff', '', '0', '0', '$phone_true', '$name_ad', '$BalanceBefore', '$name_bank')";
			$result = $class_admin->run_insert_sql($sql9);
		
			$sMessage = "แอดมินฝาก \nจำนวนเงิน " . $amount_dp . " บาท\nเบอร์ " . $phone_mb . "\n". "ชื่อ " . $name_mb . "\n" . "[ไม่รับโบนัส]" ." \nผู้ทำรายการ ".$name_ad;
			$token = $Get_Setting->linedeposit;
			$run_class = $class_admin->notify_line($sMessage,$token);

        }
		
	}elseif($promotion_dp == 'เครดิตฟรี'){
		
		$BalanceBefore = $Load_Master->Master_Balance($usernameufa);
		$status = $Load_Master->Master_Deposit($usernameufa, $amount_dp);
        if ($status == "success") {
			
			$message['status'] = "success";
			$message['info'] = "ทำรายการฝาก สำเร็จ";
			
			$sql9 = "INSERT INTO deposit (id_dp, username_dp, phone_dp, bank_dp, bankacc_dp, name_dp, confirm_dp, amount_dp, promotion_dp, aff_dp, note_dp, bonus_dp, turnover, fromTrue, add_dp, creditbefore, bankin_dp)
             VALUES('$id_mb', '$username_mb', '$phone_mb', '$bank_mb', '$bankacc_mb','$name_mb', 'อนุมัติ', '0', '$promotion_dp', '$aff', '', '$amount_dp', '0', '$phone_true', '$name_ad', '$BalanceBefore', '$name_bank')";
			$result = $class_admin->run_insert_sql($sql9);
		
			$sMessage = "แอดมินฝาก \nจำนวนเงิน " . $amount_dp . " บาท\nเบอร์ " . $phone_mb . "\n". "ชื่อ " . $name_mb . "\n" . "[เครดิตฟรี]" ." \nผู้ทำรายการ ".$name_ad;
			$token = $Get_Setting->linedeposit;
			$run_class = $class_admin->notify_line($sMessage,$token);

        }
		
		
		
	}else{
		
		$sql_promotion="SELECT * FROM promotion WHERE name_pro='$promotion_dp'";
		$result7 = $class_admin->load_date_sql($sql_promotion);
		$row7 = mysqli_fetch_assoc($result7);
		$money = $row7['dp_pro'];
		$namepro= $row7['name_pro'];
		$bonusper_pro = $row7['bonusper_pro'];
		$dp_pro = $row7['dp_pro'];
		$turn = $row7['turn_pro'];
		$max_pro = $row7['max_pro'];
		function extract_intmanual($str){
			preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $str, $regs);
			return (intval($regs[1]));
		}
		$a = $turn;
		$turnover1 = extract_intmanual($a);

		$bonus_pro1 = $row7['bonus_pro'] + ($amount_dp * $bonusper_pro / 100);

		if ($bonus_pro1>$max_pro) {
			$bonus_pro=$max_pro;
		}else{
			$bonus_pro = $row7['bonus_pro'] + ($amount_dp * $bonusper_pro / 100);
		}
					
		if ($bonusper_pro!=0) {
			$turn_pro = ($amount_dp + $bonus_pro) * $turnover1;
		}else{
			$turn_pro = $turnover1;
		} 
					  
		if ($promotion_dp==$namepro and $amount_dp>=$money) {
			$sum = $amount_dp + $bonus_pro;
		}else{
			$sum = $amount_dp;
		}
		
		$BalanceBefore = $Load_Master->Master_Balance($usernameufa);
		$status = $Load_Master->Master_Deposit($usernameufa, $sum);
        if ($status == "success") {
			
			$message['status'] = "success";
			$message['info'] = "ทำรายการฝาก สำเร็จ";
			
			if ($amount_dp >= $dpspin) {
				$UPDATESPIN = $class_admin->load_date_sql("UPDATE member SET creditspin = creditspin + 1 WHERE username_mb = '$username_mb'");
			}
			
			$sql9 = "INSERT INTO deposit (id_dp, username_dp, phone_dp, bank_dp, bankacc_dp, name_dp, confirm_dp, amount_dp, promotion_dp, aff_dp, note_dp, bonus_dp, turnover, fromTrue, add_dp, creditbefore, bankin_dp)
             VALUES('$id_mb', '$username_mb', '$phone_mb', '$bank_mb', '$bankacc_mb','$name_mb', 'อนุมัติ', '$amount_dp', '$promotion_dp', '$aff', '', '$bonus_pro', '$turn_pro', '$phone_true', '$name_ad', '$BalanceBefore', '$name_bank')";
			$result = $class_admin->run_insert_sql($sql9);
		
			$sMessage = "แอดมินฝาก \nจำนวนเงิน " . $amount_dp . " บาท\nเบอร์ " . $phone_mb . "\n". "ชื่อ " . $name_mb  . "\nโปรโมชั่น " . $promotion_dp . " \nผู้ทำรายการ ".$name_ad;
			$token = $Get_Setting->linedeposit;
			$run_class = $class_admin->notify_line($sMessage,$token);

        }
		
	}
}	
}
}

echo json_encode($message);
?>
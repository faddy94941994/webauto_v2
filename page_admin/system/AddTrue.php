
<?php
 //error_reporting(0);
date_default_timezone_set("Asia/Bangkok");
$Load_Master = $class_admin->Return_Master();

$load_setting = $class_admin->load_db_setting();

//echo $credit;
$datedp = date('Y-m-d H:i:s');
$sql_kbank = "SELECT * FROM bank WHERE name_bank='ทรูวอเล็ต' ORDER BY id DESC LIMIT 1";
$result_kbank = $class_admin->load_date_sql($sql_kbank);
$row_kbank = mysqli_fetch_assoc($result_kbank);
$status_kbank=$row_kbank['status_bank'];

if($status_kbank=='ปิด'){
//echo 'ระบบปิด';
	$message['status'] = "error";
    $message['info'] = "ระบบปิด";
}else{
  
$sql = "SELECT * FROM setting ORDER BY id DESC LIMIT 1";
$result = $class_admin->load_date_sql($sql);
$row = mysqli_fetch_assoc($result);
$agent_user = $LoadConfig->user_agent;
$dpspin = $row['dp_creditspin'];
$status_auto2 = $row['status_auto2'];

//echo $agent_user;

if ($status_auto2=='เปิด') {
  
//echo 'ระบบออโต้เปิดทำงานปกติ';
  $message['status'] = "success";
  $message['info'] = "ปกติ";

$checkdp = "SELECT * FROM reporttrue WHERE status='รับโอนเงิน' ORDER BY id DESC LIMIT 100";
$query12 = $class_admin->load_date_sql($checkdp);
foreach ($query12 as $v) {//แตกรายการ kbank

$datetrue = $v['datetrue'];
$deposit = $v['amount'];
$fromAccount = $v['trueacc'];
$fromAccountName = $v['name'];



 $sql_checkdp = "SELECT * FROM deposit WHERE date_check_true='$datetrue' AND amount_dp='$deposit'AND fromAccount='$fromAccount' ";
  $query2 = $class_admin->load_date_sql($sql_checkdp);
  $check2 = mysqli_num_rows($query2);
// echo '<br>';
// echo $check2;
// echo '<br>';
// echo $fromAccount;
// echo '<br>';


  if ($check2==0) {

$search = "SELECT * FROM member WHERE phone_true = '$fromAccount'";
$result = $class_admin->load_date_sql($search);
$check22 = mysqli_num_rows($result);
//echo $check22;

//echo '<br>';
while($rowsearch = mysqli_fetch_array($result)) {
$phone = $rowsearch['phone_mb'];
$name_mb = $rowsearch['name_mb'];
$username1 = $rowsearch['username_mb'];
$id_mb = $rowsearch['id_mb'];
$aff = $rowsearch['aff'];
$creditspin88 = $rowsearch['creditspin']+1;


$bank_mb = $rowsearch['bank_mb'];




  $sql_check3 = "SELECT * FROM deposit WHERE confirm_dp='รอดำเนินการ' AND phone_dp='$phone'";
  $query3 = $class_admin->load_date_sql($sql_check3);

  $check3 = mysqli_num_rows($query3);

  $row_pro3 = mysqli_fetch_assoc($query3);
  $get_pro = $row_pro3['promotion_dp'];
  $name_dp = $row_pro3['name_dp'];
  $phone_dp = $row_pro3['phone_dp'];
//echo $get_pro;
  $username = $row_pro3['username_dp'];

  if ($check3==1) {
    
    $sql_promotion="SELECT * FROM promotion WHERE name_pro='$get_pro'";
    $result7 = $class_admin->load_date_sql($sql_promotion);
    $row7 = mysqli_fetch_assoc($result7);
    $money = $row7['dp_pro'];
    $namepro= $row7['name_pro'];
    $bonusper_pro = $row7['bonusper_pro'];
    $dp_pro = $row7['dp_pro'];
    $turn = $row7['turn_pro'];
    $max_pro = $row7['max_pro'];
    // echo '<br>';
    // echo $username;
    // echo '<br>';
    // echo $max_pro;
function extract_int9($str){
     preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $str, $regs);
     return (intval($regs[1]));
}
$a=$turn;
$turnover1 = extract_int9($a);
//echo $turnover1;


    $bonus_pro1 = $row7['bonus_pro'] + ($deposit * $bonusper_pro / 100);

    if ($bonus_pro1>$max_pro) {
      $bonus_pro=$max_pro;
    }else{
      $bonus_pro = $row7['bonus_pro'] + ($deposit * $bonusper_pro / 100);
    }

//echo $bonus_pro;
 
//echo $bonus_pro;
    if ($bonusper_pro!=0) {
      $turn_pro = ($deposit + $bonus_pro) * $turnover1;
    }else{
      $turn_pro = $turnover1;
    } 
//echo $turn_pro;
  
if ($get_pro==$namepro and $deposit>=$money) {
      $sum = $deposit + $bonus_pro;
    }else{
      $sum = $deposit;
    }

//echo $usernameufa;

    $usernameufa = $agent_user.$username;
        $Balance34 = $Load_Master->Master_Balance($usernameufa);
        //echo $Balance34;




  $status = $Load_Master->Master_Deposit($usernameufa, $sum);
  //echo $status;
    if ($status == 'success' and $get_pro==$namepro and $deposit>=$money) {
       if ($deposit>=$dpspin) {
            
//echo 7777777;
            $sqlspin = "UPDATE member SET  
            creditspin='$creditspin88'
            WHERE username_mb='$username' ORDER BY id_mb DESC LIMIT 1 ";
            $result87 = $class_admin->load_date_sql($sqlspin);
        }
     
  $sql = "UPDATE deposit SET  
            confirm_dp='อนุมัติ' , 
            amount_dp='$deposit' ,
            bonus_dp='$bonus_pro' ,
            bankin_dp = 'ทรูวอเล็ต' ,
            date_check_true='$datetrue' ,
            turnover = '$turn_pro' ,
            add_dp = 'AUTO' ,
            creditbefore = '$Balance34',
            date_dp = '$datedp' ,
            fromAccount = '$fromAccount'
            WHERE username_dp='$username' ORDER BY id DESC LIMIT 1 ";
            $result = $class_admin->load_date_sql($sql);

 
            $sMessage = "ฝากเครดิตออโต้ TRUE\nจำนวนเงิน ".$deposit." บาท\nเบอร์ ".$phone_dp."\nโปรโมชั่น ".$get_pro." \nชื่อ ".$name_dp;
			$token = $load_setting->linedeposit;
			$run_class = $class_admin->notify_line($sMessage,$token);
				
           
  }elseif($status == 'success'){

     if ($deposit>=$dpspin) {
            
//echo 7777777;
            $sqlspin = "UPDATE member SET  
            creditspin='$creditspin88'
            WHERE username_mb='$username' ORDER BY id_mb DESC LIMIT 1 ";
            $result87 = $class_admin->load_date_sql($sqlspin);
        }


      $turn2=$deposit*2;
    $sql = "UPDATE deposit SET  
            confirm_dp ='อนุมัติ' , 
            amount_dp ='$deposit' ,
            bonus_dp = 0 ,
            bankin_dp = 'ทรูวอเล็ต' ,
            date_check_true='$datetrue' ,
            promotion_dp = 'ไม่รับโบนัส' ,
            turnover = 0 ,
            creditbefore = '$Balance34',
            add_dp = 'AUTO' ,
            date_dp = '$datedp' ,
            fromAccount = '$fromAccount'
            WHERE username_dp='$username' ORDER BY id DESC LIMIT 1 ";
            $result = $class_admin->load_date_sql($sql);



            $sMessage = "ฝากเครดิตออโต้ TRUE\nจำนวนเงิน ".$deposit." บาท\nเบอร์ ".$phone_dp."\n"."ไม่รับโบนัส"." \nชื่อ ".$name_dp;
			$token = $load_setting->linedeposit;
			$run_class = $class_admin->notify_line($sMessage,$token);
 
  }




  }//$check3==1
  else{
    $usernameufa = $agent_user.$username1;
// echo $usernameufa;
// echo '<br>';
// echo $deposit;
// echo '<br>';
        $Balance34 = $Load_Master->Master_Balance($usernameufa);
        //echo $Balance34;


    $status = $Load_Master->Master_Deposit($usernameufa, $deposit);
    // echo $status;
    if($status == 'success'){
      if ($deposit>=$dpspin) {
            
//echo 7777777;
            $sqlspin = "UPDATE member SET  
            creditspin='$creditspin88'
            WHERE username_mb='$username1' ORDER BY id_mb DESC LIMIT 1 ";
            $result87 = $class_admin->load_date_sql($sqlspin);
        }

        
      $turn2=$deposit*2;
    $sql = "INSERT INTO deposit (id_dp, username_dp, phone_dp, bank_dp, bankacc_dp, name_dp, confirm_dp, amount_dp, promotion_dp, aff_dp, note_dp, bonus_dp, fromTrue, date_check_true, bankin_dp, fromAccount, turnover, add_dp, creditbefore)
             VALUES('$id_mb', '$username1', '$phone', '$bank_mb', '$bankacc_mb','$name_mb', 'อนุมัติ', '$deposit', 'ไม่รับโบนัส', '$aff', '', '0', '$fromTrue', '$datetrue', 'ทรูวอเล็ต', '$fromAccount', 0, 'AUTO','$Balance34')";

    $result = $class_admin->load_date_sql($sql);



            $sMessage = "ฝากเครดิตออโต้ TRUE\nจำนวนเงิน ".$deposit." บาท\nเบอร์ ".$phone."\n"."ไม่รับโบนัส"." \nชื่อ ".$name_mb;
			$token = $load_setting->linedeposit;
			$run_class = $class_admin->notify_line($sMessage,$token);
			
  }

  }








}

}

}//แตกรายการ kbank

}else{
  //echo 'ระบบออโต้ปิด';
  $message['status'] = "error";
    $message['info'] = "ระบบออโต้ปิด";
  }
}  
  
$message['DateGet'] = date("Y/m/d H:i:s");
echo json_encode($message); 

<?php
date_default_timezone_set("Asia/Bangkok");
$Load_Master = $class_admin->Return_Master();


function extract_int($str){
     preg_match('/[^0-9]*([0-9]+)[^0-9]*/', $str, $regs);
     return (intval($regs[1]));
}
$datedp = date('Y-m-d H:i:s');
$sql_kbank = "SELECT * FROM bank WHERE name_bank='ธนาคารกสิกรไทย' ORDER BY id DESC LIMIT 1";
$result_kbank = $class_admin->load_date_sql($sql_kbank);
$row_kbank = mysqli_fetch_assoc($result_kbank);
$status_kbank = $row_kbank['status_bank'];

if ($status_kbank == 'ปิด') {
  //echo 'ระบบปิด';
  $message['info'] = "ระบบปิด";
  $message['status'] = "error";
}


$sql = "SELECT * FROM setting ORDER BY id DESC LIMIT 1";
$result = $class_admin->load_date_sql($sql);
$row = mysqli_fetch_assoc($result);
$agent_user = $LoadConfig->user_agent;

$key = $row['linedeposit'];
$dpspin = $row['dp_creditspin'];
$status_auto2 = $row['status_auto2'];


if ($status_auto2 == 'เปิด') {

  //echo 'ระบบออโต้เปิดทำงานปกติ';
  $message['info'] = "ปกติ";
  $message['status'] = "success";

  $checkdp = "SELECT * FROM reportkbank ORDER BY id DESC LIMIT 100";
  $query12 = $class_admin->load_date_sql($checkdp);
  foreach ($query12 as $v) { //แตกรายการ kbank

$code_dp = $v['code'];
$deposit = $v['amount'];
$transactionDescription2 = $v['type'];
$fromAccountName = $v['frombank'];
$fromacc2 = $v['fromacc'];
$fromname1 = $v['fromname'];

$vowels3 = array("นาย ", "น.ส. ", "นาง ", "นางสาว ", "นาย", "น.ส.", "นาง", "นางสาว", "ด.ช.", "ด.ช. ", "ด.ญ.", "ด.ญ. ");
$fromname2 = str_replace($vowels3, "", $fromname1);

$fromname = mb_substr($fromname2, 0, -2);

$vowels2 = array("-", "x");
$fromAccount = str_replace($vowels2, "", $fromacc2);


$turn2=$deposit*2;
if ($transactionDescription2=='รับโอนเงิน') {


      $sql_checkdp = "SELECT * FROM deposit WHERE date_check_kbank='$code_dp'";
      $query2 = $class_admin->load_date_sql($sql_checkdp);
      $check2 = mysqli_num_rows($query2);
      // echo '<br>';
      //  echo $check2;
      // echo '<br>';
      //$fromAccount;
      //echo '<br>';


      if ($check2 == 0) {
        $search = "SELECT * FROM member WHERE bankacc_mb LIKE '%_____$fromAccount%' AND bank_mb LIKE '%$fromAccountName%'";
        $result = $class_admin->load_date_sql($search);
        $check2222 = mysqli_num_rows($result);
        if ($check2222==1) {
            $check22=1;
        }else{
            $search = "SELECT * FROM member WHERE bankacc_mb LIKE '%_____$fromAccount%' AND bank_mb LIKE '%$fromAccountName%' AND name_mb LIKE '%$fromname%'";
            $result = $class_admin->load_date_sql($search);
            $check222 = mysqli_num_rows($result);
            if ($check222==1) {
                $check22=1;
            }else{
                $search = "SELECT * FROM member WHERE bankacc_mb LIKE '%_____$fromAccount%' AND bank_mb LIKE '%$fromAccountName%' AND name_eng LIKE '%$fromname%'";
                $result = $class_admin->load_date_sql($search);
                $check22 = $result->num_rows;
            }
        }

        if ($check22==1) {
        while ($rowsearch = mysqli_fetch_array($result)) {
          $phone = $rowsearch['phone_mb'];
          $name_mb = $rowsearch['name_mb'];
          $username1 = $rowsearch['username_mb'];
          $id_mb = $rowsearch['id_mb'];
          $aff = $rowsearch['aff'];
          $creditspin88 = $rowsearch['creditspin'] + 1;


          $bank_mb = $rowsearch['bank_mb'];




          if ($bank_mb == 'ธ.ออมสิน') {
            $bankacc_mb = substr($rowsearch['bankacc_mb'], 5, -3);
          } elseif ($bank_mb == 'ธ.ก.ส.') {
            $bankacc_mb = substr($rowsearch['bankacc_mb'], 5, -3);
          } else {
            $bankacc_mb = substr($rowsearch['bankacc_mb'], 5, -1);
          }

          if ($fromAccount == $bankacc_mb) {
            // echo '<br>';
            // echo $phone;
            // echo '<br>';
            // echo $check2;
            // echo '<br>';
            // echo $deposit;
            // echo '<br>';
            // echo $fromAccount;
            // echo '<br>';
            // echo $transactionDescription2;
            // echo '<br>';
            // echo $fromname;
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';



            $sql_check3 = "SELECT * FROM deposit WHERE confirm_dp='รอดำเนินการ' AND phone_dp='$phone'";
            $query3 = $class_admin->load_date_sql($sql_check3);

            $check3 = mysqli_num_rows($query3);

            $row_pro3 = mysqli_fetch_assoc($query3);
            $get_pro = $row_pro3['promotion_dp'];

            $phone_dp = $row_pro3['phone_dp'];
            //echo $get_pro;
            $username = $row_pro3['username_dp'];

            if ($check3 == 1) {
              //echo 'มีรายการถอน';
              $sql_promotion = "SELECT * FROM promotion WHERE name_pro='$get_pro'";
              $result7 = $class_admin->load_date_sql($sql_promotion);
              $row7 = mysqli_fetch_assoc($result7);
              $money = $row7['dp_pro'];
              $namepro = $row7['name_pro'];
              $bonusper_pro = $row7['bonusper_pro'];
              $dp_pro = $row7['dp_pro'];
              $turn = $row7['turn_pro'];
              $max_pro = $row7['max_pro'];
              //echo $max_pro;
              
              $a = $turn;
              $turnover1 = extract_int($a);

              $bonus_pro1 = $row7['bonus_pro'] + ($deposit * $bonusper_pro / 100);

              if ($bonus_pro1 > $max_pro) {
                $bonus_pro = $max_pro;
              } else {
                $bonus_pro = $row7['bonus_pro'] + ($deposit * $bonusper_pro / 100);
              }


              //echo $bonus_pro;
              if ($bonusper_pro != 0) {
                $turn_pro = ($deposit + $bonus_pro) * $turnover1;
              } else {
                $turn_pro = $turnover1;
              }
              //echo $turn_pro;

              if ($get_pro == $namepro and $deposit >= $money) {
                $sum = $deposit + $bonus_pro;
              } else {
                $sum = $deposit;
              }

              //echo $sum;
              $usernameufa = $agent_user . $username;
        $Balance34 = $Load_Master->Master_Balance($usernameufa);
              //echo $Balance34;



              //echo $usernameufa;
              $status = $Load_Master->Master_Deposit($usernameufa, $sum);
              //echo $status;
              if ($status == 'success' and $get_pro == $namepro and $deposit >= $money) {
                if ($deposit >= $dpspin) {


                  $sql87 = "UPDATE member SET creditspin = '$creditspin88' WHERE username_mb = '$username' ORDER BY id_mb DESC LIMIT 1 ";
                  $result87 = $class_admin->load_date_sql($sql87);
                }

                $sql = "UPDATE deposit SET confirm_dp='อนุมัติ' ,  amount_dp='$deposit' , bonus_dp='$bonus_pro' , bankin_dp = 'ธนาคารกสิกรไทย' , date_check_kbank='$code_dp' , turnover = '$turn_pro' , creditbefore = '$Balance34' , fromAccount = '$fromAccount' , add_dp = 'AUTO' , date_dp = '$datedp' WHERE username_dp='$username' ORDER BY id DESC LIMIT 1 ";
                $result = $class_admin->load_date_sql($sql);



				$sMessage = "ฝากเครดิตออโต้ KBank\nจำนวนเงิน " . $deposit . " บาท\nเบอร์ " . $phone_dp . "\n" . "ชื่อ " . $name_mb . "\nโปรโมชั่น " . $get_pro;
				$load_setting = $class_admin->load_db_setting();
				$token = $load_setting->linedeposit;
				$run_class = $class_admin->notify_line($sMessage,$token);
				
                
              } elseif ($status == 'success') {
                if ($deposit >= $dpspin) {


                  $sql87 = "UPDATE member SET creditspin = '$creditspin88' WHERE username_mb = '$username' ORDER BY id_mb DESC LIMIT 1 ";
                  $result87 = $class_admin->load_date_sql($sql87);
                }

                $sql = "UPDATE deposit SET confirm_dp ='อนุมัติ' ,  amount_dp ='$deposit' , bonus_dp = 0 , bankin_dp = 'ธนาคารกสิกรไทย' , date_check_kbank='$code_dp' , promotion_dp = 'ไม่รับโบนัส' , creditbefore = '$Balance34', turnover = 0 , fromAccount = '$fromAccount' , add_dp = 'AUTO' , date_dp = '$datedp' WHERE username_dp='$username' ORDER BY id DESC LIMIT 1 ";
                $result = $class_admin->load_date_sql($sql);


				
				$sMessage = "ฝากเครดิตออโต้ KBank\nจำนวนเงิน " . $deposit . " บาท\nเบอร์ " . $phone_dp . "\n". "ชื่อ " . $name_mb . "\n" . "ไม่รับโบนัส";
				$load_setting = $class_admin->load_db_setting();
				$token = $load_setting->linedeposit;
				$run_class = $class_admin->notify_line($sMessage,$token);
				
              }
            } //$check3==1
            else {

              $usernameufa = $agent_user . $username1;
              //echo $usernameufa;
              // echo '<br>';
              // echo $deposit;
              // echo '<br>';


              $Balance34 = $Load_Master->Master_Balance($usernameufa);
              //echo $Balance34;




              $status = $Load_Master->Master_Deposit($usernameufa, $deposit);
              // echo $status;
              if ($status == 'success') {

                if ($deposit >= $dpspin) {

                  //echo 7777777;
                  $sqlspin = "UPDATE member SET creditspin = '$creditspin88' WHERE username_mb = '$username1' ORDER BY id_mb DESC LIMIT 1 ";
                  $result87 = $class_admin->load_date_sql($sqlspin);
                }


                $sql = "INSERT INTO deposit (id_dp, username_dp, phone_dp, bank_dp, bankacc_dp, name_dp, confirm_dp, amount_dp, promotion_dp, aff_dp, note_dp, bonus_dp, fromTrue, date_check_kbank, bankin_dp, fromAccount, turnover, creditbefore ,add_dp) VALUES ('$id_mb', '$username1', '$phone', '$bank_mb', '$bankacc_mb','$name_mb', 'อนุมัติ', '$deposit', 'ไม่รับโบนัส', '$aff', '', '0', '$fromTrue', '$code_dp', 'ธนาคารกสิกรไทย', '$fromAccount', 0,'$Balance34' ,'AUTO')";
                $result = $class_admin->load_date_sql($sql);




				$sMessage = "ฝากเครดิตออโต้ KBank\nจำนวนเงิน " . $deposit . " บาท\nเบอร์ " . $phone . "\n". "ชื่อ " . $name_mb . "\n" . "ไม่รับโบนัส";
				$load_setting = $class_admin->load_db_setting();
				$token = $load_setting->linedeposit;
				$run_class = $class_admin->notify_line($sMessage,$token);

              }
            }
          }
        }
      }
    }
  } //แตกรายการ kbank
}
} else {
  //echo 'ระบบออโต้ปิด';
  $message['info'] = "ระบบออโต้ปิด";
  $message['status'] = "error";
}

$message['DateGet'] = date("Y-m-d H:i:s");
echo json_encode($message);
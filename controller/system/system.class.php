<?php 
include_once 'config.db.php';
include_once 'connect.class.php';
include_once 'K-Bank.Class.php';
use Nullix\CryptoJsAes\CryptoJsAes;
include "CryptoJsAes.php";

class system extends pdo_mysql{

	function __construct(){

		$this->db = $this->DB_PDO();
		$this->LoadConfig = new ConfigDB_Class();
		$this->Master = new MasterClass();
		$this->KBankApi = new KBankClass();
	}
	
	
	public function Return_Master(){
		return $this->Master;
	}
	public function return_class_KBank(){
		return $this->KBankApi;
	}
	
	public function SetupMysqli(){
		$Load_DB = $this->LoadConfig;
		$mysqli_conn = mysqli_connect($Load_DB->DB_HOST,$Load_DB->DB_USER,$Load_DB->DB_PASS,$Load_DB->DB_NAME) or die("Error: " . mysqli_error($mysqli_conn));
		mysqli_query($mysqli_conn, "SET NAMES 'utf8' ");
		return $mysqli_conn;
	}
	public function Query_Mysqli($sql){
		$load = $this->SetupMysqli();
		$result = mysqli_query($load, $sql);
		return $result;
	}
	
	public function RandomOTP($length = 6) {
		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {

			$randomString .= $characters[rand(0, $charactersLength - 1)];

		}
		return $randomString;
	}
	
	public function send_otp(){
		
		$Load_DB = $this->LoadConfig;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://thsms.com/api/rest?username='. $Load_DB->USER_SMS .'&password='. $Load_DB->PASSWORD_SMS .'&method=send&from=SMSOTP&to='.$_SESSION["PHONE_OTP"].'&message=%E0%B8%A3%E0%B8%AB%E0%B8%B1%E0%B8%AA%20OTP%20%E0%B8%84%E0%B8%B7%E0%B8%AD%20'.$_SESSION["OTP"]);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		$headers = array();
		$headers[] = "Content-type: application/x-www-form-urlencoded; charset=utf8";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			$result = 'Error:' . curl_error($ch);
		}
		curl_close ($ch);
		
		return $result;
	}
	
	public function ResendOTP(){
		
		$_SESSION["OTP"] = $this->RandomOTP();
		$Status_Send_OTP = $this->send_otp();
		$message['status'] = "success";
		$message['info'] = "สำเร็จ";
		
		return $message;
	}
	
	public function VerifyOTP($phone)
	{
		if ($_SESSION['PHONE_OTP'] == $phone){
			

			}else{
				$message['status'] = "error";
				$message['info'] = "รหัส OTP ไม่ถูกต้อง ";
			


		}
		return $message;
	}
	
	public function register_otp($phone_mb,$phone_true,$password_mb,$bank_mb,$bankacc_mb){
		
		
		$LoadName = $this->return_class_KBank();
		$Return_Name = $LoadName->LoadNameBank($bank_mb, $bankacc_mb, '1');
		
		if($Return_Name['status'] == "success"){
			
			$name_mb = $Return_Name['info'];
			
			$check_phone_mb = $this->db->prepare("SELECT * FROM member WHERE phone_mb = :phone_mb");
			$check_phone_mb->execute([':phone_mb'=>$phone_mb]);
			
			$check_bankacc_mb = $this->db->prepare("SELECT * FROM member WHERE bankacc_mb = :bankacc_mb");
			$check_bankacc_mb->execute([':bankacc_mb'=>$bankacc_mb]);
			
			$check_name_mb = $this->db->prepare("SELECT * FROM member WHERE name_mb = :name_mb");
			$check_name_mb->execute([':name_mb'=>$name_mb]);
			
			$check_phone_true = $this->db->prepare("SELECT * FROM member WHERE phone_true = :phone_true");
			$check_phone_true->execute([':phone_true'=>$phone_true]);
			
			if ($check_phone_mb->rowcount() > 0) {
				$message['status'] = "error";
				$message['info'] = "มี เบอร์โทรศัพท์นี้  ในระบบอยู่แล้ว";
			}elseif ($check_bankacc_mb->rowcount() > 0) {
				$message['status'] = "error";
				$message['info'] = "มี บัญชีธนาคารนี้ ในระบบอยู่แล้ว";
			}elseif ($check_name_mb->rowcount() > 0) {
				$message['status'] = "error";
				$message['info'] = "มี ชื่อ-นามสกุลนี้ ในระบบอยู่แล้ว";
			}elseif ($check_phone_true->rowcount() > 0) {
				$message['status'] = "error";
				$message['info'] = "มี ไอดีทรูวอเล็ตนี้ ในระบบอยู่แล้ว";
			}else{
				
				$_SESSION["PHONE_OTP"] = $phone_mb;
				
				$_SESSION["OTP"] = $this->RandomOTP();
				$Status_Send_OTP = $this->send_otp();
				
				$message['status'] = "success";
				$message['info'] = "สำเร็จ";
				$message['name_mb'] = $Return_Name['info'];
				
			}
			
		}else{
			$message['status'] = "error";
			$message['info'] = "ธนาคาร หรือ เลขบัญชี ไม่ถูกต้อง";
		}
		return $message;
	}

	public function register($phone_mb,$phone_true,$password_mb,$bank_mb,$bankacc_mb,$name_mb,$status_mb,$ip,$date_mb,$aff){
		
		$check_phone_mb = $this->db->prepare("SELECT * FROM member WHERE phone_mb = :phone_mb");
		$check_phone_mb->execute([':phone_mb'=>$phone_mb]);
		
		$check_bankacc_mb = $this->db->prepare("SELECT * FROM member WHERE bankacc_mb = :bankacc_mb");
		$check_bankacc_mb->execute([':bankacc_mb'=>$bankacc_mb]);
		
		$check_name_mb = $this->db->prepare("SELECT * FROM member WHERE name_mb = :name_mb");
		$check_name_mb->execute([':name_mb'=>$name_mb]);
		
		$check_phone_true = $this->db->prepare("SELECT * FROM member WHERE phone_true = :phone_true");
		$check_phone_true->execute([':phone_true'=>$phone_true]);
		
		
		if ($check_phone_mb->rowcount() > 0) {
			
			$message['status'] = "error";
			$message['info'] = "มี เบอร์โทรศัพท์นี้  ในระบบอยู่แล้ว";
			
		}elseif ($check_bankacc_mb->rowcount() > 0) {
			
			$message['status'] = "error";
			$message['info'] = "มี บัญชีธนาคารนี้ ในระบบอยู่แล้ว";
		}elseif ($check_name_mb->rowcount() > 0) {
			
			$message['status'] = "error";
			$message['info'] = "มี ชื่อ-นามสกุลนี้ ในระบบอยู่แล้ว";
			
		}elseif ($check_phone_true->rowcount() > 0) {
			
			$message['status'] = "error";
			$message['info'] = "มี ไอดีทรูวอเล็ตนี้ ในระบบอยู่แล้ว";
				
		}else{
			
			
			$add_register = $this->db->prepare("UPDATE member SET  
            password_mb = :password_mb , 
            phone_mb = :phone_mb ,
            phone_true = :phone_true ,
            bank_mb = :bank_mb ,
            bankacc_mb = :bankacc_mb ,
            name_mb = :name_mb ,
            status_mb = :status_mb ,
            aff = :aff ,
            add_mb = :add_mb ,
            date_mb = :date_mb ,
            ip = :ip
            WHERE phone_mb = '' ORDER BY id_mb ASC LIMIT 1");
			
			try {

				$add_register->execute([':password_mb'=>$password_mb,':phone_mb'=>$phone_mb,':phone_true'=>$phone_true,':bank_mb'=>$bank_mb,':bankacc_mb'=>$bankacc_mb,':name_mb'=>$name_mb,':status_mb'=>$status_mb,':aff'=>$aff,':add_mb'=>'MEMBER',':date_mb'=>$date_mb,':ip'=>$ip]);

				$message['status'] = "success";
				$message['info'] = "สำเร็จ";
				
				$this->login($phone_mb,$password_mb);

			} catch (Exception $e) {

				$message['status'] = "error";
				$message['info'] = "error";

			}
			
			
		}
			
		return $message;	
			
	}
	

	public function login($phone_mb,$password_mb){

		$stmt = $this->db->prepare("SELECT * FROM member WHERE phone_mb = :phone_mb and password_mb = :password_mb");

		$stmt->execute([':phone_mb'=>$phone_mb,':password_mb'=>$password_mb]);

		if ($stmt->rowcount() > 0) {

			$result = $stmt->fetch();


				$message['status'] = "success";

				$message['info'] = "เข้าสู่ระบบสำเร็จ";

				$_SESSION["id_mb"] = $result->id_mb;
                $_SESSION["username_mb"] = $result->username_mb;
                $_SESSION["password_mb"] = $result->password_mb;
                $_SESSION["name_mb"] = $result->name_mb;
                $_SESSION["bank_mb"] = $result->bank_mb;
                $_SESSION["bankacc_mb"] = $result->bankacc_mb;
                $_SESSION["phone_mb"] = $result->phone_mb;
                $_SESSION["status_mb"] = $result->status_mb;
                $_SESSION["confirm_mb"] = $result->confirm_mb;
                $_SESSION["aff"] = $result->aff;
                $_SESSION["status"] = $result->status;
                $_SESSION["password_ufa"] = $result->password_ufa;
                $_SESSION["ip"] = $result->ip;
                $_SESSION["phone_true"] = $result->phone_true;
                $_SESSION["creditspin"] = $result->creditspin;
                $_SESSION["point"] = $result->point;
				$_SESSION["diamond"] = $result->diamond;
				$_SESSION['Balance'] = "0.00";
				
				$this->load_session();

		}else{

			$message['status'] = "error";
			$message['info'] = "รหัสผ่านไม่ถูกต้อง";

		}

		return $message;

	}
	
	public function load_session(){
		
		$Load_DB = $this->LoadConfig;
		$date_setting = $this->load_db_setting();
		$Load_Master = $this->Return_Master();
		/////////////////////////////////////////////////
		
		$_SESSION["lineoa"] = $date_setting->lineoa;
		$_SESSION["UsernameUFA"] = $Load_DB->user_agent . $_SESSION["username_mb"];
		//$_SESSION["Balance"] = $Load_Master->Master_Balance($_SESSION["UsernameUFA"]);
		if ($_SESSION['Balance'] == "0"){
			$_SESSION['Balance'] = "0.00";
		}
		

	}
	
	public function showprofile(){
		$stmt = $this->db->prepare("SELECT * FROM member WHERE id_mb = :id_mb");
		$stmt->execute([':id_mb'=>$_SESSION["id_mb"]]);
		return $stmt->fetch();
	}
	
	public function load_db_setting(){
		$stmt = $this->db->prepare("SELECT * FROM setting ORDER BY id DESC LIMIT 1");
		$stmt->execute();
		return $stmt->fetch();
	}
	
	public function show_promotion(){

		$stmt = $this->db->prepare("SELECT * FROM promotion WHERE status_pro = 'เปิด'");
		$stmt->execute();
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
	}
	
	public function load_bank(){
		$stmt = $this->db->prepare("SELECT * FROM bank WHERE bankfor LIKE '%ฝาก%' AND status_bank ='เปิด'");
		$stmt->execute();
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch()) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
	}
	
	//ดึงรายการฝาก
	public function get_list_deposit(){
		$stmt = $this->db->prepare("SELECT * FROM deposit WHERE id_dp = :id_mb AND confirm_dp != 'ยกเลิก' ORDER BY id DESC limit 10");
		$stmt->execute([':id_mb'=>$_SESSION["id_mb"]]);
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch()) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
	}
	//ดึงรายการถอน
	public function get_list_withdraw(){
		$stmt = $this->db->prepare("SELECT * FROM withdraw WHERE username_wd = :username_mb AND amount_wd != '' ORDER BY id DESC limit 20");
		$stmt->execute([':username_mb'=>$_SESSION["username_mb"]]);
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch()) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
	}
	// รับเพชรฟรี
	public function GetDiamond(){
	  date_default_timezone_set("Asia/Bangkok");
	  
	  $start_date = date('Y-m-d');
	  $stmt = $this->db->prepare("SELECT * FROM history_diamond WHERE phone = :phone AND date_time LIKE '%$start_date%' ORDER BY id DESC limit 1");
	  $stmt->execute([':phone'=>$_SESSION["phone_mb"]]);
	  
	  $GetReward = rand(1,5);
	  
	  if ($stmt->rowcount() > 0) {
	   
	   $result = $stmt->fetch();
	   
	   if($result->date_time > $start_date){
		$message['status'] = "error";
		$message['status1'] = $result->date_time;
		$message['status2'] = $start_date;
	   }else{
		$message['status'] = "success";
		$message['diamond'] = $_SESSION["diamond"] + $GetReward;
		$message['RewardDiamond'] = $GetReward;
		$this->GetDiamond_INSERT($GetReward);
	   }
	   
	  } else {
	   
	   $message['status'] = "success";
	   $message['diamond'] = $_SESSION["diamond"] + $GetReward;
	   $message['RewardDiamond'] = $GetReward;
	   $this->GetDiamond_INSERT($GetReward);
	  }
	  return $message;
	 }
	 
	 public function GetDiamond_INSERT($GetReward){
		
		date_default_timezone_set("Asia/Bangkok");
		$Today = date("Y-m-d H:i:s");
		
		$Diamond_Insert = $this->db->prepare("INSERT INTO history_diamond (reward, username, phone, name, date_time) VALUES (:reward,:username,:phone,:name,:date_time)");
		
		$Diamond_Insert->execute([':reward'=>$GetReward,':username'=>$_SESSION["username_mb"],':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':date_time'=>$Today]);
		
		$update_diamond = $this->db->prepare("UPDATE member SET diamond = diamond + :diamond WHERE phone_mb = :phone_mb");
		$update_diamond->execute([':diamond'=>$GetReward,':phone_mb'=>$_SESSION["phone_mb"]]);
		
		$_SESSION["diamond"] = $_SESSION["diamond"] + $GetReward;
		
	}
	
	public function Diamond_History(){

		$stmt = $this->db->prepare("SELECT * FROM history_diamond WHERE phone = :phone ORDER BY id DESC limit 10");
		$stmt->execute([':phone'=>$_SESSION["phone_mb"]]);
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch()) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
		
	}
	
	public function history_Change_Diamond(){
		
		$stmt = $this->db->prepare("SELECT * FROM change_diamond WHERE phone = :phone ORDER BY id DESC limit 10");
		$stmt->execute([':phone'=>$_SESSION["phone_mb"]]);
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch()) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
	}
	//แลกเพชร
	public function Change_Diamond(){
		
		date_default_timezone_set("Asia/Bangkok");
		$Today = date("Y-m-d H:i:s");

		$stmt = $this->db->prepare("SELECT * FROM member WHERE phone_mb = :phone_mb");
		$stmt->execute([':phone_mb'=>$_SESSION["phone_mb"]]);
		$result = $stmt->fetch();
		if($result->diamond <= 0) {
			
			$message['status'] = "error";
			$message['info'] = "คุณไม่มี เพชร";
			
		}else{
			
			$load_setting = $this->load_db_setting();
			$values = $result->diamond * $load_setting->change_diamond;

			$Load_Master = $this->Return_Master();
			$Status_Master = $Load_Master->Master_Deposit($_SESSION["UsernameUFA"],$values);
			if (empty($Status_Master)) {
				$Status_Master = "error";
			}
			
			if ($Status_Master == "success") {
				
				$update_diamond = $this->db->prepare("UPDATE member SET diamond = '0' WHERE phone_mb = :phone_mb");
				$change_diamond_insert = $this->db->prepare("INSERT INTO change_diamond (amount, phone, name, username, date_change) VALUES (:amount,:phone,:name,:username,:date_change)");
				
				$New_Balance = $_SESSION["Balance"] + $values;
				$message['status'] = "success";
				$message['info'] = $New_Balance;
				$_SESSION["diamond"] = "0";
				$_SESSION["Balance"] = $New_Balance;
					
				$update_diamond->execute([':phone_mb'=>$_SESSION["phone_mb"]]);
					
				$change_diamond_insert->execute([':amount'=>$values,':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':username'=>$_SESSION["username_mb"],':date_change'=>$Today]);
				
			}else{
					
				$message['status'] = "error";
				$message['info'] = "ระบบมีปัญหา";
					
			}
				
		}
		
		return $message;
	}
	// spinner
	public function spinner(){
		date_default_timezone_set("Asia/Bangkok");
		$Today = date("Y-m-d H:i:s");
		$load_setting = $this->load_db_setting();
		$weights = array($load_setting->Change1,$load_setting->Change2,$load_setting->Change3,$load_setting->Change4,$load_setting->Change5,$load_setting->Change6,$load_setting->Change7,$load_setting->Change8);
		$samples = array(1,3,4,5,7,8,2,6);
		$response_Random = $this->w_rand($samples, $weights);
		$message['response'] = $response_Random;
		$profile = $this->showprofile();
		if ($profile->creditspin <= 0) {
			$message['status'] = "No_Creditspin";
			$message['message'] = 'สิทธิ์การหมุนไม่พอ';
		}else{
			$message['status'] = "success";
			
			$history_insert = $this->db->prepare("INSERT INTO history_spin (reward,username,phone,name,time) VALUES (:reward,:username,:phone,:name,:time)");
			$update_success = $this->db->prepare("UPDATE member SET point = point + :point , creditspin = creditspin -1 WHERE phone_mb = :phone_mb");
			$update_fall = $this->db->prepare("UPDATE member SET creditspin = creditspin -1 WHERE phone_mb = :phone_mb");
			
			if ($response_Random == 1){
				$message['message'] = 'ยินดีด้วยคุณได้ '. $load_setting->reward1 . ' พ้อยด์';
				$history_insert->execute([':reward'=>$load_setting->reward1,':username'=>$_SESSION["username_mb"],':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':time'=>$Today]);
				$update_success->execute([':point'=>$load_setting->reward1,':phone_mb'=>$_SESSION["phone_mb"]]);
			}
			if ($response_Random == 2){
				$message['message'] = 'เสียใจด้วยคุณไม่ได้รางวัล';
				$history_insert->execute([':reward'=>'ไม่ได้รับรางวัล',':username'=>$_SESSION["username_mb"],':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':time'=>$Today]);
				$update_fall->execute([':phone_mb'=>$_SESSION["phone_mb"]]);
			}
			if ($response_Random == 3){
				$message['message'] = 'ยินดีด้วยคุณได้ '. $load_setting->reward2 . ' พ้อยด์';
				$history_insert->execute([':reward'=>$load_setting->reward2,':username'=>$_SESSION["username_mb"],':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':time'=>$Today]);
				$update_success->execute([':point'=>$load_setting->reward2,':phone_mb'=>$_SESSION["phone_mb"]]);
			}
			if ($response_Random == 4){
				$message['message'] = 'ยินดีด้วยคุณได้ '. $load_setting->reward3 . ' พ้อยด์';
				$history_insert->execute([':reward'=>$load_setting->reward3,':username'=>$_SESSION["username_mb"],':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':time'=>$Today]);
				$update_success->execute([':point'=>$load_setting->reward3,':phone_mb'=>$_SESSION["phone_mb"]]);
			}
			if ($response_Random == 5){
				$message['message'] = 'ยินดีด้วยคุณได้ '. $load_setting->reward4 . ' พ้อยด์';
				$history_insert->execute([':reward'=>$load_setting->reward4,':username'=>$_SESSION["username_mb"],':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':time'=>$Today]);
				$update_success->execute([':point'=>$load_setting->reward4,':phone_mb'=>$_SESSION["phone_mb"]]);
			}
			if ($response_Random == 6){
				$message['message'] = 'เสียใจด้วยคุณไม่ได้รางวัล';
				$history_insert->execute([':reward'=>'ไม่ได้รับรางวัล',':username'=>$_SESSION["username_mb"],':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':time'=>$Today]);
				$update_fall->execute([':phone_mb'=>$_SESSION["phone_mb"]]);
			}
			if ($response_Random == 7){
				$message['message'] = 'ยินดีด้วยคุณได้ '. $load_setting->reward5 . ' พ้อยด์';
				$history_insert->execute([':reward'=>$load_setting->reward5,':username'=>$_SESSION["username_mb"],':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':time'=>$Today]);
				$update_success->execute([':point'=>$load_setting->reward5,':phone_mb'=>$_SESSION["phone_mb"]]);
			}
			if ($response_Random == 8){
				$message['message'] = 'ยินดีด้วยคุณได้ '. $load_setting->reward6 . ' พ้อยด์';
				$history_insert->execute([':reward'=>$load_setting->reward6,':username'=>$_SESSION["username_mb"],':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':time'=>$Today]);
				$update_success->execute([':point'=>$load_setting->reward6,':phone_mb'=>$_SESSION["phone_mb"]]);
			}
			$new_profile = $this->showprofile();
			$_SESSION['creditspin'] = $new_profile->creditspin;
			$message['Credit'] = $_SESSION['creditspin'];
			$_SESSION['point'] = $new_profile->point;
			$message['Point'] = $_SESSION['point'];
		}
		$dete_call = json_encode($message);
		$encrypted = CryptoJsAes::encrypt($dete_call, "Asadayut");
		return $encrypted;
	}
	// สุ่มของ spinner
	public function w_rand($samples, $weights){
		if ( count($samples) != count($weights) ) 
		{
			return null; 
		}
		$sum 	= array_sum($weights) * 100;  
		$rand 	= mt_rand(1, $sum);  
		foreach ($weights as $i=>$w) 
		{  
			$weights[$i] = $w * 100 + ( $i > 0 ? $weights[$i-1] : 0 );  
			if ( $rand <= $weights[$i] ) { return $samples[$i]; }  
		}  
	}
	//ดึงประวัติการเล่น spinner
	public function spinner_history(){
		$stmt = $this->db->prepare("SELECT * FROM history_spin WHERE phone = :phone ORDER BY id DESC limit 10");
		$stmt->execute([':phone'=>$_SESSION["phone_mb"]]);
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch()) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
	}
	//แลกพ้อยด์ spinner
	public function Change_Spinner(){
		date_default_timezone_set("Asia/Bangkok");
		$Today = date("Y-m-d H:i:s");
		$stmt = $this->db->prepare("SELECT * FROM member WHERE phone_mb = :phone_mb");
		$stmt->execute([':phone_mb'=>$_SESSION["phone_mb"]]);
		$result = $stmt->fetch();
		
		if($result->point <= 0) {
			$message['status'] = "error";
			$message['info'] = "คุณไม่มี พ้อยด์";
		}else{
			
			$load_setting = $this->load_db_setting();
			$values = $result->point * $load_setting->change_point;
			
			$Load_Master = $this->Return_Master();
			$Status_Master = $Load_Master->Master_Deposit($_SESSION["UsernameUFA"],$values);
			
			if ($Status_Master == "success") {
				
				$update_point = $this->db->prepare("UPDATE member SET point = '0' WHERE phone_mb = :phone_mb");
				
				$change_spinner_insert = $this->db->prepare("INSERT INTO change_spinner (amount, phone, name, username, date_change) VALUES (:amount,:phone,:name,:username,:date_change)");
				
				$New_Balance = $_SESSION["Balance"] + $values;
				$message['status'] = "success";
				$message['info'] = $New_Balance;
				$_SESSION["point"] = "0";
				$_SESSION["Balance"] = $New_Balance;
					
				$update_point->execute([':phone_mb'=>$_SESSION["phone_mb"]]);
				$change_spinner_insert->execute([':amount'=>$values,':phone'=>$_SESSION["phone_mb"],':name'=>$_SESSION["name_mb"],':username'=>$_SESSION["username_mb"],':date_change'=>$Today]);
				
			}else{
				$message['status'] = "error";
				$message['info'] = "ระบบมีปัญหา";
			}	
		}
		return $message;
	}
	//ดึงประวัติแลกพ้อยด์ spinner
	public function history_change_spinner(){
		$stmt = $this->db->prepare("SELECT * FROM change_spinner WHERE phone = :phone ORDER BY id DESC limit 10");
		$stmt->execute([':phone'=>$_SESSION["phone_mb"]]);
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch()) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
	}
	public function code_reward_test($code_id){
		
		$chcode = $this->db->prepare("SELECT * FROM code_reward WHERE code = :code AND status <=> null");
		$chcode->execute([':code'=>$code_id]);
		return $code_id;
	}
		//แลกcode
	
	public function code_reward($code_id){
		
		$chcode = $this->db->prepare("SELECT * FROM code_reward WHERE code = :code AND phone = ''");
		$chcode->execute([':code'=>$code_id]);
		if ($chcode->rowcount() > 0) {
				
				$resultcode = $chcode->fetch();
				$result_reward = $resultcode->reward;
				$result_turnover = $resultcode->turnover;

				$Load_Master = $this->Return_Master();
				$Status_Master = $Load_Master->Master_Deposit($_SESSION["UsernameUFA"],$result_reward);
				
				if (empty($Status_Master)) {
					$Status_Master = "error";
				}else{
					$data_deposit = json_decode($Status_Mastert);
					$status_deposit_agent = $data_deposit->status;
				}

				
				
				if ($status_deposit_agent=='success') {

					$message['status'] = "success";
					$message['info'] = "คุณได้รับ " . $result_reward . " เครดิต";
					
					$update_code = $this->db->prepare("UPDATE code_reward SET status = :status , phone = :phone WHERE code = :code");
					$update_code->execute([':status'=>'สำเร็จ',':phone'=>$_SESSION["phone_mb"],':code'=>$code_id]);
					
					$Load_Master = $this->Return_Master();
					$Status_Master = $Load_Master->Master_Deposit($_SESSION["UsernameUFA"],$result_reward);
				}else{
					
					$message['status'] = "error";
					$message['info'] = "กรุณาลองใหม่อีกครั้ง";
					
				}
			
			
		}else{
			
			$message['status'] = "error";
			$message['info'] = "โค้ดไม่ถูกต้อง";
			
		}
		
		return $message;
		
	}
	public function notify_line($message,$token)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "message=" . $message);
		$headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $token . '',);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		$res = json_decode($result, true);
		curl_close($ch);
	}
	
	
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	//ตัดข้อความ
	public function extract_int($str){
		
		$str = str_replace(",","",$str);
		preg_match('/[[:digit:]]+\.?[[:digit:]]*/', $str, $regs);
		return (doubleval($regs[0]));
		
	}
	
	//ถอนเงิน
	public function withdraw_wd($amount_wd){
		
		$Load_Master = $this->Return_Master();
		$Get_Profile = $this->showprofile();
		
		$get_deposit_latest = $this->deposit_latest();
		if (empty($get_deposit_latest)) {
			$lastpro = "";
		}else{
			$lastpro = $get_deposit_latest->promotion_dp;
			$deposit_amount_dp = $get_deposit_latest->amount_dp;
		}
		
		$id_wd = $Get_Profile->id_mb;
		$username_wd = $Get_Profile->username_mb;
		$bank_wd = $Get_Profile->bank_mb;
		$bankacc_wd = $Get_Profile->bankacc_mb;
		$name_wd = $Get_Profile->name_mb;
		$phone_wd = $Get_Profile->phone_mb;
		$aff_wd = $Get_Profile->aff;
		$confirm_wd = "รอดำเนินการ";
		
		$setting = $this->load_db_setting();
		$setwd = $setting->set_wd;
		
		//เช็ค
		$check_list_wd = $this->check_list_withdraw();
		$check_confirm_dp = $this->check_confirm_dp();
		
		$MasterBalance = $Load_Master->Master_Balance($_SESSION["UsernameUFA"]);
		
		if (empty($get_deposit_latest)) {
			$message['status'] = "error";
			$message['info'] = "ไม่เคยฝาก";
		}else{
			if ($check_confirm_dp < 1) {
				$message['status'] = "error";
				$message['info'] = "ติดต่อแอดมิน";
			}else{
				if($check_list_wd > 0){
					$message['status'] = "error";
					$message['info'] = "ท่านมีรายถอนที่กำลังรอดำเนินการอยู่ !";
				}else{
					if($amount_wd < $setwd){
						$message['status'] = "error";
						$message['info'] = "ถอนเงินขั้นต่ำ " . $setwd . " บาท !";
					}else{
						
						$replace_text = $this->extract_int($get_deposit_latest->turnover);
						$newstr = $replace_text;
						
						if($MasterBalance < $newstr){
							$message['status'] = "error";
							$message['info'] = "ยอดเทิร์นยังไม่ครบ";
						}else{
							
						    if($amount_wd > $MasterBalance){
								$message['status'] = "error";
								$message['info'] = "เครดิตไม่เพียงพอ";
							}else{
								
								if ($lastpro == 'ไม่รับโบนัส') {
										
									$Status_Master = $Load_Master->Master_Withdraw($_SESSION["UsernameUFA"],$amount_wd);
											
								}elseif ($lastpro == 'เครดิตฟรี') {

									$Status_Master = $Load_Master->Master_Withdraw($_SESSION["UsernameUFA"],$MasterBalance);
										$amount_wd = $MasterBalance;
									

									}else{
									
									$resultpromotion = $this->db->prepare("SELECT * FROM promotion WHERE name_pro = '$lastpro'");
									$resultpromotion->execute();
									$result = $resultpromotion->fetch();
									
									$money = $result->wd_pro;
									$bonusper_pro = $result->bonusper_pro;
									
									if($money == 'ไม่จำกัด'){
										$amount_wd = $MasterBalance;
									}else{
									
										if ($bonusper_pro != 0) {
													
											$exwdpro = $this->extract_int($money);
											$wdpro = $deposit_amount_dp * $exwdpro;
													
											if ($MasterBalance > $wdpro) {
													$amount_wd = $wdpro;
												}else{
													$amount_wd = $MasterBalance;
												}

										} else {
													
											if($MasterBalance < $money){
														
											}else{
												$amount_wd = $money;
											}
										}
									}
									
									$Status_Master = $Load_Master->Master_Withdraw($_SESSION["UsernameUFA"],$MasterBalance);
								}
								
								if ($Status_Master == "success") {
									
									$withdraw_insert = $this->db->prepare("INSERT INTO withdraw (id_wd, username_wd, phone_wd, bank_wd, bankacc_wd, name_wd, lastpro, confirm_wd, pin_wd, amount_wd, aff_wd) VALUES (:id_wd,:username_wd,:phone_wd,:bank_wd,:bankacc_wd,:name_wd,:lastpro,:confirm_wd,:pin_wd,:amount_wd,:aff_wd)");
									$withdraw_insert->execute([':id_wd'=>$id_wd,':username_wd'=>$username_wd,':phone_wd'=>$phone_wd,':bank_wd'=>$bank_wd,':bankacc_wd'=>$bankacc_wd,':name_wd'=>$name_wd,':lastpro'=>$lastpro,':confirm_wd'=>$confirm_wd,':pin_wd'=>'unknown6134',':amount_wd'=>$amount_wd,':aff_wd'=>$aff_wd]);
									
									$message['status'] = "success";
									$message['info'] = "แจ้งถอนสำเร็จ กรุณารอทำรายการใน 3 นาที";
									
								}else{
									$message['status'] = "error";
									$message['info'] = "ถอนเงินผิดพลาด ติดต่อแอดมิน";
								}
							}
						}
					}
				}
			}
		}
		return $message;
	}
	
	//ดึงเทิร์นของโปร
	public function load_turnover($namepro){

		$stmt = $this->db->prepare("SELECT * FROM promotion WHERE name_pro = '$namepro'");
		$stmt->execute();
		return $stmt->fetch();
		
	}
	//ดึงยอดเงินฝากล่าสุด
	public function deposit_latest(){

		$stmt = $this->db->prepare("SELECT * FROM deposit WHERE confirm_dp = 'อนุมัติ' AND phone_dp = :phone_dp ORDER BY id DESC limit 1");
		$stmt->execute([':phone_dp'=>$_SESSION["phone_mb"]]);
		return $stmt->fetch();
		
	}
	//ดึงจำนวนรายการถอน
	public function check_list_withdraw(){
		
		$stmt = $this->db->prepare("SELECT username_wd FROM withdraw WHERE confirm_wd = 'รอดำเนินการ' AND id_wd = :id_wd ");
		$stmt->execute([':id_wd'=>$_SESSION["id_mb"]]);
		return $stmt->rowcount();
		
	}
	//ดึงจำนวนรายการฝากที่สำเร็จ
	public function check_confirm_dp(){
		
		$stmt = $this->db->prepare("SELECT * FROM deposit WHERE confirm_dp = 'อนุมัติ' AND phone_dp = :phone_dp ORDER BY id DESC");
		$stmt->execute([':phone_dp'=>$_SESSION["phone_mb"]]);
		return $stmt->rowcount();
		
	}
	
	
	//ฝากเงิน
	public function deposit_dp($promotion_dp){
		
		$Get_Profile = $this->showprofile();
		
		$id_dp = $Get_Profile->id_mb;
		$username_dp = $Get_Profile->username_mb;
		$amount_dp = 'รอฝาก';
		$phone_dp = $Get_Profile->phone_mb;
		$bank_dp = $Get_Profile->bank_mb;
		$bankacc_dp = $Get_Profile->bankacc_mb;
		$name_dp = $Get_Profile->name_mb;
		$confirm_dp = 'รอดำเนินการ';
		$aff_dp = $Get_Profile->aff;
		$note_dp = '';
		$bonus_dp = '';
		$fromTrue = $Get_Profile->phone_true;
		
		//เช็ค
		$check_list_prodp = $this->check_list_prodp();
		$check_list_prodp2 = $this->check_list_prodp2($promotion_dp);
		$check_list_prodp3 = $this->check_list_prodp3($promotion_dp);
		if($check_list_prodp > 0){
			
			$message['status'] = "error";
			$message['info'] = "ท่านมีรายการฝากอยู่ 1 รายการ !";
			
		}else{
			
			if($check_list_prodp2 > 0){
				$message['status'] = "error";
				$message['info'] = "ท่านรับโปรโมชั่นนี้ไปแล้ว ! กรุณาเลือกโปรโมชั่นอื่น !";
			}else{
				if($check_list_prodp3 > 0){
					$message['status'] = "error";
					$message['info'] = "วันนี้ท่านรับโปรโมชั่นรายวันนี้ไปแล้ว ! กรุณาเลือกโปรโมชั่นอื่น";
				}else{
					$deposit_insert = $this->db->prepare("INSERT INTO deposit (id_dp, username_dp, phone_dp, bank_dp, bankacc_dp, name_dp, confirm_dp, amount_dp, promotion_dp, aff_dp, note_dp, bonus_dp, fromTrue) VALUES (:id_dp,:username_dp,:phone_dp,:bank_dp,:bankacc_dp,:name_dp,:confirm_dp,:amount_dp,:promotion_dp,:aff_dp,:note_dp,:bonus_dp,:fromTrue)");
					try {
						$deposit_insert->execute([':id_dp'=>$id_dp,':username_dp'=>$username_dp,':phone_dp'=>$phone_dp,':bank_dp'=>$bank_dp,':bankacc_dp'=>$bankacc_dp,':name_dp'=>$name_dp,':confirm_dp'=>$confirm_dp,':amount_dp'=>$amount_dp,':promotion_dp'=>$promotion_dp,':aff_dp'=>$aff_dp,':note_dp'=>$note_dp,':bonus_dp'=>$bonus_dp,':fromTrue'=>$fromTrue]);
						$message['status'] = "success";
						$message['info'] = "เลือกโปรโมชั่นเรียบร้อย กรุณาฝากเงินตามจำนวน";
					} catch (Exception $e) {
						$message['status'] = "error";
						$message['info'] = $e->getmessage();
					}
				}
			}
		}
		return $message;
	}
	
	//เช็ค ว่ามีรายการฝากไหม
	public function check_list_prodp(){
		$stmt = $this->db->prepare("SELECT username_dp FROM deposit WHERE confirm_dp = 'รอดำเนินการ' AND id_dp = :id_dp AND username_dp = :username_dp");
		$stmt->execute([':id_dp'=>$_SESSION["id_mb"],':username_dp'=>$_SESSION["username_mb"]]);
		return $stmt->rowcount();
	}
	//เช็ค ว่าเลือกโปรซ่ำไหม
	public function check_list_prodp2($promotion_dp){
		$stmt = $this->db->prepare("SELECT username_dp FROM deposit , promotion WHERE username_dp = :username_dp AND time_pro = 'รับได้ครั้งเดียว' AND promotion_dp = :promotion_dp AND confirm_dp = 'อนุมัติ' AND name_pro = :name_pro");
		$stmt->execute([':username_dp'=>$_SESSION["username_mb"],':promotion_dp'=>$promotion_dp,':name_pro'=>$promotion_dp]);
		return $stmt->rowcount();
	}
	//เช็ค ว่ารับโปรรายวันไปยัง
	public function check_list_prodp3($promotion_dp){
		date_default_timezone_set('Asia/Bangkok');
		$date = date("Y-m-d");
		$stmt = $this->db->prepare("SELECT username_dp FROM deposit , promotion WHERE username_dp = :username_dp AND promotion_dp = :promotion_dp AND time_pro = 'รับได้วันละ 1 ครั้ง' AND confirm_dp = 'อนุมัติ' AND name_pro = :name_pro AND date_dp LIKE '%$date%'");
		$stmt->execute([':username_dp'=>$_SESSION["username_mb"],':promotion_dp'=>$promotion_dp,':name_pro'=>$promotion_dp]);
		return $stmt->rowcount();
	}
	
	public function Check_Deposit_Cancel(){
		date_default_timezone_set('Asia/Bangkok');
		$date = date("Y-m-d");
		$stmt = $this->db->prepare("SELECT username_dp FROM deposit WHERE username_dp = :username_dp AND confirm_dp = 'ยกเลิก' AND date_dp LIKE '%$date%'");
		$stmt->execute([':username_dp'=>$_SESSION["username_mb"]]);
		return $stmt->rowcount();
	}
	
	
	//เช็ค ว่าเคยรับโปรไหม
	public function check_pro(){
		
		$stmt = $this->db->prepare("SELECT * FROM deposit WHERE phone_dp = :phone_dp AND confirm_dp = 'อนุมัติ' AND promotion_dp!='แจกฟรี'");
		$stmt->execute([':phone_dp'=>$_SESSION["phone_mb"]]);
		return $stmt->rowcount();
		
	}
	//แสดงรายการโปร
	public function show_pro1(){
		
		$stmt = $this->db->prepare("SELECT * FROM promotion WHERE time_pro!='สมาชิกใหม่' AND showpic!='เปิด' ORDER BY id desc");
		$stmt->execute();
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
		
	}
	//แสดงรายการโปร สมาชิกใหม่
	public function show_pro2(){
		
		$stmt = $this->db->prepare("SELECT * FROM promotion WHERE showpic!='เปิด' ORDER BY id desc");
		$stmt->execute();
		if ($stmt->rowcount() > 0) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$result[] = $row;
			}
			return $result;
		} else {
			return 0;
		}
	}
	
	
	
	
	public function withdraw_cashback(){
		
		$Get_Profile = $this->showprofile();
		
		$id_cb = $Get_Profile->id_mb;
		$username_cb = $Get_Profile->username_mb;
		$phone_cb = $Get_Profile->phone_mb;
		$bank_cb = $Get_Profile->bank_mb;
		$bankacc_cb = $Get_Profile->bankacc_mb;
		$name_cb = $Get_Profile->name_mb;
		
		$Load_Master = $this->Return_Master();
		
		$load_setting = $this->load_db_setting();
		$check_withdraw_cashback = $this->check_withdraw_cashback();
		$winlose = $Load_Master->Master_TurnOver($_SESSION["UsernameUFA"]);
		if ($winlose == "error") {
			$winlose = 0;
		}
		$winlose3 = $winlose*-$load_setting->cashback / 100;
		$winlose2= (floor ($winlose3));
		
		if ($winlose2<=0) {
			$message['status'] = "error";
			$message['info'] = "ท่านไม่ได้รับยอดเสีย";
		}else{
			
			if($check_withdraw_cashback > 0){
				
				$message['status'] = "error";
				$message['info'] = "ท่านทำรายการนี้ไปแล้ว";
				
			}else{
				
				
				$Status_Master = $Load_Master->Master_Deposit($_SESSION["UsernameUFA"],$winlose2);
				if (empty($Status_Master)) {
					$Status_Master = "error";
				}
			
				if ($Status_Master == "success") {
					
					$withdraw_cashback_insert = $this->db->prepare("INSERT INTO withdraw (id_wd, username_wd, phone_wd, bank_wd, bankacc_wd, name_wd, confirm_wd, amount_cashback, bankout_wd) VALUES 
					(:id_wd, :username_wd, :phone_wd, :bank_wd, :bankacc_wd,:name_wd, 'อนุมัติ', :winlose2, 'คืนยอดเสีย')");
					
					$withdraw_cashback_insert->execute([':id_wd'=>$id_cb,':username_wd'=>$username_cb,':phone_wd'=>$phone_cb,':bank_wd'=>$bank_cb,':bankacc_wd'=>$bankacc_cb,':name_wd'=>$name_cb,':winlose2'=>$winlose2]);
									
					$message['status'] = "success";
					$message['info'] = "รับยอดเสียสำเร็จ";						
				}else{
					$message['status'] = "error";
					$message['info'] = "ระบบมีปัญหา";
				}
			}
		}
		return $message;
	}
	public function check_withdraw_cashback(){
		date_default_timezone_set("Asia/Bangkok");
		$month_wd = date('Y-m-d');
		$stmt = $this->db->prepare("SELECT phone_wd FROM withdraw WHERE phone_wd = :phone_wd AND amount_cashback != '' AND date_wd LIKE :month_wd ");
		$stmt->execute([':phone_wd'=>$_SESSION["phone_mb"],':month_wd'=>'%'.$month_wd.'%']);
		return $stmt->rowcount();
	}
	
	
	public function withdraw_aff(){
		
		date_default_timezone_set('asia/bangkok');
		
		$Get_Profile = $this->showprofile();
		
		$id_aff = $Get_Profile->id_mb;
		$username_aff = $Get_Profile->username_mb;
		$phone_aff = $Get_Profile->phone_mb;
		$bank_aff = $Get_Profile->bank_mb;
		$bankacc_aff = $Get_Profile->bankacc_mb;
		$name_aff = $Get_Profile->name_mb;
		$Load_Master = $this->Return_Master();
		$Get_Setting = $this->load_db_setting();
		
		$month_dp = date('Y-m',strtotime('-1 month')) ;
		$sql_amount_friends = "SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp = 'อนุมัติ' AND aff_dp = '$Get_Profile->username_mb' AND date_dp LIKE '%$month_dp%'";
        $result_amount_friends = $this->Query_Mysqli($sql_amount_friends);
        while($row = mysqli_fetch_array($result_amount_friends)){
        $sum_amount_aff3 = $row['SUM(amount_dp)'] * $Get_Setting->affcashback / 100; 
     	$sum_amount_aff =  floor($sum_amount_aff3);
		} 
		$month_aff = date('Y-m');
		$sql_check_get = "SELECT phone_aff FROM withdrawaff WHERE phone_aff = '$phone_aff' AND date_aff LIKE '%$month_aff%'";
        $result_check_get = $this->Query_Mysqli($sql_check_get);
		$num_check_get = mysqli_num_rows($result_check_get);
		
		if ($sum_amount_aff == 0) {
			$message['status'] = "error";
			$message['info'] = "รายได้ปัจจุบัน ไม่เพียงพอ";
		}else{
			if($num_check_get > 0){
				$message['status'] = "error";
				$message['info'] = "ท่านรับของเดือน นี้ไปแล้ว";
			}else{
				
				$Status_Master = $Load_Master->Master_Deposit($_SESSION["UsernameUFA"],$sum_amount_aff);
				if (empty($Status_Master)) {
					$Status_Master = "error";
				}
				if ($Status_Master == "success") {
					$withdraw_aff_insert = $this->db->prepare("INSERT INTO withdrawaff (id_aff, username_aff, phone_aff, bank_aff, bankacc_aff, name_aff, confirm_aff, amount_aff) VALUES (:id_aff, :username_aff, :phone_aff, :bank_aff, :bankacc_aff,:name_aff, 'อนุมัติ', :amount)");			
					$withdraw_aff_insert->execute([':id_aff'=>$id_aff,':username_aff'=>$username_aff,':phone_aff'=>$phone_aff,':bank_aff'=>$bank_aff,':bankacc_aff'=>$bankacc_aff,':name_aff'=>$name_aff,':amount'=>$sum_amount_aff]);				
					$message['status'] = "success";
					$message['info'] = "รับยอดแนะนำเพื่อน เรียบร้อย";
				}else{
					$message['status'] = "error";
					$message['info'] = "ระบบมีปัญหา";
				}
			}
		}
		return $message;
	}
	

}

?>
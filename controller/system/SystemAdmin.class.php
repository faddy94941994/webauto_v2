 <?php 

include 'connectAdmin.class.php';
include_once 'config.db.php';
require_once("MasterClass.php");
require_once 'K-Bank.Class.php';
include 'TrueWallet.Class.php';

class system_admin extends pdo_mysql_admin{
	

	function __construct(){

		$this->db = $this->DB_PDO_ADMIN();
		$this->KBankApi = new KBankClass();
		//$this->TrueWalletApi = new iWallet();
		$this->ApiDB = new ConfigDB_Class();
		
		$this->Master = new MasterClass();
		
		
	}
	
	public function Return_Master(){
		return $this->Master;
	}
	
	public function SetupMysqli(){
		$Load_DB = $this->ApiDB;
		$mysqli_conn = mysqli_connect($Load_DB->DB_HOST,$Load_DB->DB_USER,$Load_DB->DB_PASS,$Load_DB->DB_NAME) or die("Error: " . mysqli_error($mysqli_conn));
		mysqli_query($mysqli_conn, "SET NAMES 'utf8' ");
		return $mysqli_conn;
	}
	
	public function Query_Mysqli($sql){
		$load = $this->SetupMysqli();
		$result = mysqli_query($load, $sql);
		return $result;
	}
	
	public function Query_PDO($sql){
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		return $stmt->fetch();
	}
	
	public function Return_LoadConfig(){
		$Load_DB = $this->ApiDB;
		return $Load_DB;
	}
	
	public function return_class_KBank(){
		
		return $this->KBankApi;
		
	}
	
	public function return_class_TrueWallet($number,$password,$pin){
		
		$TrueWalletApi = new iWallet($number,$password,$pin);
		
		return $TrueWalletApi;
		
	}
	
	
	public function generateRandomCode($length = 5) {

		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

		$charactersLength = strlen($characters);

		$randomString1 = '';
		$randomString2 = '';

		for ($i = 0; $i < $length; $i++) {

			$randomString1 .= $characters[rand(0, $charactersLength - 1)];
			$randomString2 .= $characters[rand(0, $charactersLength - 1)];

		}

		return $randomString1 . $randomString2;

	}
	
	public function load_mysqli_query(){
		
		$Load_DB = $this->ApiDB;
		$mysqli_conn = mysqli_connect($Load_DB->DB_HOST,$Load_DB->DB_USER,$Load_DB->DB_PASS,$Load_DB->DB_NAME) or die("Error: " . mysqli_error($mysqli_conn));
		mysqli_query($mysqli_conn, "SET NAMES 'utf8' ");
		
		return $mysqli_conn;
		
	}
	
	
	public function load_date_sql($sql){
		$get_conn = $this->load_mysqli_query();
		$query = $sql;
		$result = mysqli_query($get_conn, $query);
		return $result;
	}
	
	//report.php
	public function load_page_report(){
		
		$stmt = $this->db->prepare("SELECT * FROM deposit WHERE confirm_dp ='อนุมัติ' AND bankin_dp!='ไม่ถูกต้อง' ORDER BY id desc LIMIT 5");

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
	
	
	////////////////////////////////////////////////////////////
	
	public function run_update_sql($sql){
		
		$stmt = $this->db->prepare($sql);
		try {
			$stmt->execute();
			$message['status'] = "success";
		} catch (Exception $e) {
			$message['status'] = "error";
		}
		return $message;
		
	}
	
	public function run_delete_sql($sql){
		
		$stmt = $this->db->prepare($sql);
		try {
			$stmt->execute();
			$message['status'] = "success";
		} catch (Exception $e) {
			$message['status'] = "error";
		}
		return $message;
		
	}
	
	public function run_insert_sql($sql){
		
		$stmt = $this->db->prepare($sql);
		try {
			$stmt->execute();
			$message['status'] = "success";
		} catch (Exception $e) {
			$message['status'] = "error";
		}
		return $message;
		
	}
	
	public function load_db_date($sql){

		$stmt = $this->db->prepare($sql);

		$stmt->execute();

		return $stmt->fetch();

	}
	
	public function load_db_setting(){

		$stmt = $this->db->prepare("SELECT * FROM setting ORDER BY id DESC LIMIT 1");

		$stmt->execute();

		return $stmt->fetch();

	}
	
	public function profile_user($value){
		
		$Load_DB = $this->ApiDB;
		
		$value = str_replace($Load_DB->user_agent,"",$value);

		$stmt = $this->db->prepare("SELECT * FROM member WHERE username_mb = '".$value."'");

		$stmt->execute();

		return $stmt->fetch();

	}
	
	public function login($username_ad,$password_ad){
		
		$password_ad = md5($password_ad);
		
		$stmt = $this->db->prepare("SELECT * FROM admin WHERE username_ad = '".$username_ad."' and password_ad = '".$password_ad."' ");

		$stmt->execute();
		
		if ($stmt->rowcount() > 0) {

			$result = $stmt->fetch();
			$message['status'] = "success";
			$message['info'] = "เข้าสู่ระบบสำเร็จ";
			
			$_SESSION["id_ad"] = $result->id_ad;
            $_SESSION["name_ad"] =  $result->name_ad;
            $_SESSION["username_ad"] = $result->username_ad;
            $_SESSION["status_ad"] = $result->status_ad;
			$_SESSION["pin_bank"] = $result->pin_bank;
			
			$this->log_login_admin();
		}else{
			
			$message['status'] = "error";
			$message['info'] = "เข้าสู่ระบบไม่สำเร็จ";
			
		}
		return $message;
		
	}
	
	public function log_login_admin(){
		
		$GetBrowser = $this->getBrowser();
		$name_ad = $_SESSION["name_ad"];
		
		$OnSystem = $GetBrowser['platform'];
		$Browser = $GetBrowser['name']. " " .$GetBrowser['version'];
		
		$Ipaddress = $_SERVER['REMOTE_ADDR'];
		
		$sql = "INSERT INTO logadmin (name, Browser, OnSystem, Ipaddress) VALUES ('$name_ad', '$Browser', '$OnSystem', '$Ipaddress')";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		
	}
	
	
	public function getBrowser(){
		
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
		$bname = 'Unknown';
		$platform = 'Unknown';
		$version= "";
		if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		}
		elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		}
		elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'windows';
		}
		if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
		{
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		}
		elseif(preg_match('/Trident/i',$u_agent))
		{
			$bname = 'Internet Explorer';
			$ub = "rv";
		}
		elseif(preg_match('/Firefox/i',$u_agent))
		{
			$bname = 'Mozilla Firefox';
			$ub = "Firefox";
		}
		elseif(preg_match('/Edg/i',$u_agent))
		{
			$bname = 'Microsoft Edge';
			$ub = "Edg";
		}
		elseif(preg_match('/Chrome/i',$u_agent))
		{
			$bname = 'Google Chrome';
			$ub = "Chrome";
		}
		elseif(preg_match('/Safari/i',$u_agent))
		{
			$bname = 'Apple Safari';
			$ub = "Safari";
		}
		elseif(preg_match('/Opera/i',$u_agent))
		{
			$bname = 'Opera';
			$ub = "Opera";
		}
		elseif(preg_match('/Netscape/i',$u_agent))
		{
			$bname = 'Netscape';
			$ub = "Netscape";
		}
		$known = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) .
		 ')[/|: ]+(?<version>[0-9.|a-zA-Z.]*)#';
		if (!preg_match_all($pattern, $u_agent, $matches)) {
			
		}
		$i = count($matches['browser']);
		if ($i != 1) {
			if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
				$version= $matches['version'][0];
			}
			else {
				$version= $matches['version'][1];
			}
		}
		else {
			$version= $matches['version'][0];
		}
		if ($version==null || $version=="") {$version="?";}
		return array(
			'userAgent' => $u_agent,
			'name'      => $bname,
			'version'   => $version,
			'platform'  => $platform,
			'pattern'    => $pattern
		);
	}
	
	public function register_ad($date_api){
		extract($date_api);
		$check_register = $this->db->prepare("SELECT * FROM admin WHERE username_ad = '$username_ad' OR phone_ad = '$phone_ad' OR name_ad = '$name_ad'");
		$check_register->execute();
		if ($check_register->rowcount() > 0) {
			
			$result = $check_register->fetch();
			if ($result->username_ad == $username_ad) {
				$message['status'] = "error";
				$message['info'] = "ยูสเซอร์เนมนี้ซ้ำ";
			}elseif ($result->phone_ad == $phone_ad) {
				$message['status'] = "error";
				$message['info'] = "เบอร์โทรศัพท์นี้ซ้ำ";
			}elseif ($result->name_ad == $name_ad) {				
				$message['status'] = "error";
				$message['info'] = "ชื่อ-นามสกุลนี้ซ้ำ";
			}

		}else{
			
			$message['status'] = "success";
			$message['info'] = "เพิ่มแอดมินสำเร็จ";
			$password_ad = md5($password_ad);
			$sql = "INSERT INTO admin (username_ad, password_ad, phone_ad, status_ad, name_ad)
			 VALUES('$username_ad', '$password_ad', '$phone_ad', '$status_ad','$name_ad')";
			$stmt = $this->db->prepare($sql);
			try {
				$stmt->execute();
				$message['status'] = "success";
				$message['info'] = "เพิ่มแอดมินสำเร็จ";
			} catch (Exception $e) {
				$message['status'] = "error";
				$message['info'] = "เพิ่มแอดมิน ไม่สำเร็จ";
			} 
			 
		}
		
		return $message;

	}
	
	public function register_mb($date_api){
		extract($date_api);
		
		date_default_timezone_set("Asia/Bangkok");
		$date = date("Y-m-d H:i:s");
		$date_mb = $date;
		
		$check_register = $this->db->prepare("SELECT * FROM member WHERE phone_mb = '$phone_mb' OR bankacc_mb = '$bankacc_mb' OR name_mb = '$name_mb' OR phone_true = '$phone_true'");
		$check_register->execute();
		if ($check_register->rowcount() > 0) {
			
			$result = $check_register->fetch();
			if ($result->phone_mb == $phone_mb) {
				$message['status'] = "error";
				$message['info'] = "เบอร์โทรศัพท์นี้ซ้ำ";
			}elseif ($result->bankacc_mb == $bankacc_mb) {
				$message['status'] = "error";
				$message['info'] = "บัญชีธนาคารนี้ซ้ำ";
			}elseif ($result->name_mb == $name_mb) {				
				$message['status'] = "error";
				$message['info'] = "ชื่อ-นามสกุลนี้ซ้ำ";
			}elseif ($result->phone_true == $phone_true) {				
				$message['status'] = "error";
				$message['info'] = "ไอดีทรูวอเล็ตนี้ซ้ำ";	
			}

		}else{
			
			$sql = "UPDATE member SET  
            password_mb='$password_mb' , 
            phone_mb='$phone_mb' ,
            phone_true='$phone_true' ,
            bank_mb='$bank_mb' ,
            bankacc_mb='$bankacc_mb' ,
            name_mb='$name_mb' ,
            status_mb = '$status_mb' ,
			add_mb = '$add_mb' ,
            confirm_mb = '1',
            date_mb = '$date_mb' 
            WHERE phone_mb='' ORDER BY id_mb ASC LIMIT 1";
			
			$stmt = $this->db->prepare($sql);
			try {
				$stmt->execute();
				$message['status'] = "success";
				$message['info'] = "สมัครสมาชิกสำเร็จ";
			} catch (Exception $e) {
				$message['status'] = "error";
				$message['info'] = "สมัครสมาชิก ไม่สำเร็จ";
			}
			
		}
		
		return $message;
	}
	
	//รับค่าจากหน้า setting
	public function api_setting($date_api){
		extract($date_api);
		
		if (empty($rules)) {
			$rules="";
		}
		
		$sql = "UPDATE setting SET  
            name_web='$name_web' , 
            logo_web='$logo_web' ,
            pic_favicon= '$pic_favicon' ,
			pic_favicon_icon= '$pic_favicon_icon' ,
            slide_1='$slide_1' ,
            slide_2='$slide_2' ,
            lineoa='$lineoa' ,
            lineregister='$lineregister' ,
            linedeposit = '$linedeposit' ,
            linewithdraw = '$linewithdraw' ,
            cashback = '$cashback' ,
            affcashback='$affcashback' ,
            link_web='$link_web' ,
            link_aff= '$link_aff' ,
            rules = '$rules' ,
            set_dp = '$set_dp' ,
            set_wd = '$set_wd' ,
            status_auto = '$status_auto' ,
            status_auto2 = '$status_auto2' ,
            max_autowd= '$max_autowd'
            WHERE id=1 ";
		$stmt = $this->db->prepare($sql);
		try {
			$stmt->execute();
			$message['status'] = "success";
			$message['info'] = "แก้ไขเว็ปไซด์เรียบร้อย";
		} catch (Exception $e) {
			$message['status'] = "error";
			$message['info'] = "แก้ไขเว็ปไซด์ ไม่สำเร็จ";
		}
		return $message;
	}
	
	
	
	public function api_settingwheel($date_api){
		extract($date_api);
		
		$sql = "UPDATE setting SET  
            reward1='$reward1' , 
            reward2='$reward2' ,
            reward3='$reward3' ,
            reward4='$reward4' ,
            reward5='$reward5' ,
            reward6='$reward6' ,
            reward7='$reward7' ,
            reward8='$reward8' ,
            Change1='$Change1' ,
            Change2='$Change2' ,
            Change3='$Change3' ,
            Change4='$Change4' ,
            Change5='$Change5' ,
            Change6='$Change6' ,
            Change7='$Change7' ,
            Change8='$Change8' ,
            Image1='$Image1' ,
            Image2='$Image2' ,
            Image3='$Image3' ,
            Image4='$Image4' ,
            Image5='$Image5' ,
            Image6='$Image6' ,
            Image7='$Image7' ,
            Image8='$Image8' ,
            dp_creditspin='$dp_creditspin' ,
            change_point= '$change_point'
            WHERE id=1 ";
		$stmt = $this->db->prepare($sql);
		try {
			$stmt->execute();
			$message['status'] = "success";
			$message['info'] = "แก้ไขเว็ปไซด์เรียบร้อย";
		} catch (Exception $e) {
			$message['status'] = "error";
			$message['info'] = "แก้ไขเว็ปไซด์ ไม่สำเร็จ";
		}
		return $message;
	}
	
	public function api_bank($date_api){
		if(isset($_SESSION['id_ad'])){
			extract($date_api);
			$sql = "INSERT INTO bank (name_bank, fileupload_bank, bankacc_bank, nameacc_bank, bankfor, status_bank)
				 VALUES('$name_bank', '$name_bank', '$bankacc_bank', '$nameacc_bank', '$bankfor', '$status_bank')";
				 
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$message['status'] = "success";
			$message['info'] = "เพิ่มข้อมูลเรียบร้อย";
			return $message;
		}
	}
	
	public function api_promotion($date_api){
		if(isset($_SESSION['id_ad'])){
			extract($date_api);
			date_default_timezone_set('Asia/Bangkok');
			$date = date("Ymd");
			$numrand = (mt_rand());
			$upload = $date_api['fileupload_pro'];
			
			$filenamecheck = $date_api['fileupload_pro']['name'];
			$ext = pathinfo($filenamecheck, PATHINFO_EXTENSION);
			if ($ext !== 'png' && $ext !== 'jpg') {
				$message['status'] = "error";
				$message['info'] = "เพิ่มข้อมูล ไม่สำเร็จ";
			}else{
				if($upload <> '') {
					$path="slip/";  
					$type = strrchr($date_api['fileupload_pro']['name'],".");
					$newname = $date.$numrand.$type;
					$path_copy = $path.$newname;
					$path_link="slip/".$newname;
					move_uploaded_file($date_api['fileupload_pro']['tmp_name'],$path_copy);
				}
				
				$sql = "INSERT INTO promotion (name_pro, fileupload_pro, dp_pro, bonus_pro, games_pro, turn_pro, rules_pro, wd_pro, time_pro, bonusper_pro, max_pro, status_pro, showpic)
					 VALUES('$name_pro', '$newname', '$dp_pro', '$bonus_pro', '$games_pro', '$turn_pro', '$rules_pro', '$wd_pro', '$time_pro', '$bonusper_pro', '$max_pro', '$status_pro', '$showpic')";
			 
					 
				$stmt = $this->db->prepare($sql);
				$stmt->execute();
				$message['status'] = "success";
				$message['info'] = "เพิ่มข้อมูลเรียบร้อย";
			}
			return $message;
		}
	}
	
	public function build_Code_Reward($reward,$turnover){
		
		$GenerateCode = $this->generateRandomCode();

		$GenerateCode_insert = $this->db->prepare("INSERT INTO code_reward (code, reward, turnover) VALUES (:code, :reward, :turnover)");
									
		try {
			$GenerateCode_insert->execute([':code'=>$GenerateCode,':reward'=>$reward,':turnover'=>$turnover]);
									
			$message['status'] = "success";
			$message['info'] = "สร้างโค้ด เรียบร้อย";
					
		} catch (Exception $e) {
			$message['status'] = "error";
			$message['info'] = $e->getmessage();
		}
		
		return $message;

	}
	
	public function load_credit_sms()
	{
		
		$Load_DB = $this->ApiDB;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://thsms.com/api/me');
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		$headers = array('Authorization: Bearer '.$Load_DB->TOKEN_SMS, 'Content-Type: application/json');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		$res = json_decode($result, true);
		curl_close($ch);
		return $res['data']['wallet']['credit'];
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
	

}

?>
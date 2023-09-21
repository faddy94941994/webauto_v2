<?php
include_once 'config.db.php';
class MasterClass
{
	private $LoadConfig;
	private $user_agent;
	private $api_betflix;
	private $api_key;
	public function __construct() {
		
		$this->LoadConfig = new ConfigDB_Class();
		$Load_DB = $this->LoadConfig;
		
		$this->user_agent = $Load_DB->user_agent;
		$this->api_betflix = $Load_DB->api_betflix;
		$this->api_key = $Load_DB->api_key;
		
	}
	
	public function RandomStringRef($length = 5) {
		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString1 = '';
		$randomString2 = '';
		$randomString3 = '';
		$randomString4 = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString1 .= $characters[rand(0, $charactersLength - 1)];
			$randomString2 .= $characters[rand(0, $charactersLength - 1)];
			$randomString3 .= $characters[rand(0, $charactersLength - 1)];
			$randomString4 .= $characters[rand(0, $charactersLength - 1)];
		}
		return "TermTem88_" . $randomString1 . "_" . $randomString2 . "_" . $randomString3 . "_" . $randomString4;
	}
	
	
	public function Master_Balance_Refresh($username){
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.bfx.fail/v4/user/balance',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'username='.$username,
			CURLOPT_HTTPHEADER => array(
				'x-api-betflix: '.$this->api_betflix,
				'x-api-key: '.$this->api_key,
				'Content-Type: application/x-www-form-urlencoded'
			),
		));
		$response = curl_exec($curl);
		curl_close($curl);
		if(curl_errno($curl)){
			$message['status'] = "error";
			$message['Balance'] = "0.00";
			$_SESSION["Balance"] = "0.00";
		}else{
			$status_response = json_decode($response);
			if($status_response->status == 'success'){
				$message['status'] = "success";
				$message['Balance'] = $status_response->data->balance;
				$_SESSION["Balance"] = $status_response->data->balance;
			}else{
				$message['status'] = "error";
				$message['Balance'] = "0.00";
				$_SESSION["Balance"] = "0.00";
			}
		}
		return $message;
	}
	
	public function Master_Balance($username){
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.bfx.fail/v4/user/balance',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'username='.$username,
			CURLOPT_HTTPHEADER => array(
				'x-api-betflix: '.$this->api_betflix,
				'x-api-key: '.$this->api_key,
				'Content-Type: application/x-www-form-urlencoded'
			),
		));
		$response = curl_exec($curl);
		curl_close($curl);
		if(curl_errno($curl)){
			return "0.00";
		}else{
			$status_response = json_decode($response);
			if($status_response->status == 'success'){
				return $status_response->data->balance;
			}else{
				return "0.00";
			}
		}
	}
	
	public function Master_Withdraw($username,$credit){

		$ran = $this->RandomStringRef();
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.bfx.fail/v4/user/transfer',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'username='.$username.'&amount=-'.$credit.'&ref=with'.$ran,
			CURLOPT_HTTPHEADER => array(
				'x-api-betflix: '.$this->api_betflix,
				'x-api-key: '.$this->api_key,
				'Content-Type: application/x-www-form-urlencoded'
			),
		));
		$response = curl_exec($curl);
		if(curl_errno($curl)){
			$status = "error";
		}else{
			$status_response = json_decode($response);
			if($status_response->status == 'success'){
				$status = "success";
			}else{
				$status = "error";
			}
		}
		curl_close($curl);
		return $status;

	}
	
	public function Master_Deposit($username,$credit){
		
		$ran = $this->RandomStringRef();
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.bfx.fail/v4/user/transfer',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'username='.$username.'&amount='.$credit.'&ref=dps'.$ran,
			CURLOPT_HTTPHEADER => array(
				'x-api-betflix: '.$this->api_betflix,
				'x-api-key: '.$this->api_key,
				'Content-Type: application/x-www-form-urlencoded'
			),
		));
		$response = curl_exec($curl);
		if(curl_errno($curl)){
			$status = "error";
		}else{
			$status_response = json_decode($response);
			if($status_response->status == 'success'){
				$status = "success";
			}else{
				$status = "error";
			}
		}
		curl_close($curl);
		return $status;

	}
	
	public function Master_Agent(){
		
		$headers = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'x-api-betflix: '.$this->api_betflix;
		$headers[] = 'x-api-key: '.$this->api_key;
		
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.bfx.fail/v4/agent/balance?upline='.$this->user_agent);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
        $response = curl_exec($curl);
		curl_close($curl);
		if(curl_errno($curl)){
			return "error";
		}else{
			$status_response = json_decode($response);
			if($status_response->status == 'success'){
				return $status_response->data->total_credit;
			}else{
				return "error";
			}
		}
		
	}
	
	public function Master_TurnOver($Username){
		
		date_default_timezone_set("Asia/Bangkok");
		$start_date=date('Y-m-d',strtotime('-1 day'));
		$end_date=date('Y-m-d',strtotime('-1 day'));
		
		$headers = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'x-api-betflix: '.$this->api_betflix;
		$headers[] = 'x-api-key: '.$this->api_key;
		
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.bfx.fail/v4/report/summary?start='.$start_date.'&end='.$end_date.'&username='.$Username);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
        $response = curl_exec($curl);
		curl_close($curl);
		if(curl_errno($curl)){
			return "error";
		}else{
			$status_response = json_decode($response);
			if($status_response->status == 'success'){
				return $status_response->data->winloss;
			}else{
				return "error";
			}
		}
		
	}
	
	public function Register_Agent($username,$password){
		
		$headers = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'x-api-betflix: '.$this->api_betflix;
		$headers[] = 'x-api-key: '.$this->api_key;
		
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.bfx.fail/v4/user/register');
        curl_setopt($curl, CURLOPT_POSTFIELDS, 'username='.$username.'&password='.$password);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
        $response = curl_exec($curl);
		curl_close($curl);
		if(curl_errno($curl)){
			return "error";
		}else{
			$status_response = json_decode($response);
			return $status_response->status;
		}
		
	}
	
	public function CheckBet($username,$startdate,$enddate){
		
		$headers = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'x-api-betflix: '.$this->api_betflix;
		$headers[] = 'x-api-key: '.$this->api_key;
		
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.bfx.fail/v4/user/creditHistory?username='.$username.'&start='.$startdate.'&end='.$enddate);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
        $response = curl_exec($curl);
		curl_close($curl);
		if(curl_errno($curl)){
			return "error";
		}else{
			return $response;
		}
	}
	
	public function PlayGame($Username,$NameGame,$CodeGame){
		
		$headers = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'x-api-betflix: '.$this->api_betflix;
		$headers[] = 'x-api-key: '.$this->api_key;
		
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.bfx.fail/v4/play/login');
        curl_setopt($curl, CURLOPT_POSTFIELDS, 'username='.$Username.'&provider='. $NameGame .'&gamecode='. $CodeGame .'&language=thai');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
        $response = curl_exec($curl);
		
		if(curl_errno($curl)){
			$message['status'] = "error";
			$message['launch_url'] = "";
		}else{
			$date_decode = json_decode($response);
			$date_response = $date_decode->data->launch_url;
			$message['status'] = "success";
			$message['launch_url'] = $date_response;
		}
		curl_close($curl);
		return $message;
		
	}
	
	public function Step_Play($Username,$NameGame,$CodeGame){
		
		$headers = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'x-api-betflix: '.$this->api_betflix;
		$headers[] = 'x-api-key: '.$this->api_key;
		
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.bfx.fail/v4/play/login');
		curl_setopt($curl, CURLOPT_POSTFIELDS, 'username='.$Username.'&provider='. $NameGame .'&gamecode='. $CodeGame .'&language=thai&openGame=true');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
        $response = curl_exec($curl);
		
		if(curl_errno($curl)){
			$message['status'] = "error";
			$message['launch_url'] = "";
		}else{
			$date_decode = json_decode($response);
			$date_response = $date_decode->data->launch_url;
			$message['status'] = "success";
			$message['launch_url'] = $this->Step_Play_1($date_response,$CodeGame);
		}
		curl_close($curl);
		return $message;
		
	}
	
	public function Step_Play_1($Url,$CodeGame){
		
		$headers = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
		
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $Url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
		curl_setopt($curl, CURLOPT_NOBODY, true);
		curl_setopt($curl, CURLOPT_HEADER, true);
		
		$response = curl_exec($curl);
        $target = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);
		curl_close($curl);
		return $this->Step_Play_2($target,$CodeGame);
		
	}
	
	public function Step_Play_2($Url,$CodeGame){
		
		$Url = str_replace("/0/", "/".$CodeGame."/", $Url);
		$Url = str_replace("www.betflix2.com", $_SERVER['SERVER_NAME']."/game", $Url);
		return $Url;
		
	}
	

	
	
	
	
	
	
	
}
?> 
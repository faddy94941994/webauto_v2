<?php
require_once 'config.db.php';
class KBankClass
{
	private $endpoint;
	private $endpoint2;
	function __construct()
	{
		$Apiendpoint = new ConfigDB_Class();
		$this->endpoint = $Apiendpoint->ENDPOINT;
		$this->endpoint2 = $Apiendpoint->ENDPOINT2;
	}

	public function CheckCode($value)
	{
		if ($value == "ธ.ไทยพาณิชย์") {
			return '010';
		}

		if ($value == "ธ.กรุงเทพ") {
			return '003';
		}

		if ($value == "ธ.กสิกรไทย") {
			return '001';
		}

		if ($value == "ธ.กรุงไทย") {
			return '004';
		}

		if ($value == "ธ.ทหารไทยธนชาติ") {
			return '007';
		}

		if ($value == "ธ.กรุงศรีอยุธยา") {
			return '017';
		}
		if ($value == "ธ.ออมสิน") {
			return '022';
		}

		if ($value == "ธ.ก.ส.") {
			return '026';
		}

		if ($value == "ธ.ซีไอเอ็มบีไทย") {
			return '018';
		}

		if ($value == "ธ.เกียรตินาคินภัทร") {
			return '023';
		}

		if ($value == "ธ.ทิสโก้") {
			return '029';
		}

		if ($value == "ธ.ยูโอบี") {
			return '016';
		}

		if ($value == "ธ.อิสลาม") {
			return '028';
		}

		if ($value == "ธ.ไอซีบีซี") {
			return '030';
		}
	}

	public function LoadNameBank($toBankCode, $toAccount, $amount)
	{

		$New_toBankCode = $this->CheckCode($toBankCode);

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://' . $this->endpoint2 . '/inquire-for-transfer-money/',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'toBankCode=' . $New_toBankCode . '&toAccount=' . $toAccount . '&amount=' . $amount,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded'
			),
		));
		$result = curl_exec($curl);
		curl_close($curl);
		if (curl_errno($curl)) {
			$message['status'] = "error";
			$message['info'] = "error_curl";
		} else {
			$data = json_decode($result, true);
			$message['status'] = "success";
			$message['info'] = $data['toAccountName'];
		}
		return $message;
	}

	public function getBalance1111()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://' . $this->endpoint . '/balance');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			return array();
		}
		return json_decode($result, true);
	}

	public function getBalance()
	{
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL => 'http://' . $this->endpoint . '/balance',
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_SSL_VERIFYPEER => false
		));
		$result = curl_exec($ch);
		curl_close($ch);
		if (curl_errno($ch)) {
			return array();
		}
		return json_decode($result, true);
	}

	//ดึงรายการ
	public function getTransactions()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://' . $this->endpoint . '/activities');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			return array();
		}
		return json_decode($result, true);
	}

	//ดึงรายการ เจาะจง
	public function getTransactionDetail($rqUid)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://' . $this->endpoint . '/activity-detail/' . $rqUid);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			return array();
		}
		return json_decode($result, true);
	}

	//ตรวจสอบผู้รับก่อนโอนเงิน
	public function transferVerify($toBankCode, $toAccount, $amount){
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'http://' . $this->endpoint . '/inquire-for-transfer-money/',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_SSL_VERIFYHOST => false,
		  CURLOPT_SSL_VERIFYPEER => false,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => 'toBankCode='.$toBankCode.'&toAccount='.$toAccount.'&amount='.$amount,
		  CURLOPT_HTTPHEADER => array(
			'Content-Type: application/x-www-form-urlencoded'
		  ),
		));
		$result = curl_exec($curl);
        $data =  json_decode($result, true);
        if (curl_errno($curl)) {
            return ['status' => false, 'msg' => $data];
        }
        return $data;

	}

	//ยืนยันโอนเงิน


    public function transferConfrim($kbankInternalSessionId)
    {
        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://' . $this->endpoint . '/transfer-money78/' . $kbankInternalSessionId);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return json_decode($result, true);
        }
        curl_close($ch);
        return json_decode($result, true);
    }
	
	public function QR($file)
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://' . $this->endpoint . '/scan-qrcode',
			CURLOPT_ENCODING => "UTF-8",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array('image' => new CURLFILE("./" . $file)),

		));
		$response = curl_exec($curl);

		if (curl_errno($curl)) {
			return ['status' => false, 'msg' => $response];
		}
		curl_close($curl);
		return json_decode($response, 1);
	}
}

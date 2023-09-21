<?php
error_reporting(0);
$Load_Master = $class_admin->Return_Master();
date_default_timezone_set("Asia/Bangkok");
$sql = "SELECT * FROM member WHERE phone_mb = ''";
$result = $class_admin->Query_Mysqli($sql);
$num = mysqli_num_rows($result);

function RandomUsername($length = 5) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

if ($num < 50) {
	$username = RandomUsername(); 
	$password = urlencode('aa123456');

	// echo $username;
	// echo '<br>';
	// echo $password;
	// echo '<br>';
	// echo '<br>';
	$status = $Load_Master->Register_Agent($username,$password);

	if($status == "success"){
		
		$sql = "INSERT INTO member (username_mb, password_ufa)
		   VALUES('$username', '$password')";
		   
		if ($class_admin->Query_Mysqli($sql) === true) {
			//echo"สต็อกยูสเซอร์ สำเร็จ";
		}else{
			//echo "สต็อกยูสเซอร์ เข้า DB ไม่ได้";
		}
		
	}else{
		//echo "สต็อกยูสเซอร์ ไม่ได้";
	}

}else{
	//echo 'สต็อกยูสเซอร์เต็มแล้ว';
}
$message['info'] = $num + 1;
$message['DateGet'] = date("Y-m-d H:i:s");
echo json_encode($message);

?>
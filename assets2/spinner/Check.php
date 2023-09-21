<?php
session_start();
header('Access-Control-Allow-Origin: *');
require "Setting.php";
require "connect.php";
use Nullix\CryptoJsAes\CryptoJsAes;
require "CryptoJsAes.php";
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
	//End Session if Direct access
	exit('is not allowed ?');
}

date_default_timezone_set("Asia/Bangkok");
$Today = date("Y/m/d H:i:s");



function f_query($V_Table, $V_ID, $condb) 
{  
	$CheckCredit = mysqli_query($condb, "SELECT * FROM $V_Table WHERE id_mb = $V_ID");
	$CheckCredit_Row = mysqli_fetch_array($CheckCredit);
	$Credit = $CheckCredit_Row['creditspin'];
	$Point = $CheckCredit_Row['point'];
	return array( $Credit, $Point );
}



function w_rand($samples, $weights) 
{  
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



$CheckCredit = mysqli_query($conn, "SELECT * FROM $S_Table_Accounts WHERE id_mb = $S_SESSION_ID");
$CheckCredit_Row = mysqli_fetch_array($CheckCredit);
$Credit = $CheckCredit_Row[$S_Credit_Column];

if ($Credit < $S_CreditToPlay) {
	$message['statu'] = "No_Credit";
	$message['message'] = '<i class="fas fa-times-circle"></i> สิทธิ์การหมุนไม่เพียงพอ!!!';
}else{
	
	$message['statu'] = "success";
	mysqli_query($conn, "UPDATE $S_Table_Accounts SET $S_Credit_Column = $S_Credit_Column - $S_CreditToPlay WHERE id_mb = $S_SESSION_ID");
	
	
	$CheckRandom = mysqli_query($conn, "SELECT * FROM $S_Table_Setting WHERE id = '1'");
	$CheckRandom_Row = mysqli_fetch_array($CheckRandom);
	
	$weights = array($CheckRandom_Row['Change1'],$CheckRandom_Row['Change2'],$CheckRandom_Row['Change3'],$CheckRandom_Row['Change4'],$CheckRandom_Row['Change5'],$CheckRandom_Row['Change6'],$CheckRandom_Row['Change7'],$CheckRandom_Row['Change8']);
	$samples = array(1,3,4,5,7,8,2,6);
	$response_Random = w_rand($samples, $weights);
	$message['response'] = $response_Random;
	
	$reward1 = $CheckRandom_Row['reward1'];
	$reward2 = $CheckRandom_Row['reward2'];
	$reward3 = $CheckRandom_Row['reward3'];
	$reward4 = $CheckRandom_Row['reward4'];
	$reward5 = $CheckRandom_Row['reward5'];
	$reward6 = $CheckRandom_Row['reward6'];
	$reward7 = $CheckRandom_Row['reward7'];
	$reward8 = $CheckRandom_Row['reward8'];
	
	if ($response_Random == 1){
		$message['message'] = '<i class="fas fa-check-circle"></i> ยินดีด้วยคุณได้ '.$CheckRandom_Row['reward1']. ' ' .$S_Text_Reward;
		mysqli_query($conn, "INSERT INTO $S_Table_History (reward,username,time) VALUES ('$reward1','$S_SESSION_Username','$Today')");
		mysqli_query($conn, "UPDATE $S_Table_Accounts SET $S_Reward_Column = $S_Reward_Column + $reward1 WHERE id_mb = $S_SESSION_ID");
	}elseif ($response_Random == 2){
		$message['message'] = '<i class="fas fa-check-circle"></i> ยินดีด้วยคุณได้ '.$CheckRandom_Row['reward7'];
		mysqli_query($conn, "INSERT INTO $S_Table_History (reward,username,time) VALUES ('$reward7','$S_SESSION_Username','$Today')");

	}elseif ($response_Random == 3){
		$message['message'] = '<i class="fas fa-check-circle"></i> ยินดีด้วยคุณได้ '.$CheckRandom_Row['reward2']. ' ' .$S_Text_Reward;
		mysqli_query($conn, "INSERT INTO $S_Table_History (reward,username,time) VALUES ('$reward2','$S_SESSION_Username','$Today')");
		mysqli_query($conn, "UPDATE $S_Table_Accounts SET $S_Reward_Column = $S_Reward_Column + $reward2 WHERE id_mb = $S_SESSION_ID");
	}elseif ($response_Random == 4){
		$message['message'] = '<i class="fas fa-check-circle"></i> ยินดีด้วยคุณได้ '.$CheckRandom_Row['reward3']. ' ' .$S_Text_Reward;
		mysqli_query($conn, "INSERT INTO $S_Table_History (reward,username,time) VALUES ('$reward3','$S_SESSION_Username','$Today')");
		mysqli_query($conn, "UPDATE $S_Table_Accounts SET $S_Reward_Column = $S_Reward_Column + $reward3 WHERE id_mb = $S_SESSION_ID");
	}elseif ($response_Random == 5){
		$message['message'] = '<i class="fas fa-check-circle"></i> ยินดีด้วยคุณได้ '.$CheckRandom_Row['reward4']. ' ' .$S_Text_Reward;
		mysqli_query($conn, "INSERT INTO $S_Table_History (reward,username,time) VALUES ('$reward4','$S_SESSION_Username','$Today')");
		mysqli_query($conn, "UPDATE $S_Table_Accounts SET $S_Reward_Column = $S_Reward_Column + $reward4 WHERE id_mb = $S_SESSION_ID");
	}elseif ($response_Random == 6){
		$message['message'] = '<i class="fas fa-check-circle"></i> ยินดีด้วยคุณได้ '.$CheckRandom_Row['reward8'];
		mysqli_query($conn, "INSERT INTO $S_Table_History (reward,username,time) VALUES ('$reward8','$S_SESSION_Username','$Today')");
	}elseif ($response_Random == 7){
		$message['message'] = '<i class="fas fa-check-circle"></i> ยินดีด้วยคุณได้ '.$CheckRandom_Row['reward5']. ' ' .$S_Text_Reward;
		mysqli_query($conn, "INSERT INTO $S_Table_History (reward,username,time) VALUES ('$reward5','$S_SESSION_Username','$Today')");
		mysqli_query($conn, "UPDATE $S_Table_Accounts SET $S_Reward_Column = $S_Reward_Column + $reward5 WHERE id_mb = $S_SESSION_ID");
	}elseif ($response_Random == 8){
		$message['message'] = '<i class="fas fa-check-circle"></i> ยินดีด้วยคุณได้ '.$CheckRandom_Row['reward6']. ' ' .$S_Text_Reward;
		mysqli_query($conn, "INSERT INTO $S_Table_History (reward,username,time) VALUES ('$reward6','$S_SESSION_Username','$Today')");
		mysqli_query($conn, "UPDATE $S_Table_Accounts SET $S_Reward_Column = $S_Reward_Column + $reward6 WHERE id_mb = $S_SESSION_ID");
		
	}
	
	
	
	
	$Get_Credit_Point = f_query($S_Table_Accounts, $S_SESSION_ID, $conn);
	
	$_SESSION['creditspin'] = $Get_Credit_Point[0];
	$message['Credit'] = $_SESSION['creditspin'];
	$_SESSION['point'] = $Get_Credit_Point[1];
	$message['Point'] = $_SESSION['point'];
	
	
}

$dete_call = json_encode($message);
$encrypted = CryptoJsAes::encrypt($dete_call, $LICENSE);
echo $encrypted;
?>
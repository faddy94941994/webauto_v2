<?php 
require_once 'config.db.php';
date_default_timezone_set('Asia/Bangkok');
class pdo_mysql_admin{
	
	public function DB_PDO_ADMIN(){
		
		$Load_DB = new ConfigDB_Class();
		
		$opt = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
			PDO::ATTR_EMULATE_PREPARES => FALSE,
		);
		$dsn = "mysql:host=" . $Load_DB->DB_HOST . ';dbname=' . $Load_DB->DB_NAME . ';charset=utf8';
		try {
			$pdo_connect = new PDO($dsn, $Load_DB->DB_USER, $Load_DB->DB_PASS, $opt);
		} catch (Exception $e) {
			$pdo_connect = $e->GetMessage();
		}
		return $pdo_connect;
	}
	
}

  

?>
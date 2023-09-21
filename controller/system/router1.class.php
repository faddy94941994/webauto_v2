<?php

include 'controller/system/AltoRouter.class.php';

include 'system.class.php';
include 'SystemAdmin.class.php';




class router{

	function __construct(){

		$this->router = new AltoRouter();

	}

	public function start_router(){

		$this->load_router();

		$this->end_router();
		

	}

	private function load_router(){
		
		
		$this->router->map( "GET", "/system/run/CheckKbank", function(){
			$this->loadsystemapi("system/CheckKbank");
		});
		$this->router->map( "GET", "/system/run/AddKbank", function(){
			$this->loadsystemapi("system/add_kbank");
		});
		$this->router->map( "GET", "/system/run/Crontopupkbank", function(){
			$this->loadsystemapi("system/Crontopupkbank");
		});
		$this->router->map( "GET", "/system/run/Agent", function(){
			$this->loadsystemapi("system/Agent");
		});
		$this->router->map( "GET", "/system/run/Register", function(){
			$this->loadsystemapi("system/Register");
		});
		$this->router->map( "GET", "/Auto", function(){
			$this->loadsystemapi("system/Auto");
		});
		$this->router->map( "GET", "/system/run/tw4", function(){
			$this->loadsystemapi("system/tw4");
		});
		$this->router->map( "GET", "/system/run/tw5", function(){
			$this->loadsystemapi("system/tw5");
		});
		$this->router->map( "GET", "/system/run/CheckTrue", function(){
			$this->loadsystemapi("system/CheckTrue");
		});
		$this->router->map( "GET", "/system/run/AddTrue", function(){
			$this->loadsystemapi("system/AddTrue");
		});
		$this->router->map( "GET", "/system/run/WalletWithdraw", function(){
			$this->loadsystemapi("system/WalletWithdraw");
		});
		

		
		if (empty($_SESSION['id_mb'])) {
			
			$this->router->map( "GET", "/", function(){
				$this->loadpage("home");
			});
			
			$this->router->map( "GET", "/login", function(){
				$this->loadpage("login");
			});
			$this->router->map( "GET", "/register", function(){
				$this->loadpage("register");
			});
			$this->router->map( "GET", "/promotion", function(){
				$this->loadpage("promotion");
			});
			$this->router->map( "GET", "/verify", function(){
				$this->loadpage("verify");
			});
			
			//=================API===================
			$this->router->map( "POST", "/api/v2/register", function(){
				$this->loadapi("register");
			});
			
			$this->router->map( "POST", "/api/v2/registerotp", function(){
				$this->loadapi("registerotp");
			});
			$this->router->map( "POST", "/api/v2/ResendOTP", function(){
				$this->loadapi("ResendOTP");
			});
			$this->router->map( "POST", "/api/v2/VerifyOTP", function(){
				$this->loadapi("VerifyOTP");
			});
			
			$this->router->map( "POST", "/api/v2/login", function(){
				$this->loadapi("login");
			});
			
		}else{
			
			
			$this->router->map( "GET", "/", function(){
				$this->loadpage("wallet");
			});
			$this->router->map( "GET", "/wallet", function(){
				$this->loadpage("wallet");
			});
			$this->router->map( "GET", "/game", function(){
				$this->loadpage("game");
			});
			
			$this->router->map( "GET", "/deposit", function(){
				$this->loadpage("deposit");
			});
			$this->router->map( "GET", "/deposithistory", function(){
				$this->loadpage("deposithistory");
			});
			$this->router->map( "GET", "/withdraw", function(){
				$this->loadpage("withdraw");
			});
			$this->router->map( "GET", "/withdrawhistory", function(){
				$this->loadpage("withdrawhistory");
			});
			$this->router->map( "GET", "/withdrawaff", function(){
				$this->loadpage("withdrawaff");
			});
			
			$this->router->map( "GET", "/spinner", function(){
				$this->loadpage("spinner");
			});
			$this->router->map( "GET", "/changespinner", function(){
				$this->loadpage("changespinner");
			});
			$this->router->map( "GET", "/diamond", function(){
				$this->loadpage("diamond");
			});
			$this->router->map( "GET", "/changediamond", function(){
				$this->loadpage("changediamond");
			});
			$this->router->map( "GET", "/cashback", function(){
				$this->loadpage("cashback");
			});
			$this->router->map( "GET", "/promotion", function(){
				$this->loadpage("promotion");
			});
			
			//=================API===================
			
			$this->router->map( "POST", "/api/v2/logout", function(){
				$this->loadapi("logout");
			});
			$this->router->map( "POST", "/api/v2/refresh_balance", function(){
				$this->loadapi("refresh_balance");
			});
			$this->router->map( "POST", "/api/v2/StartGame", function(){
				$this->loadapi("StartGame");
			});
			$this->router->map( "POST", "/api/v2/StartGameNew", function(){
				$this->loadapi("StartGameNew");
			});
			$this->router->map( "POST", "/api/v2/Spinner", function(){
				$this->loadapi("Spinner");
			});
			$this->router->map( "POST", "/api/v2/ChangeSpinner", function(){
				$this->loadapi("ChangeSpinner");
			});
			$this->router->map( "POST", "/api/v2/GetDiamond", function(){
				$this->loadapi("GetDiamond");
			});
			$this->router->map( "POST", "/api/v2/ChangeDiamond", function(){
				$this->loadapi("ChangeDiamond");
			});
			$this->router->map( "POST", "/api/v2/deposit_dp", function(){
				$this->loadapi("deposit_dp");
			});
			$this->router->map( "POST", "/api/v2/deposit_dp_new", function(){
				$this->loadapi("deposit_dp_new");
			});
			$this->router->map( "POST", "/api/v2/withdraw_wd", function(){
				$this->loadapi("withdraw_wd");
			});
			$this->router->map( "POST", "/api/v2/withdraw_cashback", function(){
				$this->loadapi("withdraw_cashback");
			});
			$this->router->map( "POST", "/api/v2/withdraw_aff", function(){
				$this->loadapi("withdraw_aff");
			});
			$this->router->map( "POST", "/api/v2/deletedeposit", function(){
				$this->loadapi("delete_deposit");
			});
			

			
		}
		
		
		
		
			
		if (empty($_SESSION['id_ad'])) {
			
			
			$this->router->map( "GET", "/admin/", function(){
				$this->loadpage_admin("index");
			});
			$this->router->map( "GET", "/admin/login", function(){
				$this->loadpage_admin("login");
			});
			
			//=================API===================
			$this->router->map( "POST", "/api/admin/login", function(){
				$this->loadapi_admin("login");
			});
			
		}else{
			
			
			$this->router->map( "GET", "/admin", function(){
				$this->loadpage_admin("index");
			});
			$this->router->map( "GET", "/admin/", function(){
				$this->loadpage_admin("index");
			});
			$this->router->map( "GET", "/admin/index", function(){
				$this->loadpage_admin("index");
			});
			
			$this->router->map( "GET", "/admin/logadmin", function(){
				$this->loadpage_admin("logadmin");
			});
			$this->router->map( "GET", "/admin/profile", function(){
				$this->loadpage_admin("profile");
			});
			$this->router->map( "GET", "/admin/report", function(){
				$this->loadpage_admin("report");
			});
			$this->router->map( "GET", "/admin/allmember", function(){
				$this->loadpage_admin("allmember");
			});
			$this->router->map( "GET", "/admin/addcredit", function(){
				$this->loadpage_admin("addcredit");
			});
			$this->router->map( "GET", "/admin/deletecredit", function(){
				$this->loadpage_admin("deletecredit");
			});
			$this->router->map( "GET", "/admin/settingweb", function(){
				$this->loadpage_admin("settingweb");
			});
			$this->router->map( "GET", "/admin/settingspinner", function(){
				$this->loadpage_admin("settingspinner");
			});
			$this->router->map( "GET", "/admin/settingbank", function(){
				$this->loadpage_admin("settingbank");
			});
			$this->router->map( "GET", "/admin/bankupdateform", function(){
				$this->loadpage_admin("bankupdateform");
			});
			$this->router->map( "GET", "/admin/settingstaff", function(){
				$this->loadpage_admin("settingstaff");
			});
			$this->router->map( "GET", "/admin/adminupdateform", function(){
				$this->loadpage_admin("adminupdateform");
			});
			$this->router->map( "GET", "/admin/settingpromotion", function(){
				$this->loadpage_admin("settingpromotion");
			});
			$this->router->map( "GET", "/admin/settingannounce", function(){
				$this->loadpage_admin("settingannounce");
			});
			$this->router->map( "GET", "/admin/settingslide", function(){
				$this->loadpage_admin("settingslide");
			});
			$this->router->map( "GET", "/admin/member", function(){
				$this->loadpage_admin("member");
			});
			$this->router->map( "GET", "/admin/userupdateform", function(){
				$this->loadpage_admin("userupdateform");
			});
			$this->router->map( "GET", "/admin/deposit", function(){
				$this->loadpage_admin("deposit");
			});
			$this->router->map( "GET", "/admin/deposit_history", function(){
				$this->loadpage_admin("deposit_history");
			});
			$this->router->map( "GET", "/admin/depositupdateform", function(){
				$this->loadpage_admin("depositupdateform");
			});
			$this->router->map( "GET", "/admin/withdraw", function(){
				$this->loadpage_admin("withdraw");
			});
			$this->router->map( "GET", "/admin/withdraw_history", function(){
				$this->loadpage_admin("withdraw_history");
			});
			$this->router->map( "GET", "/admin/withdrawupdateform", function(){
				$this->loadpage_admin("withdrawupdateform");
			});
			$this->router->map( "GET", "/admin/withdrawaffupdateform", function(){
				$this->loadpage_admin("withdrawaffupdateform");
			});
			$this->router->map( "GET", "/admin/withdrawaff", function(){
				$this->loadpage_admin("withdrawaff");
			});
			$this->router->map( "GET", "/admin/spin_history", function(){
				$this->loadpage_admin("spin_history");
			});
			$this->router->map( "GET", "/admin/changespin_history", function(){
				$this->loadpage_admin("changespin_history");
			});
			$this->router->map( "GET", "/admin/changediamond_history", function(){
				$this->loadpage_admin("changediamond_history");
			});
			$this->router->map( "GET", "/admin/scb_history", function(){
				$this->loadpage_admin("scb_history");
			});
			$this->router->map( "GET", "/admin/true_history", function(){
				$this->loadpage_admin("true_history");
			});
			$this->router->map( "GET", "/admin/kbank_history", function(){
				$this->loadpage_admin("kbank_history");
			});
			$this->router->map( "GET", "/admin/aff_report", function(){
				$this->loadpage_admin("aff_report");
			});
			$this->router->map( "GET", "/admin/promotionupdateform", function(){
				$this->loadpage_admin("promotionupdateform");
			});
			$this->router->map( "GET", "/admin/generatecode", function(){
				$this->loadpage_admin("generatecode");
			});
			
			
			$this->router->map( "GET", "/admin/withdrawformuser", function(){
				$this->loadpage_admin("withdrawform_user");
			});
			$this->router->map( "GET", "/admin/depositformuser", function(){
				$this->loadpage_admin("depositform_user");
			});
			
			
			$this->router->map( "POST", "/api/admin/logout", function(){
				$this->loadapi_admin("logout");
			});
			
			
			//=================API===================
			
			//=================API โอนเงินออก =============
			$this->router->map( "POST", "/api/admin/TransferKBank", function(){
				$this->loadapi_admin("TransferKBank");
			});
			$this->router->map( "POST", "/api/admin/TransferConfrimKBank", function(){
				$this->loadapi_admin("TransferConfrimKBank");
			});
			$this->router->map( "POST", "/api/admin/TransferSCB", function(){
				$this->loadapi_admin("TransferSCB");
			});
			//=======================================
			$this->router->map( "POST", "/api/admin/storestatus", function(){
				$this->loadapi_admin("store_status");
			});
			$this->router->map( "POST", "/api/admin/loadallmember", function(){
				$this->loadapi_admin("load_all_member");
			});
			$this->router->map( "POST", "/api/admin/loadstatusall", function(){
				$this->loadapi_admin("load_status_all");
			});
			$this->router->map( "POST", "/api/admin/register_mb", function(){
				$this->loadapi_admin("register_mb");
			});
			$this->router->map( "POST", "/api/admin/loaddatereport", function(){
				$this->loadapi_admin("load_date_report");
			});
			$this->router->map( "POST", "/api/admin/loaddeposithistory", function(){
				$this->loadapi_admin("load_deposit_history");
			});
			$this->router->map( "POST", "/api/admin/addcredit", function(){
				$this->loadapi_admin("addcredit");
			});
			$this->router->map( "POST", "/api/admin/deletecredit", function(){
				$this->loadapi_admin("deletecredit");
			});
			$this->router->map( "POST", "/api/admin/depositformuser", function(){
				$this->loadapi_admin("depositformuser");
			});
			$this->router->map( "POST", "/api/admin/withdrawformuser", function(){
				$this->loadapi_admin("withdrawformuser");
			});
			$this->router->map( "POST", "/api/admin/removecredit", function(){
				$this->loadapi_admin("removecredit");
			});
			$this->router->map( "POST", "/api/admin/loadwithdrawhistory", function(){
				$this->loadapi_admin("load_withdraw_history");
			});
			$this->router->map( "POST", "/api/admin/loadspinhistory", function(){
				$this->loadapi_admin("load_spin_history");
			});
			$this->router->map( "POST", "/api/admin/loadchangespinner", function(){
				$this->loadapi_admin("load_change_spinner");
			});
			$this->router->map( "POST", "/api/admin/loadchangediamond", function(){
				$this->loadapi_admin("load_change_diamond");
			});
			$this->router->map( "POST", "/api/admin/loadkbankhistory", function(){
				$this->loadapi_admin("load_kbank_history");
			});
			$this->router->map( "POST", "/api/admin/loadscbhistory", function(){
				$this->loadapi_admin("load_scb_history");
			});
			$this->router->map( "POST", "/api/admin/loadtruehistory", function(){
				$this->loadapi_admin("load_true_history");
			});
			$this->router->map( "POST", "/api/admin/loadaffreport", function(){
				$this->loadapi_admin("load_aff_report");
			});
			
			
			$this->router->map( "POST", "/api/admin/run_insert_sql", function(){
				$this->loadapi_admin("run_insert_sql");
			});
			$this->router->map( "POST", "/api/admin/run_update_sql", function(){
				$this->loadapi_admin("run_update_sql");
			});
			$this->router->map( "POST", "/api/admin/run_update_sql_check", function(){
				$this->loadapi_admin("run_update_sql_check");
			});
			$this->router->map( "POST", "/api/admin/run_delete_sql", function(){
				$this->loadapi_admin("run_delete_sql");
			});
			$this->router->map( "POST", "/api/admin/updatecheckbox", function(){
				$this->loadapi_admin("update_checkbox");
			});
			$this->router->map( "POST", "/api/admin/updatecheckbox", function(){
				$this->loadapi_admin("update_checkbox");
			});
			$this->router->map( "POST", "/api/admin/bank", function(){
				$this->loadapi_admin("bank");
			});
			$this->router->map( "POST", "/api/admin/addpromotion", function(){
				$this->loadapi_admin("add_promotion");
			});
			$this->router->map( "POST", "/api/admin/announcepopup", function(){
				$this->loadapi_admin("announcepopup");
			});
			$this->router->map( "POST", "/api/admin/staff", function(){
				$this->loadapi_admin("staff");
			});
			$this->router->map( "POST", "/api/admin/BuildCodeReward", function(){
				$this->loadapi_admin("BuildCodeReward");
			});
			$this->router->map( "POST", "/api/admin/addslide", function(){
				$this->loadapi_admin("add_slide");
			});
			$this->router->map( "POST", "/api/admin/deleteslide", function(){
				$this->loadapi_admin("del_slide");
			});
			
			$this->router->map( "POST", "/api/admin/CheckBet", function(){
				$this->loadapi_admin("CheckBet");
			});
			
			
			
		}
		
		
		


	}

	private function end_router(){

		$match = $this->router->match();

		if( is_array($match) && is_callable( $match['target'] ) ) {

			call_user_func_array( $match['target'], $match['params'] );

		} else {

			$this->loadpageerror();

		}

	}
	
	
	private static function htmlheader()
	{

		$class = new system();
		$Get_Setting = $class->load_db_setting();
		if(isset($_SESSION['id_mb'])){
			$Get_Profile = $class->showprofile();
			$Load_Master = $class->Return_Master();
			$Load_DB = $class->LoadConfig;
			$UsernameAgent = $Load_DB->user_agent . $Get_Profile->username_mb;
		}
		
		require_once 'views/head/header.php';
		require_once 'views/head/navbar.php';
	}

	private static function htmlfooter()
	{
		
		$class = new system();
		$Get_Setting = $class->load_db_setting();
		if(isset($_SESSION['id_mb'])){
			$Get_Profile = $class->showprofile();
			$Load_Master = $class->Return_Master();
			$Load_DB = $class->LoadConfig;
			$UsernameAgent = $Load_DB->user_agent . $Get_Profile->username_mb;
		}

		require_once 'views/head/navbarmobile.php';
		require_once 'views/head/modal.php';
		require_once 'views/head/footer.php';

	}
	


	private function loadpage($page)
	{

		$class = new system();
		$Get_Setting = $class->load_db_setting();
		if(isset($_SESSION['id_mb'])){
			$Get_Profile = $class->showprofile();
			$Load_Master = $class->Return_Master();
			$Load_DB = $class->LoadConfig;
			$UsernameAgent = $Load_DB->user_agent . $Get_Profile->username_mb;
		}

		Self::htmlheader();
		
		
		if($Get_Setting->status_web == 'ปิด' && $page != 'home' && $page != 'promotion' ){
			require_once "views/page/CloseWeb.php";
		}else{
			require_once "views/page/" . $page . ".php";
		}

		Self::htmlfooter();

	}



	private function loadpageerror(){

		require_once "views/page/404.php";

	}
	
	private function loadapi($nameapi){

		$class = new system();
		$Get_Setting = $class->load_db_setting();
		if(isset($_SESSION['id_mb'])){
			$Get_Profile = $class->showprofile();
			$Load_Master = $class->Return_Master();
			$Load_DB = $class->LoadConfig;
			$UsernameAgent = $Load_DB->user_agent . $Get_Profile->username_mb;
		}

		require_once "controller/api/".$nameapi.".php";

	}
	
	
	/////////////////////////////////////////////////////////////////////////
	//////////////////////////////ADMIN//////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////
	private function loadsystemapi($page)
	{
		
		header("Content-Type: text/html; charset=utf-8");
		
		$class_admin = new system_admin();
		
		$Get_Setting = $class_admin->load_db_setting();
		$LoadConfig = $class_admin->Return_LoadConfig();
		//$Load_Master = $class_admin->Return_Master();
		
		require_once "views/page_admin/" . $page . ".php";
		

	}
	private static function htmlheader_admin()
	{

		$class_admin = new system_admin();
		$Get_Setting = $class_admin->load_db_setting();
		require_once 'views/head_admin/header_admin.php';

	}
	private static function htmlfooter_admin()
	{

		require_once 'views/head_admin/footer_admin.php';

	}
	private function loadpage_admin($page)
	{
		$class_admin = new system_admin();
		$Get_Setting = $class_admin->load_db_setting();
		if(isset($_SESSION['id_ad'])){
			
			$LoadConfig = $class_admin->Return_LoadConfig();
			$Load_Master = $class_admin->Return_Master();
		}
		
		Self::htmlheader_admin();
		
		$get_mysqli = $class_admin->load_mysqli_query();
		require_once "views/page_admin/" . $page . ".php";
		
		Self::htmlfooter_admin();
	}
	private function loadapi_admin($nameapi){

		$class_admin = new system_admin();
		
		if(isset($_SESSION['id_ad'])){
			$Get_Setting = $class_admin->load_db_setting();
			$LoadConfig = $class_admin->Return_LoadConfig();
			$Load_Master = $class_admin->Return_Master();
		}

		require_once "controller/api_admin/".$nameapi.".php";

	}



}

?>
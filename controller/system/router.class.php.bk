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
		$this->router->map( "GET", "/Auto789", function(){
			$this->loadsystemapi("system/Auto");
		});
		$this->router->map( "GET", "/Auto2", function(){
			$this->loadsystemapi("system/Auto2");
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
			$this->router->map( "GET", "/home", function(){
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
			$this->router->map( "POST", "/api/v2/load_status_all2", function(){
				$this->loadapi("load_status_all2");
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
			$this->router->map( "POST", "/api/v2/code_reward", function(){
				$this->loadapi("code_reward");
			});
			
		}else{
			
			
			$this->router->map( "GET", "/logout", function(){
				$this->loadpage("logout");
			});
			
			$this->router->map( "GET", "/", function(){
				$this->loadpage("wallet");
			});
			$this->router->map( "GET", "/wallet", function(){
				$this->loadpage("wallet");
			});
			
			$this->router->map( "GET", "/promotions", function(){
				$this->loadpage("promotions");
			});
			$this->router->map( "GET", "/event", function(){
				$this->loadpage("event");
			});
			
			$this->router->map( "GET", "/CASINO", function(){
				$this->loadpage("CASINO");
			});
			$this->router->map( "GET", "/SPORT", function(){
				$this->loadpage("BALL");
			});
			$this->router->map( "GET", "/POKDENG", function(){
				$this->loadpage("POKDENG");
			});
			$this->router->map( "GET", "/FISH", function(){
				$this->loadpage("FISH");
			});
			$this->router->map( "GET", "/SLOT", function(){
				$this->loadpage("SLOT");
			});
			$this->router->map( "GET", "/SPINNER", function(){
				$this->loadpage("SPINNER");
			});
			
			/////// SLOT ///////
			$this->router->map( "GET", "/SLOT-jili", function(){
				$this->loadpage("SLOT/jili");
			});
			$this->router->map( "GET", "/SLOT-PG", function(){
				$this->loadpage("SLOT/PG");
			});
			$this->router->map( "GET", "/SLOT-joker", function(){
				$this->loadpage("SLOT/joker");
			});
			$this->router->map( "GET", "/SLOT-1x2Gaming", function(){
				$this->loadpage("SLOT/1x2Gaming");
			});
			$this->router->map( "GET", "/SLOT-PragmaticPlay", function(){
				$this->loadpage("SLOT/PragmaticPlay");
			});
			$this->router->map( "GET", "/SLOT-KINGMAKER", function(){
				$this->loadpage("SLOT/KINGMAKER");
			});
			$this->router->map( "GET", "/SLOT-HABANERO", function(){
				$this->loadpage("SLOT/HABANERO");
			});
			$this->router->map( "GET", "/SLOT-Fachai", function(){
				$this->loadpage("SLOT/Fachai");
			});
			$this->router->map( "GET", "/SLOT-EVOPLAY", function(){
				$this->loadpage("SLOT/EVOPLAY");
			});
			$this->router->map( "GET", "/SLOT-NETENT", function(){
				$this->loadpage("SLOT/NETENT");
			});
			$this->router->map( "GET", "/SLOT-REDTIGER", function(){
				$this->loadpage("SLOT/REDTIGER");
			});
			$this->router->map( "GET", "/SLOT-FUNKY", function(){
				$this->loadpage("SLOT/FUNKY");
			});
			$this->router->map( "GET", "/SLOT-SKYWIND", function(){
				$this->loadpage("SLOT/SKYWIND");
			});
			$this->router->map( "GET", "/SLOT-AEGaming", function(){
				$this->loadpage("SLOT/AEGaming");
			});
			$this->router->map( "GET", "/SLOT-Hacksaw", function(){
				$this->loadpage("SLOT/Hacksaw");
			});
			$this->router->map( "GET", "/SLOT-KAGaming", function(){
				$this->loadpage("SLOT/KAGaming");
			});
			$this->router->map( "GET", "/SLOT-Fastasma", function(){
				$this->loadpage("SLOT/Fastasma");
			});
			
			$this->router->map( "GET", "/SLOT-PushGaming", function(){
				$this->loadpage("SLOT/PushGaming");
			});
			
			$this->router->map( "GET", "/SLOT-GameArt", function(){
				$this->loadpage("SLOT/GameArt");
			});
			$this->router->map( "GET", "/SLOT-PlaynGo", function(){
				$this->loadpage("SLOT/PlaynGo");
			});
			$this->router->map( "GET", "/SLOT-NolimitCity", function(){
				$this->loadpage("SLOT/NolimitCity");
			});
			$this->router->map( "GET", "/SLOT-Thunderkick", function(){
				$this->loadpage("SLOT/Thunderkick");
			});
			$this->router->map( "GET", "/SLOT-Yggdrasil", function(){
				$this->loadpage("SLOT/Yggdrasil");
			});
			$this->router->map( "GET", "/SLOT-Quickspin", function(){
				$this->loadpage("SLOT/Quickspin");
			});
			$this->router->map( "GET", "/SLOT-RelaxGaming", function(){
				$this->loadpage("SLOT/RelaxGaming");
			});
			$this->router->map( "GET", "/SLOT-DragoonSoft", function(){
				$this->loadpage("SLOT/DragoonSoft");
			});
			$this->router->map( "GET", "/SLOT-Booongo", function(){
				$this->loadpage("SLOT/Booongo");
			});
			$this->router->map( "GET", "/SLOT-IronDog", function(){
				$this->loadpage("SLOT/IronDog");
			});
			$this->router->map( "GET", "/SLOT-KalambaGames", function(){
				$this->loadpage("SLOT/KalambaGames");
			});
			$this->router->map( "GET", "/SLOT-Gamatron", function(){
				$this->loadpage("SLOT/Gamatron");
			});
			$this->router->map( "GET", "/SLOT-BlueprintGaming", function(){
				$this->loadpage("SLOT/BlueprintGaming");
			});
			$this->router->map( "GET", "/SLOT-Maverick", function(){
				$this->loadpage("SLOT/Maverick");
			});
			/////////////////////////////////////////////////////
			
			/////// FISH ///////
			$this->router->map( "GET", "/FISH-jili", function(){
				$this->loadpage("FISH/jili");
			});
			$this->router->map( "GET", "/FISH-joker", function(){
				$this->loadpage("FISH/joker");
			});
			$this->router->map( "GET", "/FISH-Fachai", function(){
				$this->loadpage("FISH/Fachai");
			});
			$this->router->map( "GET", "/FISH-KAGaming", function(){
				$this->loadpage("FISH/KAGaming");
			});
			$this->router->map( "GET", "/FISH-SKYWIND", function(){
				$this->loadpage("FISH/SKYWIND");
			});
			$this->router->map( "GET", "/FISH-FUNKY", function(){
				$this->loadpage("FISH/FUNKY");
			});
			/////////////////////////////////////////////////////
			
			/////// POKDENG ///////
			$this->router->map( "GET", "/POKDENG-jili", function(){
				$this->loadpage("POKDENG/jili");
			});
			$this->router->map( "GET", "/POKDENG-AEGaming", function(){
				$this->loadpage("POKDENG/AEGaming");
			});
			$this->router->map( "GET", "/POKDENG-KINGMAKER", function(){
				$this->loadpage("POKDENG/KINGMAKER");
			});
			$this->router->map( "GET", "/POKDENG-NETENT", function(){
				$this->loadpage("POKDENG/NETENT");
			});
			$this->router->map( "GET", "/POKDENG-SKYWIND", function(){
				$this->loadpage("POKDENG/SKYWIND");
			});
			$this->router->map( "GET", "/POKDENG-FUNKY", function(){
				$this->loadpage("POKDENG/FUNKY");
			});
			$this->router->map( "GET", "/POKDENG-EVOPLAY", function(){
				$this->loadpage("POKDENG/EVOPLAY");
			});
			/////////////////////////////////////////////////////
			
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
			$this->router->map( "POST", "/api/v2/generatecode", function(){
				$this->loadapi("generatecode");
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
			$this->router->map( "GET", "/admin2", function(){
				$this->loadpage_admin("index2");
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
			$this->router->map( "GET", "/admin/reporta", function(){
				$this->loadpage_admin("reporta");
			});
			$this->router->map( "GET", "/admin/allmember", function(){
				$this->loadpage_admin("allmember");
			});
			$this->router->map( "GET", "/admin/QR", function(){
				$this->loadpage_admin("QR");
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
			$this->router->map( "GET", "/admin/generatecode", function(){
				$this->loadpage_admin("generatecode");
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
			
			//=================API &#1072;&#8470;&#1087;&#1111;&#1029;&#1072;&#1105;&#1087;&#1111;&#1029;&#1072;&#1105;&#1087;&#1111;&#1029;&#1072;&#8470;&#1026;&#1072;&#1105;&#1087;&#1111;&#1029;&#1072;&#1105;&#1169;&#1072;&#1105;&#1087;&#1111;&#1029;&#1072;&#1105;&#1087;&#1111;&#1029;&#1072;&#1105;&#1087;&#1111;&#1029;&#1072;&#1105;&#1027; =============
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
			$this->router->map( "POST", "/api/admin/loadstatusall2", function(){
				$this->loadapi_admin("load_status_all2");
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
			$this->router->map( "POST", "/api/admin/deletedepositall", function(){
				$this->loadapi_admin("deletedepositall");
			});
			$this->router->map( "POST", "/api/admin/CheckBet", function(){
				$this->loadapi_admin("CheckBet");
			});
			$this->router->map( "POST", "/api/admin/ScanQR", function(){
				$this->loadapi_admin("ScanQR");
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
			require_once 'views/head/header_user.php';
			//require_once 'views/head/navbar_user.php';
		}else{
			require_once 'views/head/header.php';
			require_once 'views/head/navbar.php';
		}
		
		
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
			//require_once 'views/head/navbarmobile.php';
			//require_once 'views/head/modal.php';
			require_once 'views/head/footer_user.php';
		}else{
			require_once 'views/head/navbarmobile.php';
			require_once 'views/head/modal.php';
			require_once 'views/head/footer.php';
		}

		

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
		
		
		
		if(!isset($_SESSION['id_mb']) && $page == 'home'){
			require_once "views/page/home.php";
		}else{
			Self::htmlheader();
		
			if($Get_Setting->status_web == '&#1072;&#1105;&#1087;&#1111;&#1029;&#1072;&#1105;&#1169;&#1072;&#1105;&#1087;&#1111;&#1029;' && $page != 'home' && $page != 'promotion' ){
				require_once "views/page/CloseWeb.php";
			}else{
				require_once "views/page/" . $page . ".php";
			}

			Self::htmlfooter();
		}

		

	}



	private function loadpageerror(){

		require_once "views/page/404.php";

	}
	
	private function loadapi($nameapi){
		
		error_reporting(0);

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
		error_reporting(0);
		
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
		
		error_reporting(0);

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
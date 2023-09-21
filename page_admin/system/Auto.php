<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>ระบบอัตโนมัติ | <?php echo $Get_Setting->name_web; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/features/">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    

    <!-- Bootstrap core CSS -->
	<link href="/assets/auto/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/assets/auto/dist/css/features.css" rel="stylesheet">
  </head>
  <body>
<main>

  <div class="container-fluid px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">ระบบอัตโนมัติ</h2>
	
	
	<div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 g-4">
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">ระบบหลัก</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				เครดิตเอเย่นต์
				<div class="form-check form-switch">
				  <input class="form-check-input" id="SwitchCheckCreditAgent" type="checkbox" onclick='ClickCheckCreditAgent(this);'>
				</div>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				สต็อกสมาชิก
				<div class="form-check form-switch">
				  <input class="form-check-input" id="SwitchCheckMemberStock" type="checkbox" onclick='ClickCheckMemberStock(this);'>
				</div>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">-</small>
		  </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">เช็ค เครดิตเอเย่นต์</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ยอดเงิน
				<span id="ShowCreditAgent">-</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ล่าสุด
				<span id="DATECreditAgent">-</span>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">สถานะ : <span id="CreditAgentStatus"></span></small>
		  </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">เช็ค สต็อกสมาชิก</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				สต็อก
				<span id="ShowMemberStock">-</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ล่าสุด
				<span id="DATEMemberStock">-</span>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">สถานะ : <span id="MemberStockStatus"></span></small>
		  </div>
		</div>
	  </div>
	</div>
	
	<hr>

	<div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 g-4">
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">ระบบ KBANK</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				เช็ครายการ
				<div class="form-check form-switch">
				  <input class="form-check-input" id="SwitchCheckKbank" type="checkbox" onclick='ClickCheckKbank(this);'>
				</div>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ออโต้ฝาก
				<div class="form-check form-switch">
				  <input class="form-check-input" id="SwitchDepositKbank" type="checkbox" onclick='ClickDepositKbank(this);'>
				</div>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ออโต้ถอน
				<div class="form-check form-switch">
				  <input class="form-check-input" id="SwitchWithdrawKbank" type="checkbox" onclick='ClickWithdrawKbank(this);'>
				</div>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">-</small>
		  </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">เช็ครายการ KBANK</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ยอดเงิน
				<span id="BalanceKBANK">-</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				สถานะ
				<span id="STATUSKBANK">-</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ล่าสุด
				<span id="DATEKBANK">-</span>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">สถานะ : <span id="CheckKbankStatus"></span></small>
		  </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">ออโต้ฝาก KBANK</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				สถานะ
				<span id="STATUSDepositKbank">-</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ล่าสุด
				<span id="DATEDepositKbank">-</span>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">สถานะ : <span id="DepositKbankStatus"></span></small>
		  </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">ออโต้ถอน KBANK</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				สถานะ
				<span id="STATUSWithdrawKbank">-</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ล่าสุด
				<span id="DATEWithdrawKbank">-</span>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">สถานะ : <span id="WithdrawKbankStatus"></span></small>
		  </div>
		</div>
	  </div>
	</div>
	
	<hr>

	<div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 g-4">
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">ระบบ TrueWallet</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				เช็ครายการ
				<div class="form-check form-switch">
				  <input class="form-check-input" id="SwitchCheckTrueWallet" type="checkbox" onclick='ClickCheckTrueWallet(this);'>
				</div>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ออโต้ฝาก
				<div class="form-check form-switch">
				  <input class="form-check-input" id="SwitchDepositTrueWallet" type="checkbox" onclick='ClickDepositTrueWallet(this);'>
				</div>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">-</small>
		  </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">เช็ครายการ TrueWallet</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ยอดเงิน
				<span id="BalanceTrueWallet">-</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				สถานะ
				<span id="STATUSTrueWallet">-</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ล่าสุด
				<span id="DATETrueWallet">-</span>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">สถานะ : <span id="CheckTrueWalletStatus"></span></small>
		  </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card h-100">
		  <div class="card-body">
			<h5 class="card-title">ออโต้ฝาก TrueWallet</h5>
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				สถานะ
				<span id="STATUSDepositTrueWallet">-</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				ล่าสุด
				<span id="DATEDepositTrueWallet">-</span>
			  </li>
			</ul>
		  </div>
		  <div class="card-footer">
			<small class="text-muted">สถานะ : <span id="DepositTrueWalletStatus"></span></small>
		  </div>
		</div>
	  </div>
	</div>



  </div>
</main>
<script src="/assets/auto/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery.cookie.js"></script>

<script type="text/javascript">
function ClickCheckCreditAgent(checkbox) {
    if(checkbox.checked){
		sessionStorage.setItem("CheckCreditAgent", "CheckCreditAgent");
    }else{
		sessionStorage.removeItem("CheckCreditAgent");
    }
}
function ClickCheckMemberStock(checkbox) {
    if(checkbox.checked){
		sessionStorage.setItem("CheckMemberStock", "CheckMemberStock");
    }else{
		sessionStorage.removeItem("CheckMemberStock");
    }
}


function ClickCheckKbank(checkbox) {
    if(checkbox.checked){
		sessionStorage.setItem("CheckKbank", "CheckKbank");
    }else{
		sessionStorage.removeItem("CheckKbank");
    }
}
function ClickDepositKbank(checkbox) {
    if(checkbox.checked){
		sessionStorage.setItem("DepositKbank", "DepositKbank");
    }else{
		sessionStorage.removeItem("DepositKbank");
    }
}
function ClickWithdrawKbank(checkbox) {
    if(checkbox.checked){
		sessionStorage.setItem("WithdrawKbank", "WithdrawKbank");
    }else{
		sessionStorage.removeItem("WithdrawKbank");
    }
}




function ClickCheckTrueWallet(checkbox) {
    if(checkbox.checked){
		sessionStorage.setItem("CheckTrueWallet", "CheckTrueWallet");
    }else{
		sessionStorage.removeItem("CheckTrueWallet");
    }
}
function ClickDepositTrueWallet(checkbox) {
    if(checkbox.checked){
		sessionStorage.setItem("DepositTrueWallet", "DepositTrueWallet");
    }else{
		sessionStorage.removeItem("DepositTrueWallet");
    }
}

///////////////////////////////////////////////////////////////////////////////

function FunctionCheckCreditAgent() {
	if (!$.cookie('LoadCreditAgent')) {
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (30 * 1000));
		$.cookie("LoadCreditAgent", true, { expires: datealert }); 
		$.ajax({
			type: "GET",
			url: "/system/run/Agent",
			async: true,
			data: {},
			success: function(data) {
				var obj = JSON.parse(data);
				$('#DATECreditAgent').text(obj.DateGet);
				$('#ShowCreditAgent').text(obj.info);
			}
		});
	}
}
function FunctionCheckMemberStock() {
	if (!$.cookie('LoadMemberStock')) {
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (10 * 1000));
		$.cookie("LoadMemberStock", true, { expires: datealert }); 
		$.ajax({
			type: "GET",
			url: "/system/run/Register",
			async: true,
			data: {},
			success: function(data) {
				var obj = JSON.parse(data);
				$('#DATEMemberStock').text(obj.DateGet);
				$('#ShowMemberStock').text(obj.info);
			}
		});
	}
}


function FunctionCheckKbank() {
	
	if (!$.cookie('LoadCheckKbank')) {
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (10 * 1000));
		$.cookie("LoadCheckKbank", true, { expires: datealert }); 
		$.ajax({
			type: "GET",
			url: "/system/run/CheckKbank",
			async: true,
			data: {},
			success: function(data) {
				var obj = JSON.parse(data);
				$('#DATEKBANK').text(obj.DateGet);
				if (obj.status=="success"){
					$('#BalanceKBANK').text(obj.BalanceKbank);
					$('#STATUSKBANK').text(obj.info);
					$("#STATUSKBANK").css("color", "green");
				}else{
					$('#STATUSKBANK').text(obj.info);
					$("#STATUSKBANK").css("color", "red");
				}
			}
		});
	}
}
function FunctionDepositKbank() {
	if (!$.cookie('LoadDepositKbank')) {
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (10 * 1000));
		$.cookie("LoadDepositKbank", true, { expires: datealert }); 
		$.ajax({
			type: "GET",
			url: "/system/run/AddKbank",
			async: true,
			data: {},
			success: function(data) {
				var obj = JSON.parse(data);
				$('#DATEDepositKbank').text(obj.DateGet);
				if(obj.info == 'ระบบออโต้ปิด'){
					$("#STATUSDepositKbank").css("color", "red");
					
				}else{
					$("#STATUSDepositKbank").css("color", "green");
				}
				$('#STATUSDepositKbank').text(obj.info);
			}
		});
	}
}
function FunctionWithdrawKbank() {
	if (!$.cookie('LoadWithdrawKbank')) {
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (10 * 1000));
		$.cookie("LoadWithdrawKbank", true, { expires: datealert }); 
		$.ajax({
			type: "GET",
			url: "/system/run/Crontopupkbank",
			async: true,
			data: {},
			success: function(data) {
				var obj = JSON.parse(data);
				$('#DATEWithdrawKbank').text(obj.DateGet);
				if(obj.info == 'ถอนออโต้ปิดอยู่'){
					$("#STATUSWithdrawKbank").css("color", "red");
					
				}else{
					$("#STATUSWithdrawKbank").css("color", "green");
				}
				$('#STATUSWithdrawKbank').text(obj.info);
			}
		});
	}
}




/////////////////////////////////////////



function FunctionCheckTrueWallet() {
	
	if (!$.cookie('LoadCheckTrueWallet')) {
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (20 * 1000));
		$.cookie("LoadCheckTrueWallet", true, { expires: datealert }); 
		$.ajax({
			type: "GET",
			url: "/system/run/CheckTrue",
			timeout: 20000,
			async: true,
			data: {},
			success: function(data) {
				var obj = JSON.parse(data);
				$('#DATETrueWallet').text(obj.DateGet);
				if (obj.status=="success"){
					$('#BalanceTrueWallet').text(obj.BalanceTrueWallet);
					$('#STATUSTrueWallet').text(obj.info);
					$("#STATUSTrueWallet").css("color", "green");
				}else{
					$('#STATUSTrueWallet').text(obj.info);
					$("#STATUSTrueWallet").css("color", "red");
				}
			}
		});
	}
}
function FunctionDepositTrueWallet() {
	if (!$.cookie('LoadDepositTrueWallet')) {
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (10 * 1000));
		$.cookie("LoadDepositTrueWallet", true, { expires: datealert }); 
		$.ajax({
			type: "GET",
			url: "/system/run/AddTrue",
			timeout: 10000,
			async: true,
			data: {},
			success: function(data) {
				var obj = JSON.parse(data);
				$('#DATEDepositTrueWallet').text(obj.DateGet);
				if (obj.status=="success"){
					$("#STATUSDepositTrueWallet").css("color", "green");
					
				}else{
					$("#STATUSDepositTrueWallet").css("color", "red");
				}
				$('#STATUSDepositTrueWallet').text(obj.info);
			}
		});
	}
}
</script>

<script type="text/javascript">
$(document).ready(function(){	

function LoadCheck(){
	
	if (sessionStorage.getItem("CheckCreditAgent")) {
		$('#CreditAgentStatus').html('กำลังทำงาน...');
		$('#SwitchCheckCreditAgent').prop('checked', true);
		FunctionCheckCreditAgent();
	}else{
		$('#CreditAgentStatus').html('หยุดทำงาน...');
	}
	
	if (sessionStorage.getItem("CheckMemberStock")) {
		$('#MemberStockStatus').html('กำลังทำงาน...');
		$('#SwitchCheckMemberStock').prop('checked', true);
		FunctionCheckMemberStock();
	}else{
		$('#MemberStockStatus').html('หยุดทำงาน...');
	}
	
	if (sessionStorage.getItem("CheckKbank")) {
		$('#CheckKbankStatus').html('กำลังทำงาน...');
		$('#SwitchCheckKbank').prop('checked', true);
		FunctionCheckKbank();
	}else{
		$('#CheckKbankStatus').html('หยุดทำงาน...');
	}
	
	if (sessionStorage.getItem("DepositKbank")) {
		$('#DepositKbankStatus').html('กำลังทำงาน...');
		$('#SwitchDepositKbank').prop('checked', true);
		FunctionDepositKbank();
	}else{
		$('#DepositKbankStatus').html('หยุดทำงาน...');
	}
	
	if (sessionStorage.getItem("WithdrawKbank")) {
		$('#WithdrawKbankStatus').html('กำลังทำงาน...');
		$('#SwitchWithdrawKbank').prop('checked', true);
		FunctionWithdrawKbank();
	}else{
		$('#WithdrawKbankStatus').html('หยุดทำงาน...');
	}
	
	
	////////////////////////
	
	if (sessionStorage.getItem("CheckTrueWallet")) {
		$('#CheckTrueWalletStatus').html('กำลังทำงาน...');
		$('#SwitchCheckTrueWallet').prop('checked', true);
		FunctionCheckTrueWallet();
	}else{
		$('#CheckTrueWalletStatus').html('หยุดทำงาน...');
	}
	
	if (sessionStorage.getItem("DepositTrueWallet")) {
		$('#DepositTrueWalletStatus').html('กำลังทำงาน...');
		$('#SwitchDepositTrueWallet').prop('checked', true);
		FunctionDepositTrueWallet();
	}else{
		$('#DepositTrueWalletStatus').html('หยุดทำงาน...');
	}
	
}		
LoadCheck();
setInterval(LoadCheck, 1000);
});
</script>
      
</body>
</html>

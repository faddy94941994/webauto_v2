<?php
$id = $_GET['id'];
$sql = "SELECT * FROM withdraw WHERE id = '$id' ";
$setting_withdraw = $class_admin->load_db_date($sql);

if (empty($setting_withdraw)) {
	exit("<script>window.history.back()</script>");
}


$selete_username = $setting_withdraw->username_wd;

$sql2 = "SELECT * FROM deposit WHERE username_dp = '$selete_username'  AND confirm_dp = 'อนุมัติ'  ORDER BY id DESC limit 1";
$setting_withdraw2 = $class_admin->load_db_date($sql2);

$UsernameAgent = $LoadConfig->user_agent . $setting_withdraw->username_wd;

$Balance = $Load_Master->Master_Balance($UsernameAgent);
?>
<script type="text/javascript">
$(document).ready(function () {
$('.treeview a[href="/admin/withdraw"]').parent().addClass("active").closest('.treeview').addClass('active');
});
</script>
<?php
			$sql = "SELECT * FROM setting";
			$result = $class_admin->load_date_sql($sql);
			$row = mysqli_fetch_array($result);
			$logo = $row['logo_web'];
			
		?>
<body class="hold-transition skin-blue sidebar-mini">
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand "></i><a href="/admin" class="logo blue-bg" style="
    margin-left: 10px;
    margin-bottom: 10px;
	<span class="logo-mini"><img src="<?php echo $logo; ?>" width="150" alt=""></span> <span class="logo"></a></h3>
                </a>

				<div class="navbar-custom-menu">
				<aside class="main-sidebar">
	
		<ul class="sidebar-menu" data-widget="tree">


			</li>

			</div>
                <div class="navbar-nav w-100">
                    <a href="/admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>แดชบอร์ด</a>
					<a href="/admin/allmember" class="nav-item nav-link"><i class="fas fa-users me-2"></i>สมาชิกทั้งหมด</a>
					<a href="/admin/member" class="nav-item nav-link"><i class="fas fa-user-plus me-2"></i>สมาชิกใหม่ <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_member">0</button>
                    <a href="/admin/deposit" class="nav-item nav-link"><i class="fal fa-envelope-open-dollar me-2"></i>รอฝาก <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_deposit">0</button>        
                    <a href="/admin/withdraw" class="nav-item nav-link"><i class="fal fa-money-check-edit-alt me-2"></i>รายการถอน <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_withdraw">0</button>					
					<a href="/admin/withdrawaff" class="nav-item nav-link"><i class="fad fa-users-class me-2"></i>ถอนแนะนำ <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_withdrawaff">0</button>					
					<a href="/admin/QR" class="nav-item nav-link"><i class="far fa-qrcode me-2"></i>แสกนQR</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-history me-2"></i>ประวัติ</a>
                        <div class="dropdown-menu bg-transparent border-0">
					<a href="/admin/spin_history" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ หมุนวงล้อ </a>
					<a href="/admin/changespin_history" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ  แลกพ้อยด์วงล้อ</a>
                    <a href="/admin/deposit_history" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ รายการฝาก </a>
                    <a href="/admin/withdraw_history" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ การถอน </a>
                    </div>
					<a href="/admin/generatecode" class="nav-item nav-link"><i class="fad fa-gift-card me-2"></i>สร้างCODE</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-landmark me-2"></i>รายการธนาคาร</a>
                        <div class="dropdown-menu bg-transparent border-0">
					<a href="/admin/kbank_history" class="dropdown-item"><i class="fas fa-landmark me-2"></i>รายการ KBANK</a>
					<a href="/admin/scb_history" class="dropdown-item"><i class="fas fa-landmark me-2"></i>รายการ SCB</a>
					<a href="/admin/true_history"class="dropdown-item"><i class="fas fa-landmark me-2"></i>รายการ TRUE</a>

                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h6 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h6>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
					<div class="d-flex justify-content-between align-items-center">
				   <div class="text-primary me-3"> สถานะระบบออโต้</span></div>
				   <div class="">
						<div class="form-check form-switch form-switch-md pull-right-container pull-right">
							<input class="form-check-input pull-right-container me-3" onclick='CheckedMain(this);' type="checkbox" <?php if ($Get_Setting->status_auto2 == "เปิด")  { ?> checked <?php } ?>>
						</div>
				   </div>
				</div>

                    </div>
					<div class="d-flex justify-content-between align-items-center">
					<div class="text-primary me-3"> สถานะถอนออโต้ </span></div>
				   <div class="">
						<div class="form-check form-switch form-switch-md pull-right-container pull-right">
							<input class="form-check-input pull-right-container" onclick='CheckedMain2(this);' type="checkbox" <?php if ($Get_Setting->status_auto == "เปิด")  { ?> checked <?php } ?>>
						</div>
				   </div>
				</div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="/assets/admin/img/administrator.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["name_ad"]; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
						<a href="#"  class="dropdown-item">ตั้งค่า</a>
						<a href="/admin/settingweb" class="dropdown-item">เว็บไซต์</a>
						<a href="/admin/settingspinner" class="dropdown-item">วงล้อ</a>
						<a href="/admin/settingbank" class="dropdown-item">ธนาคาร</a>
						<a a href="/admin/settingstaff" class="dropdown-item">พนักงาน</a>
						<a href="/admin/settingpromotion" class="dropdown-item">โปรโมชั่น</a>
						<a href="/admin/logadmin" class="dropdown-item">ประวัติเข้าใช้งาน</a>
						<a href="/admin/settingannounce" class="dropdown-item">ประกาศ</a>
                        <a href="javascript:void(0)" class="check-out" class="dropdown-item" ><img src="https://cdn.discordapp.com/attachments/874026126513692685/1154588220399566868/logout.png" alt="logout">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
<div class="wrapper boxed-wrapper">
<header class="main-header">
	
	<nav class="navbar blue-bg navbar-static-top">
<div class="col mb-10">
<div class="bg-secondary rounded p-4 m-10" style= margin:30px;>
		<div class="info-box">
		<div class="row">
			<div class="col-md-6">
				<div class="info-box">
					<h4 class="text-black"><i class="fas fa-minus-square"></i> ตัดเครดิต</h4>
					<hr>
					<div class="row mb-3">
						<div class="col-md-4">
							<div class="form-group has-feedback">
								<label class="control-label-dc">ยูสเซอร์เนม </label>
								<input class="form-control" type="text" id="username" value="<?php echo $UsernameAgent; ?>" readonly="readonly">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group has-feedback">
								<label class="control-label-dc">จำนวนเครดิตที่ตัด</label>
								<input class="form-control" type="text" id="amount" value="<?php echo $setting_withdraw->amount_wd; ?>">
							</div>
						</div>
						<div class="col-md-4 mt-2 align-self-center">
							<button type="button" id="removesubmit" class="btn btn-sm btn-success btn-block p-2"><i class="fas fa-check"></i> ตัดเครดิต</button>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-3 mt-2 align-self-center">
							<button type="button" id="CheckBet" class="btn btn-sm btn-info btn-block p-2"><i class="fas fa-clipboard-list"></i> ตรวจสอบเบท</button>
						</div>
						<!-- <div class="col-md-3 align-self-center"> -->
							<!-- <div class="form-group has-feedback">
								<label class="control-label-dc">จากวันที่ :</label>
								<input class="form-control" type="text" id="FromDay">
							</div> -->
						<!-- </div> -->
						<!-- <div class="col-md-3 align-self-center">
							<div class="form-group has-feedback">
								<label class="control-label-dc">ถึงวันที่ :</label>
								<input class="form-control" type="text" id="ToDay">
							</div> -->
						<!-- </div> -->
						<div class="col-md-3 mt-2 align-self-center">
							<button type="button" id="SearchBet" class="btn btn-sm btn-success btn-block p-2"><i class="fas fa-check"></i> ค้นหาเบท</button>
						</div>
					</div>
				</div>
				<div class="info-box">
					<div class="d-flex justify-content-around box text-nowrap">
						<div class="col-sm-6 border-right">
							<div class="description-block">
								<h4 class="description-header text-black">เติมเครดิตล่าสุด</h4>
								<span class="description-text"><?php echo $setting_withdraw2->date_dp; ?></span>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="description-block">
								<h4 class="description-header text-black">วันที่แจ้งถอน</h4>
								<span class="description-text"><?php echo $setting_withdraw->date_wd; ?></span>
							</div>
						</div>
					  </div>
					<div class="table-responsive">
						<table class="table table-bordered text-nowrap text-center">
							<thead class="text-black">
								<tr>
									<th scope="col">เบท/แทง</th>
									<th scope="col">เกมส์ที่เล่น</th>
									<th scope="col">เครดิตก่อนแทง</th>
									<th scope="col">เครดิตหลังแทง</th>
									<th scope="col">วันที่เล่น</th>
								</tr>
							</thead>
							<tbody id="ShowDateBet">
									
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="info-box">
					<h4 class="text-black"><i class="fas fa-search-plus"></i> ตรวจสอบรายการถอนเงิน</h4>
					<hr class="mb-0">
					  <div class="d-flex justify-content-around box text-nowrap mb-4">
						<div class="col-sm-4 border-right">
							<div class="description-block">
								<input type="text" name="edit_wd" value="<?php echo $_SESSION["name_ad"]; ?>" hidden>
								<h4 class="description-header text-black">เครดิตคงเหลือ</h4>
								<span class="description-text"><?php echo $Balance; ?></span>
							</div>
						</div>
						<div class="col-sm-4 border-right">
							<div class="description-block">
								<h4 class="description-header text-black">ยอดเทิร์นที่ต้องทำ</h4>
								<span class="description-text"><?php echo $setting_withdraw2->turnover; ?></span>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="description-block">
								<h4 class="description-header text-black">โปรโมชั่นล่าสุด</h4>
								<span class="description-text"><?php echo $setting_withdraw2->promotion_dp; ?></span>
							</div>
						</div>
					  </div>

					<form method="post" id="form_withdrawupdateform" enctype="multipart/form-data">
					<input class="form-control" type="text" name="id" value="<?php echo $id; ?>" hidden>
					<input class="form-control" type="text" name="in_bankout_wd" id="in_bankout_wd" value="" readonly hidden>
					<input class="form-control" type="text" name="confirm_wd" id="in_confirm_wd" value="<?php echo $setting_withdraw->confirm_wd; ?>" readonly hidden>
					
							<?php 
                            $sqlbankwithdraw = "SELECT * FROM bank WHERE bankfor LIKE '%ถอน%' AND status_bank ='เปิด' AND name_bank != 'ทรูวอเล็ต' ";
							$resultbankwithdraw  = $class_admin->load_date_sql($sqlbankwithdraw);
                            while($bankwithdraw = mysqli_fetch_array($resultbankwithdraw)) 
								{ ?>
							<input class="form-control" type="text" name="bankout_wd" id="st_bankout_wd" value="<?php echo $bankwithdraw['name_bank']; ?><?php echo $bankwithdraw['bankacc_bank']; ?>" readonly hidden>
							<?php } ?>
					
					<div class="row mb-3">
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ยอดเงินถอน</label>
							  <input class="form-control" type="text" name="amount_wd" value="<?php echo $setting_withdraw->amount_wd; ?>" readonly>
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ยูสเซอร์เนม</label>
							  <input class="form-control" type="text" value="<?php echo $UsernameAgent; ?>" readonly>
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ชื่อ-นามสกุล</label>
							  <input class="form-control" type="text" name="name_wd" value="<?php echo $setting_withdraw->name_wd; ?>" readonly>
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">เบอร์โทรศัพท์</label>
							  <input class="form-control" type="text" name="phone_wd" value="<?php echo $setting_withdraw->phone_wd; ?>" readonly>
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">เลขบัญชีธนาคาร</label>
							  <input class="form-control" type="text" name="bankacc_wd" value="<?php echo $setting_withdraw->bankacc_wd; ?>" readonly> 
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ธนาคาร</label>
							  <input class="form-control" type="text" name="bank_wd" value="<?php echo $setting_withdraw->bank_wd; ?>" readonly>
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">หมายเหตุ***</label>
							  <input class="form-control" type="text" name="note_wd" value="<?php echo $setting_withdraw->note_wd; ?>">
							</fieldset>	
						</div>
						<div class="col-md-3 mt-2 align-self-center">
							<button type="submit" id="submitclick" class="btn btn-sm btn-success btn-block p-2" hidden><i class="fas fa-save"></i> บันทึก</button>
						</div>
					</div>
					</form>
<?php
if($setting_withdraw->confirm_wd =='รอดำเนินการ'){
?>
					<div class="row mb-3">
						<div class="col-md-3 mt-2 align-self-center">
							<button type="button" id="submit_1" class="btn btn-sm btn-danger btn-block p-2"><i class="fas fa-times"></i> ปฏิเสธการถอน</button>
						</div>
						<div class="col-md-3 mt-2 align-self-center">
							<button type="button" id="submit_2" class="btn btn-sm btn-info btn-block p-2"><i class="fas fa-repeat"></i> คืนเครดิต</button>
						</div>
						<div class="col-md-6 mt-2 align-self-center">
							<button type="button" id="submit_4" class="btn btn-sm btn-success btn-block p-2"><i class="fas fa-save"></i> บันทึก(กรณีใช้ธนาคารอื่นโอน)</button>
						</div>
						<div class="col-md-3 mt-2 align-self-center">
							<button type="button" id="submit_3" class="btn btn-sm btn-success btn-block p-2" hidden><i class="fas fa-money-check-edit-alt"></i> โอนเงิน</button>
						</div>
						
					</div>
<?php	
}
?>			
					
				</div>
				
				<?php
if($setting_withdraw->confirm_wd =='รอดำเนินการ'){


?>

<?php
if($setting_withdraw->bank_wd != 'ทรูวอเล็ต'){
?>

				<div class="info-box">
					<h4 class="text-black"><i class="fas fa-sack-dollar"></i> โอนเงิน</h4>
					<hr>
					<form method="post" id="kplus_transfer_wd" enctype="multipart/form-data">
					<input type="text" name="phone_wd" value="<?php echo $setting_withdraw->phone_wd; ?>" hidden>
					<input type="text" name="accountTo" value="<?php echo $setting_withdraw->bankacc_wd; ?>" hidden>
                    <input type="text" name="accountToBankCode" value="<?php echo $setting_withdraw->bank_wd; ?>" hidden>
					<div class="row mb-3">
						<div class="col-md-4">
							<div class="form-group has-feedback">
								<label class="control-label-dc">ยอดเงิน </label>
							<?php 
									if ($setting_withdraw2->promotion_dp=='เครดิตฟรี') {
								?>		
										<input class="form-control" type="text" name="amount">
								<?php	}else{
								?>
										<input class="form-control" type="text" name="amount" value="<?php echo $setting_withdraw->amount_wd; ?>" readonly>
								<?php }
								?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group has-feedback">
								<label class="control-label-dc">รหัสลับ</label>
								<input class="form-control" type="password" name="key_input" required>
							</div>
						</div>
						<div class="col-md-4 mt-2 align-self-center">
							<button type="submit" id="submit_kplus_transfer" class="btn btn-sm btn-success btn-block p-2"><i class="fas fa-check"></i> โอนเงิน</button>
						</div>
					</div>
					</form>

				</div>
<?php	
}
?>

<?php	
}
?>
				
			</div>



		</div>
	</div>


<?php
$startdate = $setting_withdraw2->date_dp;
$enddate = $setting_withdraw->date_wd;
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
jQuery.datetimepicker.setLocale('th');
jQuery('#FromDay').datetimepicker({
	lang:'th',
	timepicker:false,
	format:'Y-m-d 00:00:00'
});
jQuery('#ToDay').datetimepicker({
	lang:'th',
	timepicker:false,
	format:'Y-m-d 23:59:59'
});
</script>

<script type="text/javascript">			
$('#SearchBet').click(function(e){
e.preventDefault();
$('#ShowDateBet').html('');
var username = "<?php echo $UsernameAgent; ?>";
var startdate = $("#FromDay").val();
var enddate = $("#ToDay").val();

		$.ajax({
            url: '/api/admin/CheckBet',
            type: 'POST',
            data: {
				username:username,
				startdate:startdate,
				enddate:enddate,
			},
			success:function(data){
				var obj = JSON.parse(data);
				var arrayobj = obj.data;
				//var filtered_array = arrayobj.filter(a=>a.amount >=-100 &&  a.amount<=-1);

				$('#ShowDateBet').html('');
				HtmlBet = "";
				for (let i = 0; i < arrayobj.length; i++) {
					
					var newamount = JSON.stringify(arrayobj[i].amount);
					var newamount2 = '';
					
					if(newamount > 0){
						newamount2 = "<span style='color:green;'>ได้ " + newamount + "</span>";
					}else{
						newamount2 = "<span style='color:red;'>" + newamount + "</span>";
					}
					
					var newnote = JSON.stringify(arrayobj[i].note);
					var newnote2 = JSON.stringify(arrayobj[i].note);
					newamount2 = newamount2.replace('-','แทง ')
					newnote = newnote.replace(/\d+/g, '');
					newnote = newnote.replace('"', '');
					newnote = newnote.replace('"', '');
					
					if (newnote === "withnewjersey____") {
						continue;
					}
					if (newnote === "dpsnewjersey____") {
						continue;
					}

					HtmlBet += '<tr>';
					HtmlBet += '<th scope="col">' + newamount2 + '</th>';
					HtmlBet += '<th scope="col">' + newnote2 + '</th>';
					
					HtmlBet += '<th scope="col">' + arrayobj[i].before_wallet + '</th>';
					HtmlBet += '<th scope="col">' + arrayobj[i].after_wallet + '</th>';
					
					HtmlBet += '<th scope="col">' + arrayobj[i].created_at + '</th>';
					HtmlBet += '</tr>';
					
				}
				$('#ShowDateBet').html(HtmlBet);
			}
        });



});
</script>


<script type="text/javascript">			
$('#CheckBet').click(function(e){
e.preventDefault();
$('#ShowDateBet').html('');
var username = "<?php echo $UsernameAgent; ?>";
var startdate = "<?php echo $startdate; ?>";
var enddate = "<?php echo $enddate; ?>";
		$.ajax({
            url: '/api/admin/CheckBet',
            type: 'POST',
            data: {
				username:username,
				startdate:startdate,
				enddate:enddate,
			},
			success:function(data){
				var obj = JSON.parse(data);
				var arrayobj = obj.data;
				//var filtered_array = arrayobj.filter(a=>a.amount >=-100 &&  a.amount<=-1);

				$('#ShowDateBet').html('');
				HtmlBet = "";
				for (let i = 0; i < arrayobj.length; i++) {
					
					var newamount = JSON.stringify(arrayobj[i].amount);
					var newamount2 = '';
					
					if(newamount > 0){
						newamount2 = "<span style='color:green;'>ได้ " + newamount + "</span>";
					}else{
						newamount2 = "<span style='color:red;'>" + newamount + "</span>";
					}
					
					var newnote = JSON.stringify(arrayobj[i].note);
					var newnote2 = JSON.stringify(arrayobj[i].note);
					newamount2 = newamount2.replace('-','แทง ')
					newnote = newnote.replace(/\d+/g, '');
					newnote = newnote.replace('"', '');
					newnote = newnote.replace('"', '');
					
					if (newnote === "withnewjersey____") {
						continue;
					}
					if (newnote === "dpsnewjersey____") {
						continue;
					}

					HtmlBet += '<tr>';
					HtmlBet += '<th scope="col">' + newamount2 + '</th>';
					HtmlBet += '<th scope="col">' + newnote2 + '</th>';
					
					HtmlBet += '<th scope="col">' + arrayobj[i].before_wallet + '</th>';
					HtmlBet += '<th scope="col">' + arrayobj[i].after_wallet + '</th>';
					
					HtmlBet += '<th scope="col">' + arrayobj[i].created_at + '</th>';
					HtmlBet += '</tr>';
					
				}
				$('#ShowDateBet').html(HtmlBet);

	
			}
        });
});
</script>



	
<script type="text/javascript">
$('#removesubmit').click(function(e){
e.preventDefault();
var username = $("#username").val();
var amount = $("#amount").val();
		$.ajax({
            url: '/api/admin/removecredit',
            type: 'POST',
            data: {
				username:username,
				amount:amount,
			},
			success:function(data){
				var obj = JSON.parse(data);
				if (obj.status == 'success') {
					Swal.fire({
						icon: 'success',
						title: 'ตัดเครดิต สำเร็จ',
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
					}).then((result) => {
						window.location.reload();
					})
				}else{
					Swal.fire({
						icon: 'error',
						title: 'ผิดพลาด ' + obj.status,
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
					})
				} 
			}
        });
});
</script>

<script type="text/javascript">
$('#submit_1').click(function(e){
e.preventDefault();
$("#in_bankout_wd").val("ปฏิเสธการถอน");
$("#st_bankout_wd").val("ไม่ถูกต้อง");
$("#in_confirm_wd").val("ปฏิเสธ");
$('#submitclick').click();
});
</script>

<script type="text/javascript">
$('#submit_2').click(function(e){
e.preventDefault();
$("#in_bankout_wd").val("คืนเครดิต");
$("#st_bankout_wd").val("ไม่ถูกต้อง");
$("#in_confirm_wd").val("ปฏิเสธ");
$('#submitclick').click();
});
</script>

<script type="text/javascript">
$('#submit_3').click(function(e){
e.preventDefault();
$("#in_bankout_wd").val("-");
$("#in_confirm_wd").val("อนุมัติ");
$('#submitclick').click();
});
</script>



<script type="text/javascript">
$('#submit_4').click(function(e){
e.preventDefault();
$("#in_bankout_wd").val("-");
$("#in_confirm_wd").val("อนุมัติ");
$('#submitclick').click();
});
</script>

 
<script type="text/javascript">
$("#kplus_transfer_wd").on("submit",function(e){
e.preventDefault();
        var formData = new FormData($(this)[0]);
		formData.append("amountnew",formData.get('amount'));
        $.ajax({
            url: '/api/admin/TransferKBank',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
			success:function(data){
				var obj = JSON.parse(data);
				if (obj.status=="success"){
					var NameAccount = obj.Name_Account;
					var InternalSessionId = obj.InternalSessionId;
					var sMessage = obj.sMessage;
					var amount = obj.amount;
					Swal.fire({
						title: 'คุณต้องการโอนให้',
						html: NameAccount + "<br />จำนวนเงิน " + amount + " บาท ใช่ไหม",
						icon: 'warning',
						showCancelButton: true,
						confirmButtonColor: '#00C851',
						cancelButtonColor: '#d33',
						confirmButtonText: 'ใช่'
					}).then((result) => {
						if (result.isConfirmed) {
							
							$.ajax({
								url: '/api/admin/TransferConfrimKBank',
								type: 'POST',
								data: {
								   'InternalSessionId' : InternalSessionId,
								   'sMessage' : sMessage,
								},
								success:function(data){
									var objMessage = JSON.parse(data);
									if (objMessage.status=="success"){
										$('#submit_3').click();
									}else{
										Swal.fire({
											icon: 'error',
											title: objMessage.info,
											showConfirmButton: false,
											timer: 2000,
											timerProgressBar: true,
										})
									}
								}
							});	
							
						}
					})
				}else{
					Swal.fire({
						icon: 'error',
						title: obj.info,
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
					})
				}
			}
        });    
});
</script>
 
 
 
 
 

<script type="text/javascript">
$("#form_withdrawupdateform").on("submit",function(e){
e.preventDefault();
var formData = new FormData($(this)[0]);
formData.append("TABLE_NAME","withdraw");
formData.append("WHERE_NAME","id");
formData.append("WHERE_VALUE",formData.get('id'));
        $.ajax({
            url: '/api/admin/run_update_sql_check',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
			success:function(data){
				var obj = JSON.parse(data);
				if (obj.status=="success"){
					Swal.fire({
						icon: 'success',
						title: 'บันทึก สำเร็จ',
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
					}).then((result) => {
                        window.location.reload();
                    })
				}else{
					Swal.fire({
						icon: 'error',
						title: obj.info,
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
					})
				}
			}
        });    
});
</script>
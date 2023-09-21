<?php
$myid = $_GET['id'];
$sql = "SELECT * FROM deposit WHERE id = '$myid' ";
$date_deposit = $class_admin->load_db_date($sql);

$amount_dp = (float)$date_deposit->amount_dp;
$UsernameAgent = $LoadConfig->user_agent . $date_deposit->username_dp;
$Balance = $Load_Master->Master_Balance($UsernameAgent);
?>

<script type="text/javascript">
$(document).ready(function () {
$('.treeview a[href="/admin/deposit"]').parent().addClass("active").closest('.treeview').addClass('active');
});
</script>

<?php                    

if ($date_deposit->promotion_dp=='ไม่รับโบนัส') {
     $status_amount = $amount_dp + 0;
	 $date_deposit->turnover = 0;
	 $date_deposit->bonus_dp = 0;
}
$sql_promotion = "SELECT * FROM promotion ORDER BY id DESC";
$result_promotion = $class_admin->load_date_sql($sql_promotion);           
while($row_promotion = mysqli_fetch_array($result_promotion)) {
$namepro = $row_promotion['name_pro'];
$bonuspro = $row_promotion['bonus_pro'];
$bonusperpro = $row_promotion['bonusper_pro'];      
               
if ($date_deposit->promotion_dp == $namepro){
	
	$status_amount = ($amount_dp + $bonuspro) + ($amount_dp * $bonusperpro / 100);

	
}   
              
}

if ($amount_dp == 'กิจกรรม'){ 
	$status_amount = $date_deposit->bonus_dp;
}

?>
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
                        <a href="javascript:void(0)" class="check-out" class="dropdown-item">Log Out</a>
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
					<h4 class="text-black"><i class="fas fa-plus-square"></i> เพิ่มเครดิต</h4>
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
								<label class="control-label-dc">จำนวนเครดิตที่เติม</label>
								<input class="form-control" type="text" id="amount" value="<?php echo $status_amount; ?>">
							</div>
						</div>
						<div class="col-md-4 mt-2 align-self-center">
							<button type="button" id="addsubmit" class="btn btn-sm btn-success btn-block p-2"><i class="fas fa-check"></i> เพิ่มเครดิต</button>
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="col-md-6">
				<div class="info-box">
					<h4 class="text-black"><i class="fas fa-search-plus"></i> ตรวจสอบรายการฝากเงิน</h4>
					<hr class="mb-0">
					  <div class="d-flex justify-content-around box text-nowrap mb-4">
						<div class="col-sm-4 border-right">
							<div class="description-block">
								<h4 class="description-header text-black">เครดิตคงเหลือ</h4>
								<span class="description-text"><?php echo $Balance; ?></span>
							</div>
						</div>
						<div class="col-sm-4 border-right">
							<div class="description-block">
								<h4 class="description-header text-black">ยอดเติมเงิน</h4>
								<span class="description-text"><?php echo $date_deposit->amount_dp; ?></span>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="description-block">
								<h4 class="description-header text-black">โปรโมชั่นที่รับ</h4>
								<span class="description-text"><?php echo $date_deposit->promotion_dp; ?></span>
							</div>
						</div>
					  </div>

					<form method="post" id="form_depositupdateform" enctype="multipart/form-data">
					<input class="d-none" type="" name="id" value="<?php echo $myid; ?>">
					<div class="row mb-3">
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ยอดเงินฝาก</label>
							  <input class="form-control" type="text" name= "add_dp" value="<?php echo $_SESSION["name_ad"]; ?>" hidden>
							  <input class="form-control" type="text" name= "edit_dp" value="<?php echo $_SESSION["name_ad"]; ?>" hidden>
							  <input class="form-control" type="text" name="amount_dp" value="<?php echo $date_deposit->amount_dp; ?>">
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">โบนัส</label>
							  <input class="form-control" type="text" name="bonus_dp" value="<?php echo $date_deposit->bonus_dp; ?>">
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">เทิร์นโอเวอร์</label>
							  <input class="form-control" type="text" name="turnover" value="<?php echo $date_deposit->turnover; ?>">
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ยูสเซอร์เนม</label>
							  <input class="form-control" type="text" value="<?php echo $UsernameAgent; ?>" readonly="readonly">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ชื่อ-นามสกุล</label>
							  <input class="form-control" type="text" name="name_dp" value="<?php echo $date_deposit->name_dp; ?>" readonly="readonly">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">เบอร์โทรศัพท์</label>
							  <input class="form-control" type="text" name="phone_dp" value="<?php echo $date_deposit->phone_dp; ?>" readonly="readonly">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							<label class="control-label-dc">ธนาคารที่โอนเข้า</label>
								<select class="custom-select form-control" name="bankin_dp">
								<option selected="selected" value="<?php echo $date_deposit->bankin_dp; ?>"><?php echo $date_deposit->bankin_dp; ?></option>
								<option value="ไม่ถูกต้อง">ไม่ถูกต้อง/เครดิตฟรี</option>
								<?php
								$sql_bank = "SELECT * FROM bank WHERE bankfor LIKE '%ฝาก%' AND status_bank ='เปิด' ";
								$setting_bank = $class_admin->load_date_sql($sql_bank);
								?>
								<?php
								while($row_bank = mysqli_fetch_array($setting_bank)) {
								?>
									<option value="<?php echo $row_bank['name_bank']; ?> <?php echo $row_bank['bankacc_bank']; ?>"><?php echo $row_bank['name_bank']; ?> <?php echo $row_bank['bankacc_bank'];?></option>
								<?php
								}
								?>
							    </select>
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ธนาคาร</label>
							  <input class="form-control" type="text" name="bank_dp" value="<?php echo $date_deposit->bank_dp; ?>" readonly="readonly">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">เลขบัญชีธนาคาร</label>
							  <input class="form-control" type="text" name="bankacc_dp" value="<?php echo $date_deposit->bankacc_dp; ?>" readonly="readonly">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							<label class="control-label-dc">สถานะ</label>
								<select class="custom-select form-control" name="confirm_dp" required>
									<option value="<?php echo $date_deposit->confirm_dp; ?>"><?php echo $date_deposit->confirm_dp; ?></option>
									<option value="อนุมัติ">อนุมัติ</option>
									<option value="ปฏิเสธ">ปฏิเสธ</option>
							    </select>
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">หมายเหตุ***</label>
							  <input class="form-control" type="text" name="note_dp" value="<?php echo $date_deposit->note_dp; ?>">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">โปรโมชั่น</label>
							  <select class="custom-select form-control" name="promotion_dp">
							  <option selected="selected" value="<?php echo $date_deposit->promotion_dp; ?>"><?php echo $date_deposit->promotion_dp; ?></option>
							  <option value="ไม่รับโบนัส">ไม่รับโปรโมชั่น</option>
							  <?php
								$sql_pro = "SELECT * FROM promotion ORDER BY id DESC";
								$load_sql_pro = $class_admin->load_date_sql($sql_pro);
								?>
								<?php
								while($row_pro = mysqli_fetch_array($load_sql_pro)) {
								?>
									<option value="<?php echo $row_pro['name_pro']; ?>"><?php echo $row_pro['name_pro']; ?></option>
								<?php
								}
								?>
								</select>
							</fieldset>	
						</div>
						<div class="col-md-3 mt-2 align-self-center">
							<button type="submit" class="btn btn-sm btn-success btn-block p-2"><i class="fas fa-save"></i> บันทึก</button>
						</div>
					</div>
					</form>
					
					
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$('#addsubmit').click(function(e){
e.preventDefault();
var username = $("#username").val();
var amount = $("#amount").val();
//console.log(username);
//console.log(amount);
		$.ajax({
            url: '/api/admin/addcredit',
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
						title: 'เพิ่มเครดิต สำเร็จ',
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
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
$("#form_depositupdateform").on("submit",function(e){
e.preventDefault();
var formData = new FormData($(this)[0]);
formData.append("TABLE_NAME","deposit");
formData.append("WHERE_NAME","id");
formData.append("WHERE_VALUE",formData.get('id'));
        $.ajax({
            url: '/api/admin/run_update_sql',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
			success:function(data){
				Swal.fire({
					icon: 'success',
					title: 'บันทึก สำเร็จ',
					showConfirmButton: false,
					timer: 2000,
					timerProgressBar: true,
				}).then((result) => {
					window.location.reload();
				})
			}
        });    
});
</script>
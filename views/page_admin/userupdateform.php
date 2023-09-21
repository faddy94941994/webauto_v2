<?php
$id = $_GET['id'];
$sql = "SELECT * FROM member WHERE id_mb = '$id'";
$setting_member = $class_admin->load_db_date($sql);

$UsernameAgent = $LoadConfig->user_agent . $setting_member->username_mb;
$Balance = $Load_Master->Master_Balance($UsernameAgent);
?>
<?php
$id_dp = $setting_member->id_mb;                 
$sql2 = "SELECT * FROM deposit WHERE id_dp ='$id_dp' AND confirm_dp = 'อนุมัติ' ORDER BY id DESC limit 1";
$result_date2 = $class_admin->load_date_sql($sql2);
$result2_num = mysqli_num_rows($result_date2);
if($result2_num == 0){
	$row2['turnover'] = '';
	$row2['promotion_dp'] = '';
}else{
	$row2 = mysqli_fetch_assoc($result_date2);
}

$phone_mb = $setting_member->phone_mb; 

$sql_SUM_Amount_dp = $class_admin->load_date_sql("SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp = 'อนุมัติ' AND phone_dp = '$phone_mb'");
while($row = mysqli_fetch_array($sql_SUM_Amount_dp)) {
	$result_SUM_Amount_DP = $row['SUM(amount_dp)']; 
}
if (is_null($result_SUM_Amount_DP)) {
$result_SUM_Amount_DP = "0";
}

$sql_SUM_Amount_wd = $class_admin->load_date_sql("SELECT SUM(amount_wd) FROM withdraw WHERE confirm_wd = 'อนุมัติ' AND phone_wd = '$phone_mb'");
while($row = mysqli_fetch_array($sql_SUM_Amount_wd)) {
	$result_SUM_Amount_WD = $row['SUM(amount_wd)']; 
}
if (is_null($result_SUM_Amount_WD)) {
$result_SUM_Amount_WD = "0";
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
<div class="col mb-10">
<div class="bg-secondary rounded p-4 m-10" style= margin:30px;>
		<div class="info-box">
		<div class="row">
			<div class="col-md-12">
				<div class="bg-secondary bg-transparent">
					<h4 class="text-black"><i class="fas fa-search-plus"></i>  ตรวจสอบสมาชิก</h6>
					<hr class="mb-0">
					  <div class="d-flex justify-content-around">
						<div class="col-sm-4 border-right">
							<div class="description-block">
								<h6 class="bg-secondary bg-secondary">เครดิตคงเหลือ</h6>
								<span class="bg-secondary"><?php echo $Balance; ?></span>
							</div>
						</div>
						<div class="col-sm-4 border-right">
							<div class="description-block">
								<h6 class="bg-secondary">ยอดเทิร์นที่ต้องทำ</h6>
								<span class="bg-secondary"><?php if ($row2['turnover']=='') { echo 0; }else { echo $row2['turnover']; } ?></span>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="description-block">
								<h6 class="bg-secondary">โปรโมชั่นล่าสุด</h6>
								<span class="bg-secondary"><?php echo $row2['promotion_dp']; ?></span>
							</div>
						</div>
					  </div>
					  <div class="d-flex justify-content-around box text-nowrap mb-4">
						<div class="col-sm-3 border-right">
							<div class="description-block">
								<h6 class="bg-secondary">ยอดฝากทั้งหมด</h6>
								<span class="bg-secondary"><?php echo $result_SUM_Amount_DP; ?></span>
							</div>
						</div>
						<div class="col-sm-3 border-right">
							<div class="description-block">
								<h6 class="bg-secondary">ยอดถอนทั้งหมด</h6>
								<span class="bg-secondary"><?php echo $result_SUM_Amount_WD; ?></span>
							</div>
						</div>
						<div class="col-sm-3 border-right">
							<div class="description-block">
								<h6 class="bg-secondary">สิทธิ์หมุนวงล้อ</h6>
								<span class="bg-secondary"><?php echo $setting_member->creditspin; ?></span>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="description-block">
								<h6 class="bg-secondary">พ้อยด์</h6>
								<span class="bg-secondary"><?php echo $setting_member->point; ?></span>
							</div>
						</div>
					  </div>

				<form method="post" id="form_userupdateform" enctype="multipart/form-data">
					<input class="d-none" type="" name="id_mb" value="<?php echo $id; ?>">
					<div class="row mb-3">
						<div class="col-md-4">
							<fieldset class="form-group">
								<input type="text" name="edit_mb" value="<?php echo $_SESSION["name_ad"]; ?>" hidden>
							  <label class="control-label-dc">ยูสเซอร์เนม Agent</label>
							  <input class="form-control bg-dark" type="text" value="<?php echo $UsernameAgent; ?>" readonly>
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ยูสเซอร์เนม Affiliate</label>
							  <input class="form-control bg-dark" type="text" name="username_mb" value="<?php echo $setting_member->username_mb; ?>">
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">รหัสผ่าน</label>
							  <input class="form-control bg-dark" type="text" name="password_mb" value="<?php echo $setting_member->password_mb; ?>">
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ไอดีทรูวอเล็ต</label>
							  <input class="form-control bg-dark" type="text" name="phone_true" value="<?php echo $setting_member->phone_true; ?>">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">เลขบัญชีธนาคาร</label>
							  <input class="form-control bg-dark" type="text" name="bankacc_mb" value="<?php echo $setting_member->bankacc_mb; ?>">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc ">ธนาคาร</label>
							  <select class="custom-select form-control bg-dark" name="bank_mb" required>
								<option selected="selected" value="<?php echo $setting_member->bank_mb; ?>"><?php echo $setting_member->bank_mb; ?></option>
								<option value="ทรูวอเล็ต">ทรูวอเล็ต</option>
								<option value="ธ.กสิกรไทย">ธ.กสิกรไทย</option>
								<option value="ธ.กรุงไทย">ธ.กรุงไทย</option>
								<option value="ธ.กรุงศรีอยุธยา">ธ.กรุงศรีอยุธยา</option>
								<option value="ธ.กรุงเทพ">ธ.กรุงเทพ</option>
								<option value="ธ.ไทยพาณิชย์">ธ.ไทยพาณิชย์</option>
								<option value="ธ.ทหารไทยธนชาติ">ธ.ทหารไทยธนชาติ</option>
								<option value="ธ.ออมสิน">ธ.ออมสิน</option>
								<option value="ธ.ก.ส.">ธ.ก.ส.</option>
								<option value="ธ.ซีไอเอ็มบี">ธ.ซีไอเอ็มบี</option>
								<option value="ธ.ทิสโก้">ธ.ทิสโก้</option>
								<option value="ธ.ยูโอบี">ธ.ยูโอบี</option>
								<option value="ธ.อิสลาม">ธ.อิสลาม</option>
								<option value="ธ.ไอซีบีซี">ธ.ไอซีบีซี</option>
							  </select>
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">เบอร์โทรศัพท์</label>
							  <input class="form-control" type="text" name="phone_mb" value="<?php echo $setting_member->phone_mb; ?>">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ชื่อ-นามสกุล</label>
							  <input class="form-control" type="text" name="name_mb" value="<?php echo $setting_member->name_mb; ?>">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ผู้แนะนำ</label>
							  <input class="form-control" type="text" value="<?php echo $setting_member->aff; ?>">
							</fieldset>	
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							<label class="control-label-dc">สถานะ</label>
								<select class="custom-select form-control bg-dark" name="confirm_mb">
									<option value="<?php echo $setting_member->confirm_mb; ?>"><?php if($setting_member->confirm_mb == '1'){ echo "ยืนยัน"; } else { echo "ยังไม่ยืนยัน"; } ?></option>
									<option value="1">ยืนยัน</option>
									<option value="">ยังไม่ยืนยัน</option>
							    </select>
							</fieldset>
						</div>
						<div class="col-md-4">
							<fieldset class="form-group">
							  <label class="control-label-dc">ชื่อในแอพกสิกร</label>
							  <input class="form-control" type="text" name="name_eng" value="<?php echo $setting_member->name_eng; ?>">
							</fieldset>	
						</div>
						<div class="col-md-2">
							<fieldset class="form-group">
							  <label class="control-label-dc">สิทธิ์หมุนวงล้อ</label>
							  <input class="form-control" type="text" name="creditspin" value="<?php echo $setting_member->creditspin; ?>">
							</fieldset>	
						</div>
						<div class="col-md-2">
							<fieldset class="form-group">
							  <label class="control-label-dc">พ้อยด์</label>
							  <input class="form-control" type="text" name="point" value="<?php echo $setting_member->point; ?>">
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
$("#form_userupdateform").on("submit",function(e){
e.preventDefault();
var formData = new FormData($(this)[0]);
formData.append("TABLE_NAME","member");
formData.append("WHERE_NAME","id_mb");
formData.append("WHERE_VALUE",formData.get('id_mb'));
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
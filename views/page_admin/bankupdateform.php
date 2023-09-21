<?php
$id = $_GET['id'];
$sql = "SELECT * FROM bank WHERE id ='$id' ";
$setting_bank = $class_admin->load_db_date($sql);
?>
<script type="text/javascript">
$(document).ready(function () {
$('.treeview a[href="/admin/settingbank"]').parent().addClass("active").closest('.treeview').addClass('active');
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
			<div class="d-flex">
			  <div class="mr-auto"><h4 class="text-black"><i class="fas fa-cogs"></i> แก้ไข - ธนาคาร</h4></div>
			  <div class="col-lg-2 col-5"><button type="button" id="settingsubmit" class="btn btn-sm btn-success btn-block p-2"><i class="fas fa-save"></i> บันทึก</button></div>
			</div>
			<hr>
			
			<form id="form_bankupdateform" method="POST" enctype="multipart/form-data">
			<input class="d-none" type="" name="id" value="<?php echo $id; ?>">
			<div class="row">
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">ธนาคาร/ทรูวอเล็ต</label>
				  <select class="form-control bg-dark" name="name_bank" required="required">
					<option selected="selected bg-dark" value="<?php echo $setting_bank->name_bank; ?>"><?php echo $setting_bank->name_bank; ?></option>
					  <option value="ทรูวอเล็ต">ทรูวอเล็ต</option>
					  <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
					  <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
					  <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
					  <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
					  <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
					  <option value="ธนาคารทหารไทยธนชาติ">ธนาคารทหารไทยธนชาติ</option>
					  <option value="ธนาคารเกียรตินาคินภัทร">ธนาคารเกียรตินาคินภัทร</option>
				  </select>
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">เลขบัญชี</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->bankacc_bank; ?>" name="bankacc_bank">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">ชื่อบัญชี</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->nameacc_bank; ?>" name="nameacc_bank">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">ประเภท</label>
				  <select class="custom-select form-control bg-dark" name="bankfor">
					  <option selected="selected bg-dark" value="<?php echo $setting_bank->bankfor; ?>"><?php echo $setting_bank->bankfor; ?></option>
					  <option value="ฝาก">ฝาก</option>
					  <option value="ถอน">ถอน</option>
					  <option value="ฝากและถอน">ฝากและถอน</option>
				  </select>
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">DEVICE ID</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->device; ?>" name="device">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">PIN SCB/ทรูวอเล็ต</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->pin_bank; ?>" name="pin_bank">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">รหัสผ่านทรูวอเล็ต</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->password_true; ?>" name="password_true">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">เลขอ้างอิงทรูวอเล็ต</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->no_true; ?>" name="no_true">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">OTP ทรูวอเล็ต</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->otp_true; ?>" name="otp_true">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">User KBank</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->user_kbank; ?>" name="user_kbank">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">Pass KBank</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->pass_kbank; ?>" name="pass_kbank">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">ID KBank</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->id_kbank; ?>" name="id_kbank">
				</fieldset>
			  </div>
			  <div class="col-lg-4">
				<fieldset class="form-group">
				  <label class="control-label-dc">Token KBank</label>
				  <input class="form-control" type="text" value="<?php echo $setting_bank->token_kbank; ?>" name="token_kbank">
				</fieldset>
			  </div>
			  <div class="col-lg-1">
				<fieldset class="form-group text-center">
				  <label class="control-label-dc">สถานะ</label>
				  <div class="form-check form-switch form-switch-md">
					<input class="form-check-input" type="checkbox" name="status_bank" id="status_bank" <?php if ($setting_bank->status_bank == "เปิด")  { ?> checked <?php } ?>>
				  </div>
				</fieldset>
			  </div>
			  <div class="col-lg-2 mt-2 align-self-center">
					<button type="button" class="btn btn-sm btn-danger btn-block p-2" onclick="window.open('/system/run/tw4', '_blank')" ><i class="fas fa-sms"></i> รับ OTP ทรูวอเล็ต</button>
			  </div>
			  <div class="col-lg-2 mt-2 align-self-center">
					<button type="button" class="btn btn-sm btn-primary btn-block p-2" onclick="window.open('/system/run/tw5', '_blank')" ><i class="fab fa-google-wallet"></i> LOGIN ทรูวอเล็ต</button>
			  </div>
			  
			</div>
			<button type="submit" id="submitclick" class="d-none" ></button>
			</form>
			
		</div>
	</div>
</div>
<script type="text/javascript">
$('#settingsubmit').click(function(e){
e.preventDefault();
$('#submitclick').click();
});
</script>
<script type="text/javascript">
	$("#form_bankupdateform").on("submit",function(e){
        e.preventDefault();
		var checked = $('#status_bank').is(":checked") ? 'เปิด':'ปิด'; 
        var formData = new FormData($(this)[0]);
		formData.append("status_bank",checked);
		formData.append("TABLE_NAME","bank");
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
					window.location.href='./settingbank';
				})
			}
        });    
    });
</script>
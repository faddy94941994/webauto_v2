<?php
if (($_SESSION["status_ad"] != "")) {
  if($_SESSION["status_ad"] == "Admin"){
  echo "<script>window.location = './'</script>";
  exit;
}if($_SESSION["status_ad"] == "Staff"){
  echo "<script>window.location = './'</script>";
  exit;
}
}else{
  exit;
}
?>
<?php
$setting = $class_admin->load_db_setting();
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
<div class="content-wrapper">
	
<div class="container-fluid position-relative d-flex p-0">
		
    <div class="col mb-10">
      <div class="bg-secondary rounded p-4"style= margin:30px;>
      <div class="info-box">
		<div class="d-flex">
		  <div class="mr-auto"><h4 class="text-black"><i class="fas fa-cogs"></i> ตั้งค่า - เว็บไซต์  </h4></div>
		  <div class="col-lg-2 col-5"><button type="button" id="settingsubmit" class="btn btn-sm btn-success btn-block p-2"><i class="fas fa-save"></i> บันทึก</button></div>
		</div>
		<hr>
		
		<form method="post" id="form_setting" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ชื่อเว็บไซต์</label>
              <input class="form-control form-control-lg mb-3" type="text" name="name_web" id="name_web" value="<?php echo $setting->name_web; ?>" required>
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ลิ้งค์เว็บไซต์</label>
              <input class="form-control form-control-lg mb-3" type="text" name="link_web" id="link_web" value="<?php echo $setting->link_web; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ลิ้งค์แนะนำเพื่อน</label>
              <input class="form-control form-control-lg mb-3" type="text" name="link_aff" id="link_aff" value="<?php echo $setting->link_aff; ?>">
            </fieldset>
          </div>

		  
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">โลโก้เว็ปไซด์</label>
              <input class="form-control form-control-lg mb-3" type="text" name="logo_web" id="logo_web" value="<?php echo $setting->logo_web; ?>">
            </fieldset>
          </div>
		  
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ข้อความสไลด์</label>
              <input class="form-control form-control-lg mb-3" type="text" name="slide_1" id="slide_1" value="<?php echo $setting->slide_1; ?>">
            </fieldset>
          </div>
		  
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ไลน์ OA</label>
              <input class="form-control form-control-lg mb-3" type="text" name="lineoa" id="lineoa" value="<?php echo $setting->lineoa; ?>">
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ไลน์แจ้งเตือนสมัครสมาชิก</label>
              <input class="form-control form-control-lg mb-3" type="text" name="lineregister" id="lineregister" value="<?php echo $setting->lineregister; ?>">
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ไลน์แจ้งเตือนฝากเงิน</label>
              <input class="form-control form-control-lg mb-3" type="text" name="linedeposit" id="linedeposit" value="<?php echo $setting->linedeposit; ?>">
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ไลน์แจ้งเตือนถอนเงิน</label>
              <input class="form-control form-control-lg mb-3" type="text" name="linewithdraw" id="linewithdraw" value="<?php echo $setting->linewithdraw; ?>">
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">คืนยอดเสีย %</label>
              <input class="form-control form-control-lg mb-3" type="text" name="cashback" id="cashback" value="<?php echo $setting->cashback; ?>">
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">แนะนำเพื่อน %</label>
              <input class="form-control form-control-lg mb-3" type="text" name="affcashback" id="affcashback" value="<?php echo $setting->affcashback; ?>">
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ฝากเงินขั้นต่ำ</label>
              <input class="form-control form-control-lg mb-3" type="text" name="set_dp" id="set_dp" value="<?php echo $setting->set_dp; ?>">
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ถอนเงินขั้นต่ำ</label>
              <input class="form-control form-control-lg mb-3" type="text" name="set_wd" id="set_wd" value="<?php echo $setting->set_wd; ?>">
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">สถานะถอนออโต้</label>
              <select class="custom-select form-control form-control-lg mb-3 bg-dark" id="status_auto" name="status_auto">
				  <option selected="selected" value="<?php echo $setting->status_auto; ?>"><?php echo $setting->status_auto; ?></option>
                  <option value="ปิด">ปิด</option>
                  <option value="เปิด">เปิด</option>
              </select>
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ถอนออโต้สูงสุด</label>
              <input class="form-control form-control-lg mb-3" type="text" name="max_autowd" id="max_autowd" value="<?php echo $setting->max_autowd; ?>">
            </fieldset>
          </div>
		  <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">สถานะระบบออโต้</label>
              <select class="custom-select form-control form-control-lg mb-3 bg-dark" id="status_auto2" name="status_auto2">
				  <option selected="selected" value="<?php echo $setting->status_auto2; ?>"><?php echo $setting->status_auto2; ?></option>
                  <option value="ปิด">ปิด</option>
                  <option value="เปิด">เปิด</option>
              </select>
            </fieldset>
          </div>
            <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">1 เพชรแลกได้(เครดิต)</label>
              <input class="form-control form-control-lg mb-3" type="text" name="change_diamond" id="change_diamond" value="<?php echo $setting->change_diamond; ?>">
            </fieldset>
          </div>

        </div>
		<button type="submit" id="submitclick" class="d-none" ></button>
		</form>
		
    </div>
</div>

<script type="text/javascript">
$('#settingsubmit').click(function(e){
e.preventDefault();
$('#submitclick').click();
});

</script>
<script type="text/javascript">
$("#form_setting").on("submit",function(e){
e.preventDefault();
var formData = new FormData($(this)[0]);
formData.append("TABLE_NAME","setting");
formData.append("WHERE_NAME","id");
formData.append("WHERE_VALUE","1");
        $.ajax({
            url: '/api/admin/run_update_sql',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
			success:function(data){
				//console.log(data);
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
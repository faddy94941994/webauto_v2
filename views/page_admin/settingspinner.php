<?php
if ($_SESSION["status_ad"] != "") {
  if($_SESSION["status_ad"] == "Admin"){
  echo "<script>window.location = './'</script>";
  exit;
  }
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
		<div class="d-flex">
		  <div class="mr-auto"><h4 class="text-black"><i class="fas fa-cogs"></i> ตั้งค่า - วงล้อ</h4></div>
		  <div class="col-lg-2 col-4"><button type="button" id="settingsubmit" class="btn btn-sm btn-success btn-block p-2"><i class="fas fa-save"></i> บันทึก</button></div>
		</div>
		<hr>
		
		<form method="post" id="form_settingspinner" enctype="multipart/form-data">
		
		<div class="row">
          <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label-dc">ยอดฝากต่อ 1 สิทธิ์</label>
                <div class="input-group">
                <div class="input-group-addon"><i class="fas fa-sack-dollar"></i></div>
                <input class="form-control" type="text" name="dp_creditspin" value="<?php echo $setting->dp_creditspin; ?>">
                </div>
			</div>
          </div>
		  <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label-dc">แลกพ้อยด์ [1 พ้อยด์ = เครดิต]</label>
                <div class="input-group">
                <div class="input-group-addon"><i class="fas fa-exchange-alt"></i></div>
                <input class="form-control" type="text" name="change_point" value="<?php echo $setting->change_point; ?>">
                </div>
			</div>
          </div>
		  <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label-dc">รูปกลางวงล้อ</label>
                <div class="input-group">
                <div class="input-group-addon"><i class="fas fa-image"></i></div>
                <input class="form-control" type="text" name="ImageCenter" value="<?php echo $setting->ImageCenter; ?>">
                </div>
			</div>
          </div>
        </div>
		<hr>
		<h5 class="text-lg-left text-center"><label class="control-label-dc">ช่องรางวัล #1</label></h5>
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รางวัลที่</label>
              <input class="form-control" type="text" name="reward1" value="<?php echo $setting->reward1; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เปอร์เซ็นต์</label>
              <input class="form-control" type="text" name="Change1" value="<?php echo $setting->Change1; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รูปรางวัล</label>
              <input class="form-control" type="text" name="Image1" value="<?php echo $setting->Image1; ?>">
            </fieldset>
          </div>
        </div>
		<hr>
		<h5 class="text-lg-left text-center"><label class="control-label-dc">ช่องรางวัล #2</label></h5>
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รางวัลที่</label>
              <input class="form-control" type="text" name="reward2" value="<?php echo $setting->reward2; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เปอร์เซ็นต์</label>
              <input class="form-control" type="text" name="Change2" value="<?php echo $setting->Change2; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รูปรางวัล</label>
              <input class="form-control" type="text" name="Image2" value="<?php echo $setting->Image2; ?>">
            </fieldset>
          </div>
        </div>
		<hr>
		<h5 class="text-lg-left text-center"><label class="control-label-dc">ช่องรางวัล #3</label></h5>
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รางวัลที่</label>
              <input class="form-control" type="text" name="reward3" value="<?php echo $setting->reward3; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เปอร์เซ็นต์</label>
              <input class="form-control" type="text" name="Change3" value="<?php echo $setting->Change3; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รูปรางวัล</label>
              <input class="form-control" type="text" name="Image3" value="<?php echo $setting->Image3; ?>">
            </fieldset>
          </div>
        </div>
		<hr>
		<h5 class="text-lg-left text-center"><label class="control-label-dc">ช่องรางวัล #4</label></h5>
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รางวัลที่</label>
              <input class="form-control" type="text" name="reward4" value="<?php echo $setting->reward4; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เปอร์เซ็นต์</label>
              <input class="form-control" type="text" name="Change4" value="<?php echo $setting->Change4; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รูปรางวัล</label>
              <input class="form-control" type="text" name="Image4" value="<?php echo $setting->Image4; ?>">
            </fieldset>
          </div>
        </div>
		<hr>
		<h5 class="text-lg-left text-center"><label class="control-label-dc">ช่องรางวัล #5</label></h5>
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รางวัลที่</label>
              <input class="form-control" type="text" name="reward5" value="<?php echo $setting->reward5; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เปอร์เซ็นต์</label>
              <input class="form-control" type="text" name="Change5" value="<?php echo $setting->Change5; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รูปรางวัล</label>
              <input class="form-control" type="text" name="Image5" value="<?php echo $setting->Image5; ?>">
            </fieldset>
          </div>
        </div>
		<hr>
		<h5 class="text-lg-left text-center"><label class="control-label-dc">ช่องรางวัล #6</label></h5>
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รางวัลที่</label>
              <input class="form-control" type="text" name="reward6" value="<?php echo $setting->reward6; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เปอร์เซ็นต์</label>
              <input class="form-control" type="text" name="Change6" value="<?php echo $setting->Change6; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รูปรางวัล</label>
              <input class="form-control" type="text" name="Image6" value="<?php echo $setting->Image6; ?>">
            </fieldset>
          </div>
        </div>
		<hr>
		<h5 class="text-lg-left text-center"><label class="control-label-dc">ช่องรางวัล #7</label></h5>
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รางวัลที่</label>
              <input class="form-control" type="text" name="reward7" value="<?php echo $setting->reward7; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เปอร์เซ็นต์</label>
              <input class="form-control" type="text" name="Change7" value="<?php echo $setting->Change7; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รูปรางวัล</label>
              <input class="form-control" type="text" name="Image7" value="<?php echo $setting->Image7; ?>">
            </fieldset>
          </div>
        </div>
		<hr>
		<h5 class="text-lg-left text-center"><label class="control-label-dc">ช่องรางวัล #8</label></h5>
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รางวัลที่</label>
              <input class="form-control" type="text" name="reward8" value="<?php echo $setting->reward8; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เปอร์เซ็นต์</label>
              <input class="form-control" type="text" name="Change8" value="<?php echo $setting->Change8; ?>">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รูปรางวัล</label>
              <input class="form-control" type="text" name="Image8" value="<?php echo $setting->Image8; ?>">
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
$("#form_settingspinner").on("submit",function(e){
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
				})
			}
        });    
});
</script>
<script type="text/javascript">
$(document).ready(function () {
$('.treeview a[href="/admin/allmember"]').parent().addClass("active").closest('.treeview').addClass('active');
});
</script>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM member WHERE id_mb = '$id'";
$date_member = $class_admin->load_db_date($sql);
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
			<h4 class="text-black"><i class="fas fa-plus-circle"></i> เพิ่มรายการฝาก</h4>
			<hr>
			<h6 class="text-black"><?php echo $LoadConfig->user_agent; ?><?php echo $date_member->username_mb; ?> : <?php echo $date_member->name_mb; ?></h6>
			<hr>
			
			<form method="post" id="form_depositform_user" enctype="multipart/form-data">
			<div class="row mb-3">
			<input type="text" name="phone_mb" value="<?php echo $date_member->phone_mb; ?>" hidden>
				<div class="col-md-4 col-lg-3">
					<div class="form-group has-feedback">
						<label class="control-label-dc">ใส่ยอดเงินที่ต้องการฝาก</label>
						<input class="form-control" name="amount_dp" type="text" required>
					</div>
				</div>
				<div class="col-md-4 col-lg-3">
					<div class="form-group has-feedback">
						<label class="control-label-dc">เลือกรับโปรโมชั่นที่ท่านต้องการ</label>
						<select class="custom-select form-control" name="promotion_dp" required>
							<option></option>
							<option value="ไม่รับโบนัส">ไม่รับโบนัส ไม่ต้องทำเทิร์น</option>
                            <option value="เครดิตฟรี">เครดิตฟรี</option>
							<?php
                                $query = "SELECT * FROM promotion ORDER BY id desc";
								$result = $class_admin->load_date_sql($query);
                                while($row = mysqli_fetch_array($result)) {
                                 echo '<option value="'.$row["name_pro"].'">'.$row["name_pro"].'</option>';
                                } ?>
						</select>
					</div>	
				</div>
				<div class="col-md-4">
							<fieldset class="form-group">
							<label class="control-label-dc">ธนาคารที่โอนเข้า</label>
								<select class="custom-select form-control" name="name_bank">
								<option value="เครดิตฟรี">เครดิตฟรี</option>
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
				<div class="col-md-2 col-lg-3 mt-2 align-self-center">
					<button type="submit" class="btn btn-sm btn-success btn-block p-2"><i class="far fa-check"></i> ทำรายการ</button>
				</div>
			</div>
			</form>
			
		</div>
	</div>
</div>
<script type="text/javascript">
$("#form_depositform_user").on("submit",function(e){
e.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: '/api/admin/depositformuser',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
			success:function(data){
				var obj = JSON.parse(data);
				if (obj.status=="success"){
					Swal.fire({
						icon: 'success',
						title: obj.info,
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
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

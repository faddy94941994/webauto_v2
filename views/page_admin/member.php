<?php
			$sql = "SELECT * FROM setting";
			$result = $class_admin->load_date_sql($sql);
			$row = mysqli_fetch_array($result);
			$logo = $row['logo_web'];
			
		?>
            <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
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
                    <a href="/admin" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>แดชบอร์ด</a>
					<a href="/admin/allmember" class="nav-item nav-link"><i class="fas fa-users me-2"></i>สมาชิกทั้งหมด</a>
					<a href="/admin/member" class="nav-item nav-link active"><i class="fas fa-user-plus me-2"></i>สมาชิกใหม่ <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_member">0</button>
                    <a href="/admin/deposit" class="nav-item nav-link"><i class="fal fa-envelope-open-dollar me-2"></i>รอฝาก <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_deposit">0</button>        
                    <a href="/admin/withdraw" class="nav-item nav-link"><i class="fal fa-money-check-edit-alt me-2"></i>รายการถอน <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_withdraw">0</button>					
					<a href="/admin/withdrawaff" class="nav-item nav-link"><i class="fad fa-users-class me-2"></i>ถอนแนะนำ <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_withdrawaff">0</button>					
					<a href="/admin/QR" class="nav-item nav-link"><i class="far fa-qrcode me-2"></i>แสกนQR</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-history me-2"></i>ประวัติ</a>
                        <div class="dropdown-menu bg-transparent border-0">
					<a href="/admin/spin_history" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ หมุนวงล้อ </a>
					<a href="/admin/changespin_history" class="dropdown-item"><i class="fas fa-history me-2">></i>ประวัติ  แลกพ้อยด์วงล้อ</a>
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
			  <div class="mr-auto"><h4 class="text-black"><i class="fas fa-users"></i> ข้อมูลสมาชิก</h4></div>
			  <div class="col-lg-2 col-5"><button type="button" class="btn btn-sm btn-success btn-block p-2" data-toggle="modal" data-target="#myModal"><i class="fas fa-user-plus"></i> เพิ่มสมาชิก</button></div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-nowrap text-center">
					<thead class="text-black">
						<tr>
							<th scope="col">สถานะ</th>
							<th scope="col">ยูสเซอร์เนม</th>
							<th scope="col">เบอร์โทรศัพท์</th>
							<th scope="col">ชื่อ-นามสกุล</th>
							<th scope="col">วันลงทะเบียน</th>
						</tr>
					</thead>
					<tbody>
<?php
date_default_timezone_set("Asia/Bangkok");
$today_new = date('Y-m-d');
$sql = "SELECT * FROM member WHERE phone_mb !='' AND date_mb LIKE '%$today_new%' ORDER BY id_mb desc";
$load_date  = $class_admin->load_date_sql($sql);
while($row = mysqli_fetch_array($load_date)) {
?>
								<tr>
									<td class="align-middle">
										<div class="btn-group">
<?php
if ($row["confirm_mb"]=="") {
				echo"<span class='btn btn-info btn-sm noHover'><i class='fas fa-spinner fa-spin'></i> รอยืนยัน</span>";
				echo"<a href='/admin/userupdateform?id=$row[0]' class='btn btn-success btn-sm'><i class='fas fa-eye'></i> ตรวจสอบ</a>";
}
if ($row["confirm_mb"]=="1") {
				echo"<span class='btn btn-success btn-sm px-4 noHover'><i class='fas fa-check'></i> เรียบร้อย</span>";
} 
?>
										</div>
									</td>
									<td class="align-middle"><?php echo $LoadConfig->user_agent; ?><?php echo $row["username_mb"]; ?></td>
									<td class="align-middle"><?php echo $row["phone_mb"]; ?></td>
									<td class="align-middle"><?php echo $row["name_mb"]; ?></td>
									<td class="align-middle"><?php echo $row["date_mb"]; ?></td>
								</tr>	
<?php } ?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="myModal" role="dialog">
  <div class="modal-md">
    <div class="card">
      <div class="card-header">
        <div class="clearfix">
          <span class="float-left h4">
            <i class="fas fa-user-plus"></i> เพิ่มสมาชิก </span>
          <span id="closemodal_1" class="float-right text-danger" data-dismiss="modal">
            <i class="fas fa-window-close fa-2x"></i>
          </span>
        </div>
      </div>
	<form method="POST" id="form_register_mb">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เบอร์โทรศัพท์</label>
              <input class="form-control" type="text" name="phone_mb">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">รหัสผ่าน</label>
              <input class="form-control" type="text" name="password_mb">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ไอดีทรูวอเล็ต</label>
              <input class="form-control" type="text" name="phone_true">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ธนาคาร</label>
              <select class="custom-select form-control" name="bank_mb">
                <option selected="selected">เลือกธนาคาร</option>
                <option value="ทรูวอเล็ต">ทรูวอเล็ต</option>
                <option value="ธนาคารกสิกรไทย">ธ.กสิกรไทย</option>
                <option value="ธนาคารกรุงไทย">ธ.กรุงไทย</option>
                <option value="ธนาคารกรุงศรีอยุธยา">ธ.กรุงศรีอยุธยา</option>
                <option value="ธนาคารกรุงเทพ">ธ.กรุงเทพ</option>
                <option value="ธนาคารไทยพาณิชย์">ธ.ไทยพาณิชย์</option>
                <option value="ธนาคารทหารไทยธนชาติ">ธ.ทหารไทยธนชาติ</option>
                <option value="ธนาคารออมสิน">ธ.ออมสิน</option>
                <option value="ธ.ก.ส.">ธ.ก.ส.</option>
                <option value="ธนาคารซีไอเอ็มบี">ธ.ซีไอเอ็มบี</option>
                <option value="ธนาคารทิสโก้">ธ.ทิสโก้</option>
                <option value="ธนาคารยูโอบี">ธ.ยูโอบี</option>
                <option value="ธนาคารอิสลาม">ธ.อิสลาม</option>
                <option value="ธนาคารไอซีบีซี">ธ.ไอซีบีซี</option>
                <option value="ธนาคารเกียรตินาคินภัทร">ธ.เกียรตินาคินภัทร</option>
              </select>
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">เลขบัญชีธนาคาร</label>
              <input class="form-control" type="text" name="bankacc_mb">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label class="control-label-dc">ชื่อ-นามสกุล</label>
              <input class="form-control" type="text" name="name_mb">
            </fieldset>
          </div>
        </div>
      </div>
	  <input type="text" name="confirm_mb" value="1" hidden="hide">
	  <input type="text" name="status_mb" value="2" hidden="hide">
	  <input type="text" name="add_mb" value="Asadayut" hidden="hide">
	  <button type="submit" id="submitclick" class="d-none" ></button>
	</form>	
      <div class="card-footer">
        <button type="button" id="settingsubmit" class="btn btn-success float-right">
          <i class="fas fa-save"></i> ยืนยัน </button>
      </div>
	
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
$("#form_register_mb").on("submit",function(e){
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: '/api/admin/register_mb',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
			success:function(data){
				//console.log(data);
				var obj = JSON.parse(data);
				if (obj.status=="success"){
					$('#closemodal_1').click();
					Swal.fire({
						icon: 'success',
						title: obj.info,
						showConfirmButton: false,
						timer: 2000,
						timerProgressBar: true,
					}).then((result) => {
						window.location.href='./member';
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

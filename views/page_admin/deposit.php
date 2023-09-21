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
					<a href="/admin/member" class="nav-item nav-link"><i class="fas fa-user-plus me-2"></i>สมาชิกใหม่ <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_member">0</button>
                    <a href="/admin/deposit" class="nav-item nav-link  active"><i class="fal fa-envelope-open-dollar me-2"></i>รอฝาก <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_deposit">0</button>        
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
			  <div class="mr-auto"><h4 class="text-black"><i class="fas fa-clipboard-list"></i> เช็คข้อมูลการฝาก</h4></div>
			  <div class="col-lg-2 col-5"><button type="button" id="deletedeposit" class="btn btn-sm btn-danger btn-block p-2"><i class="fas fa-trash-alt"></i> ลบทั้งหมด</button></div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-nowrap text-center">
					<thead class="text-black">
						<tr>
							<th scope="col">สถานะ</th>
							<th scope="col">ยูสเซอร์เนม</th>
							<th scope="col">ยอดเงินฝาก</th>
							<th scope="col">โปรโมชั่น</th>
							<th scope="col">เบอร์โทรศัพท์</th>
							<th scope="col">ชื่อ-นามสกุล</th>
							<th scope="col">เวลา</th>
						</tr>
					</thead>
					<tbody>
<?php
$sql_deposit = "SELECT * FROM deposit WHERE confirm_dp = 'รอดำเนินการ' ORDER BY id DESC";
$load_date_deposit  = $class_admin->load_date_sql($sql_deposit);
while($row = mysqli_fetch_array($load_date_deposit)) {
?>
								<tr>
									<td class="align-middle">
										<div class="btn-group">
<?php
if ($row["confirm_dp"]=="รอดำเนินการ") {
				echo"<span class='btn btn-info btn-sm noHover'><i class='fas fa-spinner fa-spin'></i> กำลังดำเนินการ</span>";
				echo"<a href='/admin/depositupdateform?id=$row[0]' class='btn btn-success btn-sm'><i class='fas fa-eye'></i> ตรวจสอบ</a>";
}
if ($row["confirm_dp"]=="อนุมัติ") {
				echo"<span class='btn btn-success btn-sm px-4 noHover'><i class='fas fa-check'></i> อนุมัติ</span>";
}
if ($row["confirm_dp"]=="ปฏิเสธ") {
				echo"<span class='btn btn-sm btn-danger px-4 noHover'><i class='fas fa-times'></i> ปฏิเสธ</span>";
}
?>
										</div>
									</td>
									<td class="align-middle"><?php echo $LoadConfig->user_agent; ?><?php echo $row["username_dp"]; ?></td>
									<td class="align-middle"><?php if($row["amount_dp"] == ''){ echo 'รอฝาก'; }else{ echo $row["amount_dp"]; } ?></td>
									<td class="align-middle"><?php echo $row["promotion_dp"]; ?></td>
									<td class="align-middle"><?php echo $row["phone_dp"]; ?></td>
									<td class="align-middle"><?php echo $row["name_dp"]; ?></td>
									<td class="align-middle"><?php echo $row["date_dp"]; ?></td>
								</tr>	
<?php } ?>					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="card">
      <div class="card-header">
        <div class="clearfix">
          <span class="float-left h4">
            <i class="fas fa-user-plus"></i> เพิ่มสมาชิก </span>
          <span class="float-right text-danger" data-dismiss="modal">
            <i class="fas fa-window-close fa-2x"></i>
          </span>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label>เบอร์โทรศัพท์</label>
              <input class="form-control" type="text">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label>รหัสผ่าน</label>
              <input class="form-control" type="text">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label>ไอดีทรูวอเล็ต</label>
              <input class="form-control" type="text">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label>ธนาคาร</label>
              <select class="custom-select form-control">
                <option selected="selected">เลือกธนาคาร</option>
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
                <option value="ธ.เกียรตินาคินภัทร">ธ.เกียรตินาคินภัทร</option>
              </select>
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label>เลขบัญชีธนาคาร</label>
              <input class="form-control" type="text">
            </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset class="form-group">
              <label>ชื่อ-นามสกุล</label>
              <input class="form-control" type="text">
            </fieldset>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-success float-right">
          <i class="fas fa-save"></i> ยืนยัน </button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$('#deletedeposit').click(function(e){
e.preventDefault();


		$.ajax({
            url: '/api/admin/deletedepositall',
            type: 'POST',
			success:function(data){
				Ajax_Notification();
				Swal.fire({
					icon: 'success',
					title: 'ลบรายการทั้งหมด สำเร็จ',
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
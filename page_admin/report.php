<?php
$load_page_report = $class_admin->load_page_report();

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
			<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
<div class="wrapper boxed-wrapper">
<header class="main-header">
	
	<nav class="navbar blue-bg navbar-static-top">
	<div class="col mb-10">
		<div class="bg-secondary rounded p-4"style= margin:30px;>
		<div class="row">
			<div class="col">
				<div class="info-box">
					<h4 class="text-black"><i class="fas fa-clipboard-list"></i> รายการฝากล่าสุด</h4>
					<hr>
					<div class="table-responsive">
						<table id="Table1" class="table table-bordered text-nowrap text-center">
							<thead class="text-black">
								<tr>
									<th scope="col">เบอร์โทรศัพท์</th>
									<th scope="col">ชื่อ-นามสกุล</th>
									<th scope="col">ยอดฝาก</th>
									<th scope="col">โปรโมชั่น</th>
									<th scope="col">วันเวลาที่ฝาก</th>
								</tr>
							</thead>
							<tbody>
<?php 
$sql_deposit = "SELECT * FROM deposit WHERE confirm_dp ='อนุมัติ' AND bankin_dp!='ไม่ถูกต้อง' ORDER BY id desc LIMIT 5";
$load_date_deposit = $class_admin->load_date_sql($sql_deposit);
while($row = mysqli_fetch_array($load_date_deposit)) {
?>
								<tr>
									<td class="align-middle"><?php echo $row["phone_dp"]; ?></td>
									<td class="align-middle"><?php echo $row["name_dp"]; ?></td>
									<td class="align-middle"><?php echo $row["amount_dp"]; ?></td>
									<td class="align-middle"><?php echo $row["promotion_dp"]; ?></td>
									<td class="align-middle"><?php echo $row["date_dp"]; ?></td>
								</tr>	
<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="info-box">
					<h4 class="text-black"><i class="fas fa-clipboard-list"></i> รายการถอนล่าสุด</h4>
					<hr>
					<div class="table-responsive">
						<table class="table table-bordered text-nowrap text-center">
							<thead class="text-black">
								<tr>
									<th scope="col">เบอร์โทรศัพท์</th>
									<th scope="col">ชื่อ-นามสกุล</th>
									<th scope="col">ยอดถอน</th>
									<th scope="col">วันเวลาที่ถอน</th>
								</tr>
							</thead>
							<tbody>
<?php
$sql_withdraw = "SELECT * FROM withdraw WHERE confirm_wd ='อนุมัติ' AND amount_wd!='' ORDER BY id desc LIMIT 5";
$load_date_withdraw  = $class_admin->load_date_sql($sql_withdraw);
while($row = mysqli_fetch_array($load_date_withdraw)) {
?>
								<tr>
									<td class="align-middle"><?php echo $row["phone_wd"]; ?></td>
									<td class="align-middle"><?php echo $row["name_wd"]; ?></td>
									<td class="align-middle"><?php echo $row["amount_wd"]; ?></td>
									<td class="align-middle"><?php echo $row["date_wd"]; ?></td>
								</tr>	
<?php } ?>	
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="info-box">
			<h4 class="text-black"><i class="fas fa-chart-pie"></i> รายงานสรุปกำไร - ขาดทุน</h4>
			<hr>
			<div class="row mb-3">
				<div class="col-md-2">
					<div class="form-group has-feedback">
						<label class="control-label">จากวันที่ :</label>
						<input class="form-control" id="FromDay" type="text"> </div>
				</div>
				<div class="col-md-2">
					<div class="form-group has-feedback">
						<label class="control-label">ถึงวันที่ :</label>
						<input class="form-control" id="ToDay" type="text"> </div>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="buttonsearch" class="btn btn-sm btn-success btn-block p-2"><i class="far fa-search"></i> ค้นหา</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="buttontoday" class="btn btn-sm btn-primary btn-block p-2"> วันนี้</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="buttonyesterday" class="btn btn-sm btn-primary btn-block p-2">เมื่อวาน</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="buttonthismonth" class="btn btn-sm btn-primary btn-block p-2">เดือนนี้</button>
				</div>
			</div>
			<hr>
			<h5 class="text-black"><i class="fas fa-file-search"></i> รายงานประจำวันที่</h5>
			<h6 class="text-black"><span id="ShowFromDay" >×</span> ถึง <span id="ShowToDay" >×</span></h6>
			<hr>
			<div class="table-responsive">
				<table id="testtable" class="table table-bordered text-nowrap text-center">
					<thead class="text-black">
						<tr>
							<th scope="col">ยอดฝาก</th>
							<th scope="col">ยอดถอน</th>
							<th scope="col">กำไร-ขาดทุน</th>
						</tr>
					</thead>
					<tbody id="showdateget">
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

function showdatelist(GetDate) {
	$('#showdateget').html('');
	html = "";
	html += '<tr>';
	html += '<th scope="col">' + GetDate.totalnumber_deposit + '</th>';
	html += '<th scope="col">' + GetDate.totalnumber_withdraw + '</th>';
	html += '<th scope="col">' + GetDate.total + '</th>';
	html += '</tr>';
	$('#showdateget').html(html);
	$('#ShowFromDay').html(GetDate.ShowFromDay);
	$('#ShowToDay').html(GetDate.ShowToDay);
}
</script>

<script type="text/javascript">
$("#buttonsearch").click(function(){
var FromDay = $("#FromDay").val();
var ToDay = $("#ToDay").val();
$.ajax({
      type: "POST",
      url: "/api/admin/loaddatereport",
      data: {
          FromDay:FromDay,
          ToDay:ToDay,
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  showdatelist(obj);
      }
  });
});

$("#buttontoday").click(function(){
var today = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loaddatereport",
      data: {
          today:today
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  showdatelist(obj);
      }
  });
});

$("#buttonyesterday").click(function(){
var yesterday = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loaddatereport",
      data: {
          yesterday:yesterday
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  showdatelist(obj);
      }
  });
});

$("#buttonthismonth").click(function(){
var thismonth = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loaddatereport",
      data: {
          thismonth:thismonth
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  showdatelist(obj);
      }
  });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
jQuery.datetimepicker.setLocale('th');
jQuery('#FromDay').datetimepicker({
	lang:'th',
	timepicker:false,
	format:'Y-m-d'
});
jQuery('#ToDay').datetimepicker({
	lang:'th',
	timepicker:false,
	format:'Y-m-d'
});
</script>

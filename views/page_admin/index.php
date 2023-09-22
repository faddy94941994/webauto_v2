<?php
if(!isset($_SESSION['id_ad'])){
	echo "<script>window.location = './login'</script>";
	exit;
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
					<a href="/admin/member" class="nav-item nav-link"><i class="fas fa-spinner fa-spin me-2"></i> สมาชิกใหม่ <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_member">0</button>
                    <a href="/admin/deposit" class="nav-item nav-link"><i class="fas fa-spinner fa-spin me-2"></i>รอฝาก <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_deposit">0</button>        
                    <a href="/admin/withdraw" class="nav-item nav-link"><i class="fas fa-spinner fa-spin me-2"></i>รายการถอน <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_withdraw">0</button>					
					<a href="/admin/withdrawaff" class="nav-item nav-link"><i class="fas fa-spinner fa-spin me-2"></i>ถอนแนะนำ <button type ="botton"class="btn btn-sm btn-sm-square btn-outline-primary m-2" id="count_withdrawaff">0</button>					
					<a href="/admin/QR" class="nav-item nav-link"><i class="far fa-qrcode me-2"></i>แสกนQR</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-history me-2"></i>ประวัติ</a>
                        <div class="dropdown-menu bg-transparent border-0">
					<a href="/admin/spin_history" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ หมุนวงล้อ </a>
					<a href="/admin/changespin_history" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ  แลกพ้อยด์วงล้อ</a>
                    <a href="/admin/deposit_history" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ รายการฝาก </a>
                    <a href="/admin/withdraw_history" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ การถอน </a>
                    <a href="/admin/aff_report" class="dropdown-item"><i class="fas fa-history me-2"></i>ประวัติ แนะนำ</a>
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
						<!--<a href="/admin/settingapikey" class="dropdown-item">API BETFLIX</a>-->
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
<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Spinner End -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- Sidebar Start -->



        <!-- Content Start -->

            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-user-friends fa-2x text-primary"></i>
                            <div class="ms-3">
                                <h6 class="text-body"style="text-align:right;">สมาชิกทั้งหมด</h6>
                                <h3 class="mb-0" id="allmembers"style="text-align:right;">0</h3><span class="progress-description text-white d-sm-none d-md-none">สมาชิกทั้งหมด</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                            <div class="ms-3">
							<h6 class="text-body"style="text-align:right;">รายได้วันนี้</h6>
                                <h3 class="mb-0"id="TotalAmount"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none">รายได้วันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fad fa-hands-usd fa-2x text-primary"></i>
                            <div class="ms-3">
                                <h6 class="text-body"style="text-align:right;">ยอดฝากวันนี้</h6>
                                <h3 class="mb-0"id="SUM_Amount_DP_ToDay"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none">ยอดฝากวันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-exchange-alt fa-2x text-primary"></i>
                            <div class="ms-3">
							<h6 class="text-body"style="text-align:right;"style="text-align:right;">ยอดถอนวันนี้</h6>
                                <h3 class="mb-0"id="SUM_Amount_WD_ToDay"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none">ยอดถอนวันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-ballot-check fa-2x text-primary"></i>
                            <div class="ms-3">
							<h6 class="text-body"style="text-align:right;">จำนวนบิลฝากวันนี้</h6>
                                <h3 class="mb-0"id="bill_DP"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none"style="text-align:right;">จำนวนบิลฝากวันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-ballot-check fa-2x text-primary"></i>
                            <div class="ms-3">
								<h6 class="text-body"style="text-align:right;">จำนวนบิลถอนวันนี้</h6>
                                <h3 class="mb-0"id="bill_WD"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none"style="text-align:right;">จำนวนบิลถอนวันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fad fa-envelope-open-dollar fa-2x text-primary"></i>
                            <div class="ms-3">
								<h6 class="text-body"style="text-align:right;">รับยอดเสียรวมวันนี้</h6>
                                <h3 class="mb-0"id="amount_cashback"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none"style="text-align:right;">จำนวนบิลถอนวันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="far fa-hand-holding-usd fa-2x text-primary"></i>
                            <div class="ms-3">
								<h6 class="text-body"style="text-align:right;">ยอดถอนแนะนำเพื่อน</h6>
                                <h3 class="mb-0"id="amount_aff"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none">จำนวนบิลถอนวันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-coins fa-2x text-primary"></i>
                            <div class="ms-3">
								<h6 class="text-body"style="text-align:right;">แลกพ้อยด์</h6>
                                <h3 class="mb-0"id="change_point"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none">จำนวนบิลถอนวันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-money-check-edit-alt fa-2x text-primary"></i>
                            <div class="ms-3">
								<h6 class="text-body"style="text-align:right;">จำนวนสมาชิกฝากเงินวันนี้</h6>
                                <h3 class="mb-0"id="members_deposit_today"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none">จำนวนบิลถอนวันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-donate fa-2x text-primary"></i>
                            <div class="ms-3">
								<h6 class="text-body"style="text-align:right;">ยอดโบนัสวันนี้</h6>
                                <h3 class="mb-0"id="bonustoday"style="text-align:right;">0</h3> <span class="progress-description text-white d-sm-none d-md-none">จำนวนบิลถอนวันนี้ </span></h6>
                            </div>
                        </div>
                    </div>
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
                <div class="col-sm-12 col-md-2 col-xl-6">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">ปฎิฑิน</h6>
                            <a href="/admin/report" >ดูสรุปรายวัน</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
            <!-- Recent Sales End -->

			<hr>

 <!-- Sales Chart Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h4 class="mb-0">เครดิตคงเหลือ Agent :</h4>
							</div>
							<div class="col">
							<h5 class="text-white d-none d-sm-block d-md-block">BETFLIX</h5>
								<h4 class="text-white" id="credit_ufa">0</h4> <span class="progress-description text-white d-sm-none d-md-none">เครดิตคงเหลือ </span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h4 class="mb-0">ยอดเงินคงเหลือบัญชี</h4>
                            </div>
                            <div class="row dc-gutters" >
							<?php
			$sqlscb = "SELECT * FROM bank WHERE name_bank = 'ธนาคารไทยพาณิชย์'";
			$load_date_scb = $class_admin->load_date_sql($sqlscb);
			$num_scb = mysqli_num_rows($load_date_scb);
			if($num_scb > 0){
			?>
			<div class="col-lg-3 col-6">
				<div class="info-box bg-purple"> <span class="info-box-icon bg-transparent text-white"><i class="fas fa-university"></i></span>
					<div class="info-box-content">
						<h6 class="text-white d-none d-sm-block d-md-block">ไทยพาณิชย์</h6>
						<h4 class="text-white" id="credit_scb">0</h4> <span class="progress-description text-white d-sm-none d-md-none">ไทยพาณิชย์ </span> </div>
				</div>
			</div>
			<?php } ?>
			<?php
			$sqlkbank = "SELECT * FROM bank WHERE name_bank = 'ธนาคารกสิกรไทย'";
			$load_date_kbank = $class_admin->load_date_sql($sqlkbank);
			$num_kbank = mysqli_num_rows($load_date_kbank);
			if($num_kbank > 0){
			?>
			<div class="col">
				<div class="info-box bg-green"> <span class="info-box-icon bg-transparent text-white"><i class="fas fa-university"></i></i></span>
					<div class="info-box-content">
						<h5 class="mb-0">กสิกรไทย</h5>
						<h4 class="text-white" id="credit_kbank">0</h4> <span class="progress-description text-white d-sm-none d-md-none">กสิกรไทย </span> </div>
				</div>
			</div>
			<?php } ?>

			<?php
			$sqltruewallet = "SELECT * FROM bank WHERE name_bank = 'ทรูวอเล็ต'";
			$load_date_truewallet = $class_admin->load_date_sql($sqltruewallet);
			$num_truewallet = mysqli_num_rows($load_date_truewallet);
			if($num_truewallet > 0){
			?>
			<div class="col">
				<div class="info-box bg-yellow"> <span class="info-box-icon bg-transparent text-white"><i class='fas fa-wallet'></i></span>
					<div class="info-box-content">
						<h5 class="text-white d-none d-sm-block d-md-block">ทรูมันนี่วอลเล็ท</h5>
						<h4 class="text-white" id="credit_true">0</h4> <span class="progress-description text-white d-sm-none d-md-none">ทรูมันนี่วอลเล็ท </span> </div>
				</div>
			</div>
			<?php } ?>
			<?php
			$sqlsaving = "SELECT * FROM bank WHERE name_bank = 'ธนาคารออมสิน'";
			$load_date_saving = $class_admin->load_date_sql($sqlsaving);
			$num_saving = mysqli_num_rows($load_date_saving);
			if($num_saving > 0){
			?>
			<div class="col-lg-3 col-6">
				<div class="info-box bg-fuchsia"> <span class="info-box-icon bg-transparent text-white"><i class="fas fa-university"></i></span>
					<div class="info-box-content">
						<h6 class="text-white d-none d-sm-block d-md-block">ธนาคารออมสิน</h6>
						<h4 class="text-white" id="credit_saving">0</h4> <span class="progress-description text-white d-sm-none d-md-none">ธนาคารออมสิน </span> </div>
				</div>
			</div>
			<?php } ?>
			
			
			
<?php 
$sql_info_bank = "SELECT * FROM bank WHERE name_bank != 'ธนาคารไทยพาณิชย์' AND name_bank != 'ธนาคารกสิกรไทย' AND name_bank != 'ทรูวอเล็ต' AND name_bank != 'ธนาคารออมสิน' ORDER BY id DESC";
$load_info_bank = $class_admin->load_date_sql($sql_info_bank);
while($row = mysqli_fetch_array($load_info_bank)) {
?>

			<div class="col-lg-3 col-6">
				<div class="info-box bg-darkblue"> <span class="info-box-icon bg-transparent text-white"><i class="fas fa-university"></i></span>
					<div class="info-box-content">
						<h6 class="text-white d-none d-sm-block d-md-block"><?php echo $row["name_bank"]; ?></h6>
						<h4 class="text-white" >0</h4> <span class="progress-description text-white d-sm-none d-md-none"><?php echo $row["name_bank"]; ?></span> </div>
				</div>
			</div>
<?php } ?>		
		</div>	
    </div>	
</div>

<hr>

        <div class="col col-xl">
		<div class="bg-secondary rounded p-4">
			<div class="row">
				<div class="col">
					<div class="form-group has-feedback">
						<label class="control-label">จากวันที่ :</label>
						<input class="form-control" type="text" id="FromDay"> </div>
				</div>
				<div class="col-md-2">
					<div class="form-group has-feedback">
						<label class="control-label">ถึงวันที่ :</label>
						<input class="form-control" type="text" id="ToDay"> </div>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="buttonsearch" class="btn btn-sm btn-success btn-block p-2"><i class="far fa-search"></i> ค้นหา</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="buttonyesterday" class="btn btn-sm btn-primary btn-block p-2">เมื่อวาน</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="buttonthismonth" class="btn btn-sm btn-primary btn-block p-2">เดือนนี้</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="buttonlastmonth" class="btn btn-sm btn-primary btn-block p-2">เดือนที่แล้ว</button>
				</div>
			</div>
			<hr>
			<h5 class="text-black"><i class="fas fa-file-search"></i> รายงานประจำวันที่</h5>
			<h6 class="text-black"><span id="ShowFromDay" >×</span> ถึง <span id="ShowToDay" >×</span></h6>
			<hr>
			<div class="table-responsive">
				<table class="table table-hover text-nowrap text-center">
					<thead class="text-black">
						<tr>
							<th scope="col">จำนวนสมาชิกฝากเงิน</th>
							<th scope="col">ยอดฝาก</th>
							<th scope="col">ยอดถอน</th>
							<th scope="col">ยอดถอนแนะนำเพื่อน</th>
							<th scope="col">จำนวนบิลฝาก</th>
							<th scope="col">แลกพ้อยด์</th>
							<th scope="col">รับยอดเสีย</th>
							<th scope="col">ยอดโบนัส</th>
							<th scope="col">ได้ราย</th>
						</tr>
					</thead>
					<tbody id="showdateget">
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
        


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
			<div class="col">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Auto Gambling System Manager</a> All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://betiingsoft.com">BetingSoft</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


	
</body>
<!-- add custom script -->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script type="text/javascript">
$(document).ready(function(){
var todayshow = '';	
  $.ajax({
      type: "POST",
	  data: {
          todayshow:todayshow
      },
      url: "/api/admin/loadstatusall",
      success: function(data) {
          var obj = JSON.parse(data);
		  $('#allmembers').html(obj.allmembers);
		  $('#stockmembers').html(obj.stockmembers);
		  $('#SUM_Amount_DP_ToDay').html(obj.SUM_Amount_DP_ToDay);
		  $('#SUM_Amount_WD_ToDay').html(obj.SUM_Amount_WD_ToDay);
		  $('#TotalAmount').html(obj.TotalAmount);
		  $('#bill_DP').html(obj.bill_DP);
		  $('#bill_WD').html(obj.bill_WD);
		  $('#amount_cashback').html(obj.amount_cashback);
		  $('#amount_aff').html(obj.amount_aff);
		  $('#change_point').html(obj.change_point);
		  $('#members_deposit_today').html(obj.members_deposit_today);
		  $('#credit_ufa').html(obj.credit_ufa);
		  $('#credit_scb').html(obj.credit_scb);
		  $('#credit_true').html(obj.credit_true);
		  $('#credit_kbank').html(obj.credit_kbank);
		  $('#credit_sms').html(obj.credit_sms);
		  $('#bonustoday').html(obj.bonustoday);
		  
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
<script type="text/javascript">
function showdatelist(GetDate) {
	$('#showdateget').html('');
	html = "";
	html += '<tr>';
	html += '<th scope="col">' + GetDate.members_deposit_today + '</th>';
	html += '<th scope="col">' + GetDate.SUM_Amount_DP_ToDay + '</th>';
	html += '<th scope="col">' + GetDate.SUM_Amount_WD_ToDay + '</th>';
	html += '<th scope="col">' + GetDate.amount_aff + '</th>';
	html += '<th scope="col">' + GetDate.bill_DP + '</th>';
	html += '<th scope="col">' + GetDate.change_point + '</th>';
	html += '<th scope="col">' + GetDate.amount_cashback + '</th>';
	html += '<th scope="col">' + GetDate.bonustoday + '</th>';
	html += '<th scope="col">' + GetDate.TotalAmount + '</th>';
	html += '</tr>';
	$('#showdateget').html(html);
	$('#ShowFromDay').html(GetDate.fromTime);
	$('#ShowToDay').html(GetDate.toTime);
}
</script>

<script type="text/javascript">
$("#buttonsearch").click(function(){
var FromDay = $("#FromDay").val();
var ToDay = $("#ToDay").val();
var search = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadstatusall",
      data: {
		  search:search,
          FromDay:FromDay,
          ToDay:ToDay,
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
      url: "/api/admin/loadstatusall",
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
      url: "/api/admin/loadstatusall",
      data: {
          thismonth:thismonth
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  showdatelist(obj);
      }
  });
});
$("#buttonlastmonth").click(function(){
var lastmonth = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadstatusall",
      data: {
          lastmonth:lastmonth
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  showdatelist(obj);
      }
  });
});
</script>

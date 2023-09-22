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
					<a href="/admin/generatecode" class="nav-item nav-link active"><i class="fad fa-gift-card me-2"></i>สร้างCODE</a>
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
			<h4 class="text-black"><i class="fas fa-barcode-alt"></i> เช็ครายการโค้ด</h4>
			<hr>
			<div class="row mb-3">
				<div class="col-md-2">
					<div class="form-group has-feedback">
						<label class="control-label-dc">รางวัล</label>
						<input class="form-control" id="reward" type="text"> </div>
				</div>
				<div class="col-md-2">
					<div class="form-group has-feedback">
						<label class="control-label-dc">เทิร์นโอเวอร์</label>
						<input class="form-control" id="turnover" type="text"> </div>
				</div>
				<div class="col-md-2 mt-2 align-self-center">
					<button type="button" id="button_success" class="btn btn-sm btn-success btn-block p-2"><i class="far fa-check"></i> สร้างโค้ด</button>
				</div>
			</div>
			<hr>
			<h4 class="text-black"><i class="fas fa-spinner fa-spin"></i> โค้ดที่ยังไม่ใช้งาน</h4>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-nowrap text-center">
					<thead class="text-black">
						<tr>
							<th scope="col">โค้ด</th>
							<th scope="col">รางวัล</th>
							<th scope="col">เทิร์นโอเวอร์</th>
							<th scope="col">วันที่สร้าง</th>
							<th scope="col">ลบ</th>
						</tr>
					</thead>
					<tbody id="showdateget">
<?php 
$sql_code_wait = "SELECT * FROM code_reward WHERE phone = '' ORDER BY id DESC";
$load_date_code_wait = $class_admin->load_date_sql($sql_code_wait);
while($row = mysqli_fetch_array($load_date_code_wait)) {
?>
								<tr>
									<td class="align-middle"><?php echo $row["code"]; ?></td>
									<td class="align-middle"><?php echo $row["reward"]; ?></td>
									<td class="align-middle"><?php echo $row["turnover"]; ?></td>
									<td class="align-middle"><?php echo $row["date_code"]; ?></td>
									<th scope="col"><button type="button" class="btn btn-default text-danger btn-sm startdelete" data-id="<?php echo $row["id"]; ?>"><i class="fas fa-trash-alt"></i></button></th>
								</tr>	
<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<div class="info-box">
		<h4 class="text-black"><i class="far fa-check"></i> โค้ดที่ใช้งานแล้ว</h4>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-nowrap text-center">
					<thead class="text-black">
						<tr>
							<th scope="col">โค้ด</th>
							<th scope="col">รางวัล</th>
							<th scope="col">เทิร์นโอเวอร์</th>
							<th scope="col">เบอร์ผู้รับ</th>
							<th scope="col">วันที่สร้าง</th>
							<th scope="col">ลบ</th>
						</tr>
					</thead>
					<tbody>
<?php 
$sql_code_success = "SELECT * FROM code_reward WHERE phone != '' ORDER BY id DESC";
$load_date_code_success = $class_admin->load_date_sql($sql_code_success);
while($row = mysqli_fetch_array($load_date_code_success)) {
?>
								<tr>
									<td class="align-middle"><?php echo $row["code"]; ?></td>
									<td class="align-middle"><?php echo $row["reward"]; ?></td>
									<td class="align-middle"><?php echo $row["turnover"]; ?></td>
									<td class="align-middle"><?php echo $row["phone"]; ?></td>
									<td class="align-middle"><?php echo $row["date_code"]; ?></td>
									<th scope="col"><button type="button" class="btn btn-default text-danger btn-sm startdelete" data-id="<?php echo $row["id"]; ?>"><i class="fas fa-trash-alt"></i></button></th>
								</tr>	
<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
var function_delete_id = document.getElementsByClassName("startdelete");
if (function_delete_id) {
    Array.from(function_delete_id).forEach(function(element) {
        element.addEventListener('click', Call_delete_id);
    });
}
function Call_delete_id() {
	    var id = $(this).data('id');
		Swal.fire({
			title: 'คำเตือน',
			text: "คุณต้องการ ลบ ใช่ไหม",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#00C851',
			cancelButtonColor: '#d33',
			confirmButtonText: 'ใช่'
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					type:"POST",
					data: {
					   'FROM_NAME' : 'code_reward',
					   'WHERE_NAME' : 'id',
					   'WHERE_VALUE' : id,
					},
					url:"/api/admin/run_delete_sql",
					success:function(data){
						Swal.fire({
							icon: 'success',
							title: 'ลบรายการ สำเร็จ',
							showConfirmButton: false,
							timer: 2000,
							timerProgressBar: true,
						}).then((result) => {
							window.location.href='./generatecode';
						})

					}

				})

			}

		})
}
</script>
<script type="text/javascript">
$("#button_success").click(function(){
	
var input_reward = $("#reward").val();
var input_turnover = $("#turnover").val();
if (input_reward == '') {
	
$('#reward').closest('.form-group').addClass('has-error');
$('#turnover').closest('.form-group').removeClass('has-error');

} else if (input_turnover == '') {

$('#turnover').closest('.form-group').addClass('has-error');
$('#reward').closest('.form-group').removeClass('has-error');

}else{

$('#reward').closest('.form-group').removeClass('has-error');
$('#turnover').closest('.form-group').removeClass('has-error');

$.ajax({
      type: "POST",
      url: "/api/admin/BuildCodeReward",
      data: {
          reward:input_reward,
          turnover:input_turnover,
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  if (obj.status=="success"){
			 Swal.fire({
				icon: 'success',
				title: 'สำเร็จ',
				text: obj.info,
				allowOutsideClick: false,
				confirmButtonColor: '#00C851',
			}).then((result) => {
				window.location.href='./generatecode';
			})
		  }else{
			  Swal.fire({
				icon: 'error',
				title: 'ผิดพลาด',
				text: obj.info,
				allowOutsideClick: false,
				confirmButtonColor: '#00C851',
			})
		  }
      }
});	
	
}
  
});
</script>

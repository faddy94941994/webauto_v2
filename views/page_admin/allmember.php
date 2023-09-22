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
                    <a href="/admin" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>แดชบอร์ด</a>
					<a href="/admin/allmember" class="nav-item nav-link active"><i class="fas fa-users me-2"></i>สมาชิกทั้งหมด</a>
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
			<h4 class="text-black"><i class="fas fa-users"></i> สมาชิกทั้งหมด</h4>
			<hr>
			<div class="row mb-3">
				<div class="col-md-3">
					<div class="form-group has-feedback">
						<label class="control-label">กรอกเบอร์โทรศัพท์ หรือ ยูสเซอร์เนม หรือ ชื่อสมาชิก</label>
						<input class="form" id="input_search" type="text"> </div>
				</div>
				<div class="col-md-1 mt-3 align-self-center">
					<button type="button" id="button_input_search" class="btn btn-sm btn-success btn-block p-2"><i class="far fa-search"></i> ค้นหา</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="show100" class="btn btn-sm btn-primary btn-block p-2">ค้นหา 100 รายการล่าสุด</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="show500" class="btn btn-sm btn-primary btn-block p-2">ค้นหา 500 รายการล่าสุด</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="show1000" class="btn btn-sm btn-primary btn-block p-2">ค้นหา 1,000 รายการล่าสุด</button>
				</div>
				<div class="col-md-2 mt-3 align-self-center">
					<button type="button" id="showAll" class="btn btn-sm btn-primary btn-block p-2">ค้นหาทุกรายการทั้งหมด</button>
				</div>

			</div>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-nowrap text-center">
					<thead class="text-black">
						<tr>
							<th scope="col">สถานะ</th>
							<th scope="col">ยูสเซอร์เนม</th>
							<th scope="col">เบอร์โทรศัพท์</th>
							<th scope="col">ไอดีทรูวอเล็ต</th>
							<th scope="col">ชื่อ-นามสกุล</th>
							<th scope="col">วันลงทะเบียน</th>
							<th scope="col">เครดิต</th>
							<th scope="col">เพิ่มโดย</th>
							<th scope="col">แก้ไขโดย</th>
							<th scope="col">เติมเครดิต</th>
							<th scope="col">ตัดเครดิต</th>
							<th scope="col">ฝาก</th>
							<th scope="col">ถอน</th>
							<th scope="col">แก้ไข</th>
							<th scope="col">ลบ</th>
						</tr>
					</thead>
					<tbody id="showdateget">
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
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
					   'FROM_NAME' : 'member',
					   'WHERE_NAME' : 'id_mb',
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
							window.location.href='./allmember';
						})

					}

				})

			}

		})
}
</script>
<script type="text/javascript">
function showdatelist(GetDate) {
//console.log(GetDate);
sessionStorage.setItem("Date_Page_Member", JSON.stringify(GetDate));

	$('#showdateget').html('');
	html = "";
	$.each(GetDate.result, function( index, value ) {
		var confirm_mb;
		if (value.confirm_mb == "") {
			 confirm_mb = '<a href="/admin/userupdateform?id=' + value.id_mb + '" class="btn btn-info btn-sm"><i class="fas fa-spinner fa-spin"></i> รอยืนยัน</a>';
		}
		if (value.confirm_mb == "1") {
			confirm_mb = '<span class="btn btn-success btn-sm noHover"><i class="fas fa-check"></i> เรียบร้อย</span>';
		}
		
		html += '<tr>';
		html += '<th scope="col">' + confirm_mb + '</th>';
		html += '<th scope="col">' + value.agent + value.username_mb + '</th>';
		html += '<th scope="col">' + value.phone_mb + '</th>';
		html += '<th scope="col">' + value.phone_true + '</th>';
		html += '<th scope="col">' + value.name_mb + '</th>';
		html += '<th scope="col">' + value.date_mb + '</th>';
		html += '<th scope="col">' + value.Balance + '</th>';
		html += '<th scope="col">' + value.add_mb + '</th>';
		html += '<th scope="col">' + value.edit_mb + '</th>';
		html += '<th scope="col"><a href="/admin/addcredit?id=' + value.id_mb + '" class="btn btn-success btn-sm">เติมเครดิต</a></th>';
		html += '<th scope="col"><a href="/admin/deletecredit?id=' + value.id_mb + '" class="btn btn-danger btn-sm">ตัดเครดิต</a></th>';
		html += '<th scope="col"><a href="/admin/depositformuser?id=' + value.id_mb + '" class="btn btn-warning btn-sm">ฝาก</a></th>';
		html += '<th scope="col"><a href="/admin/withdrawformuser?id=' + value.id_mb + '" class="btn btn-dark btn-sm">ถอน</a></th>';
		//html += '<th scope="col"><span class="btn btn-warning btn-sm noHover">ฝาก</span></th>';
		//html += '<th scope="col"><span class="btn btn-dark btn-sm noHover">ถอน</span></th>';
		html += '<th scope="col"><a href="/admin/userupdateform?id=' + value.id_mb + '" class="btn btn-info btn-sm"><i class="fas fa-user-edit"></i></a></th>';
		html += '<th scope="col"><button type="button" class="btn btn-default text-danger btn-sm startdelete" data-id="' + value.id_mb + '"><i class="fas fa-trash-alt"></i></button></th>';
		html += '</tr>';
	});
	$('#showdateget').html(html);
	
var function_delete_id = document.getElementsByClassName("startdelete");
if (function_delete_id) {
    Array.from(function_delete_id).forEach(function(element) {
        element.addEventListener('click', Call_delete_id);
    });
   }
}
</script>
<script type="text/javascript">
$(function(){
if (sessionStorage.getItem('Date_Page_Member')) {
	var obj = JSON.parse(sessionStorage.getItem('Date_Page_Member'));
	showdatelist(obj);
}
});

</script>
<script type="text/javascript">
$("#button_input_search").click(function(){
	
var input_search = $("#input_search").val();
var search = '';
if (input_search == '') {
	
$('#input_search').closest('.form-group').addClass('has-error');

}else{
$('#input_search').closest('.form-group').removeClass('has-error');
$.ajax({
      type: "POST",
      url: "/api/admin/loadallmember",
      data: {
          search:search,
          input_search:input_search,
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  if (obj.result !== null) {
			 showdatelist(obj); 
		  }else{
			 $('#showdateget').html('');
		  }
      }
  });
  
}
  
});


$("#show100").click(function(){
$('#showdateget').html('<tr><td colspan="100"><div class="alert alert-secondary" role="alert"><i class="fas fa-spinner fa-spin"></i> กำลังโหลดข้อมูล...</div></td></tr>');
var show100 = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadallmember",
      data: {
          show100:show100
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  if (obj.result !== null) {
			 showdatelist(obj); 
		  }else{
			 $('#showdateget').html('');
		  } 
      }
  });
});
$("#show500").click(function(){
$('#showdateget').html('<tr><td colspan="100"><div class="alert alert-secondary" role="alert"><i class="fas fa-spinner fa-spin"></i> กำลังโหลดข้อมูล...</div></td></tr>');
var show500 = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadallmember",
      data: {
          show500:show500
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  if (obj.result !== null) {
			 showdatelist(obj); 
		  }else{
			 $('#showdateget').html('');
		  } 
      }
  });
});
$("#show1000").click(function(){
$('#showdateget').html('<tr><td colspan="100"><div class="alert alert-secondary" role="alert"><i class="fas fa-spinner fa-spin"></i> กำลังโหลดข้อมูล...</div></td></tr>');	
var show1000 = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadallmember",
      data: {
          show1000:show1000
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  if (obj.result !== null) {
			 showdatelist(obj); 
		  }else{
			 $('#showdateget').html('');
		  } 
      }
  });
});
$("#showAll").click(function(){
$('#showdateget').html('<tr><td colspan="100"><div class="alert alert-secondary" role="alert"><i class="fas fa-spinner fa-spin"></i> กำลังโหลดข้อมูล...</div></td></tr>');	
var showAll = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadallmember",
      data: {
          showAll:showAll
      },
      success: function(data) {
          var obj = JSON.parse(data);
		  if (obj.result !== null) {
			 showdatelist(obj); 
		  }else{
			 $('#showdateget').html('');
		  } 
      }
  });
});
</script>

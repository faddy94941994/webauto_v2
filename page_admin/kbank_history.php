<script type="text/javascript">
$(document).ready(function(){
  $("#input_search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#showdateget tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
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
					<a href="/admin/generatecode" class="nav-item nav-link"><i class="fad fa-gift-card me-2"></i>สร้างCODE</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fas fa-landmark me-2"></i>รายการธนาคาร</a>
                        <div class="dropdown-menu bg-transparent border-0">
					<a href="/admin/kbank_history" class="dropdown-item active"><i class="fas fa-landmark me-2"></i>รายการ KBANK</a>
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
			<h4 class="text-black"><i class="fas fa-history"></i> ประวัติรายการ KBANK</h4>
			<hr>
			<div class="row mb-3">
				<div class="col-md-2 mt-2 align-self-center">
					<div class="form-group">
						<label class="control-label-dc">ค้นหา</label>
						<input class="form-control" id="input_search" type="text">
					</div>
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
							<th scope="col">ลำดับ</th>
							<th scope="col">สถานะ</th>
							<th scope="col">จำนวนเงิน</th>
							<th scope="col">เลขบัญชี</th>
							<th scope="col">ธนาคาร</th>
							<th scope="col">ชื่อ-นามสกุล</th>
							<th scope="col">เวลาที่ลงบันทึก</th>
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
function showdatelist(GetDate) {
	console.log(GetDate.result);
	$('#showdateget').html('');
	html = "";
	$.each(GetDate.result, function( index, value ) {
		var str_type, str_fromacc, str_frombank, str_fromname;
		if(value.type == 'รับโอนเงิน'){
			str_type = '<span class="btn btn-sm btn-success m-2">รับโอนเงิน</span>';
		} else if (value.type == 'โอนเงิน') {
			str_type = '<span class="btn btn-sm btn-primary m-2">โอนเงิน</span>';
		} else{
			str_type = '<span class="btn btn-sm btn-danger m-2>อื่นๆ</span>';
		}
		
		if(value.fromacc !== ''){
			str_fromacc = value.fromacc;
		} else if (value.toacc !== '') {
			str_fromacc = value.toacc;
		} else if (value.toacc == '') {
			
			if(value.fromacc == ''){
				str_fromacc = '<span class="btn btn-sm btn-danger m-2">ไม่ทราบ</span>';
			}
			
		}
		
		if(value.frombank !== ''){
			str_frombank = value.frombank;
		} else if (value.tobank !== '') {
			str_frombank = value.tobank;
		} else if (value.frombank == '') {
			
			if(value.tobank == ''){
				str_frombank = '<span class="btn btn-sm btn-danger m-2">ไม่ทราบ</span>';
			}
			
		}
		
		if(value.fromname !== ''){
			str_fromname = value.fromname;
		} else if (value.toname !== '') {
			str_fromname = value.toname;
		} else if (value.fromname == '') {
			str_fromname = '<span class="btn btn-sm btn-danger px-3 noHover">ไม่ทราบ</span>';
		}
		
		html += '<tr>';
		html += '<th scope="col">' + value.id + '</th>';
		html += '<th scope="col">' + str_type + '</th>';
		html += '<th scope="col">' + value.amount + '</th>';
		html += '<th scope="col">' + str_fromacc + '</th>';
		html += '<th scope="col">' + str_frombank + '</th>';
		html += '<th scope="col">' + str_fromname + '</th>';
		html += '<th scope="col">' + value.date + '</th>';
		html += '</tr>';
	});
	$('#showdateget').html(html);
	$('#ShowFromDay').html(GetDate.ShowFromDay);
	$('#ShowToDay').html(GetDate.ShowToDay);
}
</script>
<script type="text/javascript">
$("#show100").ready(function(){
var show100 = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadkbankhistory",
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
var show500 = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadkbankhistory",
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
var show1000 = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadkbankhistory",
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
var showAll = '';
$.ajax({
      type: "POST",
      url: "/api/admin/loadkbankhistory",
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

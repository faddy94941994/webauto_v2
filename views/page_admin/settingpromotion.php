<?php
if ($_SESSION["status_ad"] != "") {
	if($_SESSION["status_ad"] == "Admin"){
	echo "<script>window.location = './'</script>";
	exit;
	}
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
			  <div class="mr-auto"><h4 class="text-black"><i class="fas fa-cogs"></i> ตั้งค่า - โปรโมชั่น</h4></div>
			  <div class="col-lg-2 col-5"><button type="button" class="btn btn-sm btn-success btn-block p-2" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus-circle"></i> เพิ่มโปรโมชั่น</button></div>
			</div>
			<hr>
			<div class="row">
<?php 
$sql_promotion = "SELECT * FROM promotion ORDER BY id desc";
$load_date_promotion = $class_admin->load_date_sql($sql_promotion);
while($row = mysqli_fetch_array($load_date_promotion)) {

if ($row["bonus_pro"]=="0") {
	$status_bonus = $row["bonusper_pro"].' เปอร์เซ็นต์';
}
if ($row["bonus_pro"]!='0') {
	$status_bonus = $row["bonus_pro"];
}
?>
		  <div class="col-lg-3 m-b-3"> 
            <div class="card">
			<img class="card-img-top img-responsive" src="/slip/<?php echo $row["fileupload_pro"]; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row["name_pro"]; ?></h5>
				  <strong>ลักษณะโบนัส</strong>
				  <p class="text-muted"><?php echo $row["time_pro"]; ?></p>
				  <hr class="mt-0 m-b-1">
				  <strong>ยอดฝากขั้นต่ำ</strong>
				  <p class="text-muted"><?php echo $row["dp_pro"]; ?></p>
				  <hr class="mt-0 m-b-1">
				  <strong>โบนัส</strong>
				  <p class="text-muted"><?php echo $status_bonus; ?></p>
				  <hr class="mt-0 m-b-1">
				  <strong>รับโบนัสสูงสุด</strong>
				  <p class="text-muted"><?php echo $row["max_pro"]; ?></p>
				  <hr class="mt-0 m-b-1">
				  <strong>เกมส์ที่เล่นได้</strong>
				  <p class="text-muted"><?php echo $row["games_pro"]; ?></p>
				  <hr class="mt-0 m-b-1">
				  <strong>เทิร์นโอเวอร์</strong>
				  <p class="text-muted"><?php echo $row["turn_pro"]; ?></p>
				  <hr class="mt-0 m-b-1">
				  <strong>ข้อห้าม</strong>
				  <p class="text-muted"><?php echo $row["rules_pro"]; ?></p>
				  <hr class="mt-0 m-b-1">
				  <strong>ถอนได้</strong>
				  <p class="text-muted"><?php echo $row["wd_pro"]; ?></p>
				  <hr class="mt-0 m-b-1">
				  <div class="row text-center">
					<div class="col-lg-6 col-6 align-middle">
						<label class="control-label-dc">แสดงเฉพาะรูป</label>
						<div class="form-check form-switch form-switch-md">
							<input class="form-check-input" type="checkbox" value="<?php echo $row[0]; ?>" onclick='ShowpicClick(this);' <?php if ($row["showpic"] == "เปิด")  { ?> checked <?php } ?> >
						</div>
					</div>
					<div class="col-lg-6 col-6">
						<label class="control-label-dc">สถานะ</label>
						<div class="form-check form-switch form-switch-md">
							<input class="form-check-input" type="checkbox" value="<?php echo $row[0]; ?>" onclick='StatusProClick(this);' <?php if ($row["status_pro"] == "เปิด")  { ?> checked <?php } ?> >
						</div>
					</div>
				  </div>
				  <hr class="mt-0">
                <div class="row">
					<div class="col-lg-6 col-6">
						<a href="/admin/promotionupdateform?id=<?php echo $row[0]; ?>" class="btn btn-sm btn-info px-4"><i class="fas fa-edit"></i> แก้ไข</a>
					</div>
					<div class="col-lg-6 col-6">
						<button type="button" class="btn btn-sm btn-danger btn-block startdelete" data-id="<?php echo $row[0]; ?>"><i class="fas fa-trash-alt"></i> ลบ</button>
					</div>
				</div>
			  </div>
            </div>
          </div>
<?php } ?>			  
          
		  
		  
		  
		  
		  
		  
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
            <i class="fas fa-plus-circle"></i> เพิ่ม เพิ่มโปรโมชั่น </span>
          <span class="float-right text-danger" data-dismiss="modal">
            <i class="fas fa-window-close fa-2x"></i>
          </span>
        </div>
      </div>
	  
	  <form method="post" id="form_promotion" enctype="multipart/form-data">
      <div class="card-body">
        <div class="row">
		  <div class="col-lg-12">
            <div class="form-group container">
              <label class="control-label-dc">รูปโปรโมชั่น</label>
               <input type="file" class="dropify" name="fileupload_pro" required>
            </div>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">ชื่อโปรโมชั่น</label>
              <input class="form-control" type="text" name="name_pro" required>
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">ลักษณะโบนัส</label>
              <select class="custom-select form-control" name="time_pro" required>
                <option value="สมาชิกใหม่">สมาชิกใหม่</option>
			    <option value="รับได้ครั้งเดียว">รับได้ครั้งเดียว</option>
			    <option value="รับได้วันละ 1 ครั้ง">รับได้วันละ 1 ครั้ง</option>
			    <option value="รับได้ทุกครั้ง">รับได้ทุกครั้ง</option>
              </select>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">ยอดฝากขั้นต่ำ</label>
              <input class="form-control" type="text" name="dp_pro">
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">โบนัส (แบบกำหนดจำนวนเงิน)</label>
              <input class="form-control" type="text" placeholder="ถ้าไม่มีให้ใส่ 0" name="bonus_pro" required>
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">โบนัส (แบบเปอร์เซ็นต์)</label>
              <input class="form-control" type="text" name="bonusper_pro" placeholder="ถ้าไม่มีให้ใส่ 0" required>
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">รับได้สูงสุด</label>
              <input class="form-control" type="text" name="max_pro" placeholder="ใส่จำนวนโบนัสสูงสุด" required>
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">เกมส์ที่เล่นได้</label>
              <input class="form-control" type="text" name="games_pro">
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">เทิร์นโอเวอร์</label>
              <input class="form-control" type="text" name="turn_pro">
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">กติกา</label>
              <input class="form-control" type="text" name="rules_pro">
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">ถอนได้สูงสุด</label>
              <input class="form-control" type="text" name="wd_pro">
            </fieldset>
          </div>
          <div class="col-lg-6 col-6">
            <fieldset class="form-group text-center">
              <label class="control-label-dc">แสดงเฉพาะรูปเท่านั้น</label>
              <div class="form-check form-switch form-switch-md">
				<input class="form-check-input" type="checkbox" id="showpic" checked >
			  </div>
            </fieldset>
          </div>
		  <div class="col-lg-6 col-6">
            <fieldset class="form-group text-center">
              <label class="control-label-dc">สถานะ</label>
              <div class="form-check form-switch form-switch-md">
				<input class="form-check-input" type="checkbox" id="status_pro" checked>
			  </div>
            </fieldset>
          </div>
        </div>
      </div>
	  <button type="submit" id="submitclick" class="d-none" ></button>
	  </form>
	  
      <div class="card-footer">
        <button type="button" id="settingsubmit" class="btn btn-success float-right">
          <i class="fas fa-save"></i> ยืนยัน </button>
      </div>
    </div>
  </div>
</div>

<script src="/assets/admin/plugins/dropify/dropify.min.js"></script> 
<script>
$(document).ready(function(){

$('.dropify').dropify({
    messages: {
        'default': 'ลากและวางไฟล์ที่นี่หรือคลิก',
        'replace': 'ลากและวางหรือคลิกเพื่อแทนที่',
        'remove':  'ลบ',
        'error':   'อ๊ะ มีบางอย่างผิดปกติเกิดขึ้น'
    }
});

});
</script>
<script type="text/javascript">
$('#settingsubmit').click(function(e){
e.preventDefault();
$('#submitclick').click();
});
</script>
<script type="text/javascript">
$("#form_promotion").on("submit",function(e){
        e.preventDefault();
		var Showpic_checked = $('#showpic').is(":checked") ? 'เปิด':'ปิด';
		var StatusPro_checked = $('#status_pro').is(":checked") ? 'เปิด':'ปิด'; 
        var formData = new FormData($(this)[0]);
		formData.append("showpic",Showpic_checked);
		formData.append("status_pro",StatusPro_checked);
        $.ajax({
            url: '/api/admin/addpromotion',
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
						window.location.href='./settingpromotion';
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
<script type="text/javascript">
function ShowpicClick(checkbox) {
var TABLE_NAME = "promotion";
var SET_NAME = "showpic";
var WHERE_NAME = "id";
    if(checkbox.checked){
		$.ajax({
            url: '/api/admin/updatecheckbox',
            type: 'POST',
            data:{
				TABLE_NAME:TABLE_NAME,
				SET_NAME:SET_NAME,
				SET_VALUE:"เปิด",
				WHERE_NAME:WHERE_NAME,
				WHERE_VALUE:checkbox.value,
			},
			success:function(data){
				Swal.fire({
					toast: true,
					icon: 'success',
					title: 'บันทึกสำเร็จ',
					position: 'top-right',
					showConfirmButton: false,
					timer: 2000,
					timerProgressBar: true,
				})
			}
        });
    }
    else{
		$.ajax({
            url: '/api/admin/updatecheckbox',
            type: 'POST',
            data:{
				TABLE_NAME:TABLE_NAME,
				SET_NAME:SET_NAME,
				SET_VALUE:"ปิด",
				WHERE_NAME:WHERE_NAME,
				WHERE_VALUE:checkbox.value,
			},
			success:function(data){
				Swal.fire({
					toast: true,
					icon: 'success',
					title: 'บันทึกสำเร็จ',
					position: 'top-right',
					showConfirmButton: false,
					timer: 2000,
					timerProgressBar: true,
				})
			}
        });
    }
}
</script>
<script type="text/javascript">
function StatusProClick(checkbox) {
var TABLE_NAME = "promotion";
var SET_NAME = "status_pro";
var WHERE_NAME = "id";
    if(checkbox.checked){
		$.ajax({
            url: '/api/admin/updatecheckbox',
            type: 'POST',
            data:{
				TABLE_NAME:TABLE_NAME,
				SET_NAME:SET_NAME,
				SET_VALUE:"เปิด",
				WHERE_NAME:WHERE_NAME,
				WHERE_VALUE:checkbox.value,
			},
			success:function(data){
				Swal.fire({
					toast: true,
					icon: 'success',
					title: 'บันทึกสำเร็จ',
					position: 'top-right',
					showConfirmButton: false,
					timer: 2000,
					timerProgressBar: true,
				})
			}
        });
    }
    else{
		$.ajax({
            url: '/api/admin/updatecheckbox',
            type: 'POST',
            data:{
				TABLE_NAME:TABLE_NAME,
				SET_NAME:SET_NAME,
				SET_VALUE:"ปิด",
				WHERE_NAME:WHERE_NAME,
				WHERE_VALUE:checkbox.value,
			},
			success:function(data){
				Swal.fire({
					toast: true,
					icon: 'success',
					title: 'บันทึกสำเร็จ',
					position: 'top-right',
					showConfirmButton: false,
					timer: 2000,
					timerProgressBar: true,
				})
			}
        });
    }
}
</script>
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
					   'FROM_NAME' : 'promotion',
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
							window.location.href='./settingpromotion';
						})

					}

				})

			}

		})
}
</script>

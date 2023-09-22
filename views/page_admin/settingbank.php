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
			  <div class="mr-auto"><h4 class="text-black"><i class="fas fa-cogs"></i> ตั้งค่า - ธนาคาร</h4></div>
			     <?php
              if($_SESSION["status_ad"] == "SuperAdmin"){
              echo 
        '<div class="col-lg-2 col-5"><button type="button" class="btn btn-sm btn-success btn-block p-2" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus-circle"></i> เพิ่มธนาคาร</button></div>';
      }?>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-nowrap text-center">
					<thead class="text-black">
						<tr>
							<th scope="col">โลโก้ธนาคาร</th>
							<th scope="col">ธนาคาร - ทรูวอเล็ต</th>
							<th scope="col">เลขบัญชี</th>
							<th scope="col">ประเภท</th>
							<th scope="col">โอนเงิน</th>
							<th scope="col">สถานะ</th>
							 <?php
              if($_SESSION["status_ad"] == "SuperAdmin"){
              echo 
              '<th scope="col">แก้ไข</th>
              <th scope="col">ลบ</th>';
            }?>
						</tr>
					</thead>
					<tbody>
<?php 
$sql_bank = "SELECT * FROM bank WHERE name_bank!='' ORDER BY id DESC";
$load_date_bank = $class_admin->load_date_sql($sql_bank);
while($row = mysqli_fetch_array($load_date_bank)) {
if ($row["bankfor"]=="ฝาก") {
	$status = '<span class="btn btn-sm btn-info px-4 noHover">ฝาก</span>';
}
if ($row["bankfor"]=="ถอน") {
	$status = '<span class="btn btn-sm btn-warning px-4 noHover">ถอน</span>';
}	
if ($row["bankfor"]=="ฝากและถอน") {
	$status = '<span class="btn btn-sm btn-success px-4 noHover">ฝากและถอน</span>';
}

$status_transfer = '<span class="btn btn-sm btn-danger px-4 noHover"><i class="fas fa-times"></i> โอนไม่ได้</span>';
if ($row["name_bank"]=="ธนาคารไทยพาณิชย์") {
	$status_transfer = '<button type="button" class="btn btn-sm btn-success px-4" data-toggle="modal" data-target="#scb_modal"> โอนเงิน</button>';
}
if ($row["name_bank"]=="ธนาคารกสิกรไทย") {
	$status_transfer = '<button type="button" class="btn btn-sm btn-success px-4" data-toggle="modal" data-target="#kplus_modal"> โอนเงิน</button>';
}	
			
?>
								<tr>
									<td class="align-middle"><img src="/assets/img/bank_logo/<?php echo $row["name_bank"]; ?>.png" class="img-circle img-w-30px" alt="scb" style width="50px"></td>
									<td class="align-middle"><?php echo $row["name_bank"]; ?></td>
									<td class="align-middle"><?php echo $row["bankacc_bank"]; ?></td>
									<td class="align-middle"><?php echo $status; ?></td>
									<td class="align-middle"><?php echo $status_transfer; ?></td>
									<td class="align-middle">
										<div class="form-check form-switch form-switch-md">
											<input class="form-check-input" value="<?php echo $row[0]; ?>" onclick='handleClick(this);' type="checkbox" <?php if ($row["status_bank"] == "เปิด")  { ?> checked <?php } ?>>
										</div>
									</td>
						    <?php
              if($_SESSION["status_ad"] == "SuperAdmin"){
              ?>
              <td class="align-middle"><a href="/admin/bankupdateform?id=<?php echo $row[0]; ?>" class="btn btn-sm btn-info px-4"><i class="fas fa-edit"></i> แก้ไข</a></td>
                  <td class="align-middle"><button type="button" class="btn btn-sm btn-danger px-4 startdelete" data-id="<?php echo $row[0]; ?>"><i class="fas fa-trash-alt"></i> ลบ</button></td>
             <?php } ?> 
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
            <i class="fas fa-plus-circle"></i> เพิ่มธนาคาร - ทรูวอเล็ต </span>
          <span class="float-right text-danger" data-dismiss="modal">
            <i class="fas fa-window-close fa-2x"></i>
          </span>
        </div>
      </div>
	  
	  <form method="post" id="form_addbank" enctype="multipart/form-data">
      <div class="card-body">
        <div class="row">
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc ">ธนาคาร / ทรูวอเล็ต</label>
              <select class="custom-select form-control bg-dark" name="name_bank" required>
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
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">เลขบัญชี</label>
              <input class="form-control" type="text" name="bankacc_bank" required>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">ชื่อบัญชี</label>
              <input class="form-control" type="text" name="nameacc_bank" required>
            </fieldset>
          </div>
          <div class="col-lg-9 col-9">
            <fieldset class="form-group">
              <label class="control-label-dc">ประเภท</label>
              <select class="custom-select form-control bg-dark" name="bankfor" required>
                <option selected="selected ">เลือก ประเภท</option>
                <option value="ฝาก">ฝาก</option>
				<option value="ถอน">ถอน</option>
				<option value="ฝากและถอน">ฝากและถอน</option>
              </select>
            </fieldset>
          </div>
		  <div class="col-lg-3 col-3">
            <fieldset class="form-group text-center">
              <label class="control-label-dc">สถานะ</label>
              <div class="form-check form-switch form-switch-md">
				<input class="form-check-input" type="checkbox" name="status_bank" id="status_bank" checked>
			  </div>
            </fieldset>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success float-right">
          <i class="fas fa-save"></i> ยืนยัน </button>
      </div>
	  </form>
	  
    </div>
  </div>
</div>


<div class="modal" id="scb_modal" role="dialog">
  <div class="modal">
    <div class="card">
      <div class="card-header">
        <div class="clearfix">
          <span class="float-left h4">
            <i class="fas fa-envelope-open-dollar"></i> โอนเงิน</span>
          <span class="float-right text-danger" data-dismiss="modal">
            <i class="fas fa-window-close fa-2x"></i>
          </span>
        </div>
      </div>
	  
	  <form method="post" id="scb_transfer" enctype="multipart/form-data">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">ยอดเงิน</label>
			  <input class="form-control" type="text" name="amount" required>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">เลขบัญชี</label>
              <input class="form-control" type="text" name="accountTo" required>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset class="form-group bg-dark">
              <label class="control-label-dc bg-dark">ประเภท</label>
              <select class="custom-select bg-dark" name="accountToBankCode" required>
                <option selected="selected bg-dark">เลือก</option>
                <option value="ธ.กสิกรไทย">ธ.กสิกรไทย</option>
                <option value="ธ.กรุงไทย">ธ.กรุงไทย</option>
                <option value="ธ.กรุงศรีอยุธยา">ธ.กรุงศรีอยุธยา</option>
                <option value="ธ.กรุงเทพ">ธ.กรุงเทพ</option>
                <option value="ธ.ไทยพาณิชย์">ธ.ไทยพาณิชย์</option>
                <option value="ธ.ทหารไทยธนชาติ">ธ.ทหารไทยธนชาติ</option>
                <option value="ธ.ออมสิน">ธ.ออมสิน</option>
                <option value="ธ.ก.ส.">ธ.ก.ส.</option>
                <option value="ธ.ซีไอเอ็มบีไทย">ธ.ซีไอเอ็มบีไทย</option>
                <option value="ธ.เกียรตินาคินภัทร">ธ.เกียรตินาคินภัทร</option>
                <option value="ธ.ทิสโก้">ธ.ทิสโก้</option>
                <option value="ธ.ยูโอบี">ธ.ยูโอบี</option>
                <option value="ธ.อิสลาม">ธ.อิสลาม</option>
                <option value="ธ.ไอซีบีซี">ธ.ไอซีบีซี</option>
              </select>
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">รหัสถอนเงิน</label>
              <input class="form-control" type="password" name="key_input" required>
            </fieldset>
          </div>


        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success float-right">
          <i class="fas fa-save"></i> ยืนยัน </button>
      </div>
	  </form>
	  
    </div>
  </div>
</div>


<div class="modal" id="kplus_modal" role="dialog">
<div class="modal-md">
    <div class="card">
    <div class="card">
      <div class="card-header">
        <div class="clearfix">
          <span class="float-left h4">
            <i class="fas fa-envelope-open-dollar"></i> โอนเงิน</span>
          <span class="float-right text-danger" data-dismiss="modal">
            <i class="fas fa-window-close fa-2x"></i>
          </span>
        </div>
      </div>
	  
	  <form method="post" id="kplus_transfer" enctype="multipart/form-data">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">ยอดเงิน</label>
			  <input class="form-control" type="text" name="amount" required>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">เลขบัญชี</label>
              <input class="form-control" type="text" name="accountTo" required>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">ประเภท</label>
              <select class="custom-select form-control" name="accountToBankCode" required>
                <option selected="selected">เลือก</option>
                <option value="ธ.กสิกรไทย">ธ.กสิกรไทย</option>
                <option value="ธ.กรุงไทย">ธ.กรุงไทย</option>
                <option value="ธ.กรุงศรีอยุธยา">ธ.กรุงศรีอยุธยา</option>
                <option value="ธ.กรุงเทพ">ธ.กรุงเทพ</option>
                <option value="ธ.ไทยพาณิชย์">ธ.ไทยพาณิชย์</option>
                <option value="ธ.ทหารไทยธนชาติ">ธ.ทหารไทยธนชาติ</option>
                <option value="ธ.ออมสิน">ธ.ออมสิน</option>
                <option value="ธ.ก.ส.">ธ.ก.ส.</option>
                <option value="ธ.ซีไอเอ็มบีไทย">ธ.ซีไอเอ็มบีไทย</option>
                <option value="ธ.เกียรตินาคินภัทร">ธ.เกียรตินาคินภัทร</option>
                <option value="ธ.ทิสโก้">ธ.ทิสโก้</option>
                <option value="ธ.ยูโอบี">ธ.ยูโอบี</option>
                <option value="ธ.อิสลาม">ธ.อิสลาม</option>
                <option value="ธ.ไอซีบีซี">ธ.ไอซีบีซี</option>
              </select>
            </fieldset>
          </div>
		  <div class="col-lg-12">
            <fieldset class="form-group">
              <label class="control-label-dc">รหัสถอนเงิน</label>
              <input class="form-control" type="password" name="key_input" required>
            </fieldset>
          </div>


        </div>
      </div>
      <div class="card-footer">
        <button type="submit" id="submit_kplus_transfer" class="btn btn-success float-right">
          <i class="fas fa-save"></i> ยืนยัน </button>
      </div>
	  </form>
	  
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
function handleClick(checkbox) {
var TABLE_NAME = "bank";
var SET_NAME = "status_bank";
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
$("#form_addbank").on("submit",function(e){
        e.preventDefault();
		var checked = $('#status_bank').is(":checked") ? 'เปิด':'ปิด'; 
        var formData = new FormData($(this)[0]);
		formData.append("status_bank",checked);
		console.log(formData);
        $.ajax({
            url: '/api/admin/bank',
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
						window.location.href='./settingbank';
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
					   'FROM_NAME' : 'bank',
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
							window.location.href='./settingbank';
						})

					}

				})

			}

		})
}
</script>
<script type="text/javascript">
$("#scb_transfer").on("submit",function(e){
e.preventDefault();
Swal.fire({
	icon: 'error',
	title: 'กำลังแก้ไข',
	showConfirmButton: false,
	timer: 2000,
	timerProgressBar: true,
})
});
</script>

<script type="text/javascript">
$("#kplus_transfer").on("submit",function(e){
e.preventDefault();
$('#submit_kplus_transfer').addClass("disabled");
        var formData = new FormData($(this)[0]);
		formData.append("amountnew",formData.get('amount'));
        $.ajax({
            url: '/api/admin/TransferKBank',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
			success:function(data){
				$('#submit_kplus_transfer').removeClass("disabled");
				var obj = JSON.parse(data);
				if (obj.status=="success"){
					var NameAccount = obj.Name_Account;
					var InternalSessionId = obj.InternalSessionId;
					var sMessage = obj.sMessage;
					var amount = obj.amount;
					Swal.fire({
						title: 'คุณต้องการโอนให้',
						html: NameAccount + "<br />จำนวนเงิน " + amount + " บาท ใช่ไหม",
						icon: 'warning',
						showCancelButton: true,
						confirmButtonColor: '#00C851',
						cancelButtonColor: '#d33',
						confirmButtonText: 'ใช่'
					}).then((result) => {
						if (result.isConfirmed) {
							
							$.ajax({
								url: '/api/admin/TransferConfrimKBank',
								type: 'POST',
								data: {
								   'InternalSessionId' : InternalSessionId,
								   'sMessage' : sMessage,
								},
								success:function(data){
									var objMessage = JSON.parse(data);
									if (objMessage.status=="success"){
										Swal.fire({
											icon: 'success',
											title: objMessage.info,
											showConfirmButton: false,
											timer: 2000,
											timerProgressBar: true,
										}).then((result) => {
											window.location.href='./settingbank';
										})
									}else{
										Swal.fire({
											icon: 'error',
											title: objMessage.info,
											showConfirmButton: false,
											timer: 2000,
											timerProgressBar: true,
										})
									}
								}
							});	
							
						}
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
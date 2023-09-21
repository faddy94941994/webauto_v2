
	
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>
	

    <!-- Customized jquery file  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/color-scheme.js"></script>

    <!-- Progress circle js script -->
    <script src="assets/vendor/progressbar-js/progressbar.min.js"></script>

    <!-- swiper js script -->
    <script src="assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- page level custom script -->
    <script src="assets/js/app.js"></script>
	
	
	
<?php
$files = glob('assets/img/popup/*');
foreach($files as $file){
	if(is_file($file)) {
	  $load_img_popup = $file;
	}
}
?>
<div class="modal bounceInDown animated show" id="modal-home-topup">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h4 class="modal-title text-success">
          <b>  ประกาศ !!!
        </h4>
        <hr>
        <img src="<?php echo $load_img_popup; ?>" class="img-fluid">
        <hr>
        <div class="d-grid">
          <button type="button" class="btn btn-danger mb-2" data-bs-dismiss="modal" aria-label="Close"> ปิดหน้าต่าง </button>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	if (!$.cookie('topup')) {
		$('#modal-home-topup').modal('show');
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (60 * 5000));
		$.cookie("topup", true, { expires: datealert }); 
	}
});
</script>
	
<?php
if(isset($_SESSION['id_mb'])){
?>


<script type="text/javascript">
$(document).ready(function(){

//แสดงยอกเงินเข้า
function Check_Deposit(value){
	if (value > sessionStorage.getItem("CountDeposit")) {
		sessionStorage.setItem("CountDeposit", value);
		Swal.fire({
			icon: 'success',
			title: 'รายการฝากสำเร็จ',
			showConfirmButton: true,
		})
	}else{
		sessionStorage.setItem("CountDeposit", value);
	}
}	
	
function LoadBalance(){
	
	if (!$.cookie('LoadBalance')) {
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (32 * 1000));
		$.cookie("LoadBalance", true, { expires: datealert }); 
		
		$.ajax({
        type: "POST",
        url: "api/v2/refresh_balance",
        data: {},
        success: function(data) {
            var obj = JSON.parse(data);
			$('#id_Balance_1').text(obj.Balance);
			$('#id_Balance_2').text(obj.Balance);
			$('#id_Balance_3').text(obj.Balance);
			
			$('#id_Deposit_All').text(obj.Deposit_All);
			$('#id_Withdraw_All').text(obj.Withdraw_All);
			
			if (sessionStorage.getItem('CountDeposit')) {
				Check_Deposit(obj.CountDeposit);
			}else{
				sessionStorage.setItem("CountDeposit", obj.CountDeposit);
			}
			
        }
    });	
	}
	
}
	
LoadBalance();
setInterval(LoadBalance, 1000);
	
});
</script>


<script type="text/javascript">
function Swiper_Run() {
	var swiper2 = new Swiper(".connectionwiper", {
        slidesPerView: "auto",
        spaceBetween: 0,
        pagination: false
    });
}
</script>


<script type="text/javascript">
var CopyTo_Clipboard = document.getElementsByClassName("copy-to-clipboard");
if (CopyTo_Clipboard) {
    Array.from(CopyTo_Clipboard).forEach(function(element) {
        element.addEventListener('click', AddToClipboard);
    });
   }
function AddToClipboard() {
   var copyText = $(this).data('copy');
   var elem = document.createElement('textarea');
   elem.value = copyText;
   document.body.appendChild(elem);
   elem.select();
   document.execCommand('copy');
   document.body.removeChild(elem);
   Swal.fire({
		toast: true,
		icon: 'success',
		title: 'คัดลอกแล้ว',
		position: 'top',
		showConfirmButton: false,
		timer: 2000,
		timerProgressBar: true,
	})
}
</script>
<script type="text/javascript">
$(".check-out").click(function(){
		Swal.fire({
			title: 'คำเตือน',
			text: "คุณต้องการออกจากระบบใช่ไหม",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#00C851',
			cancelButtonColor: '#d33',
			confirmButtonText: 'ใช่'
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					type:"POST",
					url:"api/v2/logout",
					success:function(data){
						localStorage.clear();
						sessionStorage.clear();
						Swal.fire({
							icon: 'success',
							title: 'ออกจากระบบสำเร็จ',
							showConfirmButton: false,
							timer: 1000,
							timerProgressBar: true,
						}).then((result) => {
							window.location.href='./';
						})

					}

				})

			}

		})

	});
</script>
	
<?php } ?>

</body>
</html>
<?php
if(isset($_SESSION['id_ad'])){
?>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 
<script src="/assets/admin/js/jquery.min.js"></script> 
--> 
<!-- v4.0.0-alpha.6 --> 
<script src="/assets/admin/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="/assets/admin/js/niche.js"></script> 

<!-- template  
<script src="/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="/assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script> 
-->

    <!-- JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/asset3/lib/chart/chart.min.js"></script>
    <script src="/asset3/lib/easing/easing.min.js"></script>
    <script src="/asset3/lib/waypoints/waypoints.min.js"></script>
    <script src="/asset3/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/asset3/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/asset3/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/asset3/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/asset3/js/main.js"></script>
</body>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 

<audio id="myAudio">
  <source src="/assets/media/alert.mp3" type="audio/mpeg">
</audio>
<button class="d-none" id="playAudio" onclick="playAudio()" type="button"></button>

<script>
var x = document.getElementById("myAudio"); 
function playAudio() { 
  x.play(); 
} 
function pauseAudio() { 
  x.pause(); 
}
</script>

<script type="text/javascript">
$(document).ready(function () {
$('.treeview a[href="' + location.pathname + '"]').parent().addClass("active").closest('.treeview').addClass('active');
});
</script>


<script type="text/javascript">

$(function(){
	check_time_delay();
	setInterval(check_time_delay, 1000);
});


function set_time_delay_seconds(){

var dd = new Date();
dd.setSeconds(dd.getSeconds() + 04);
var hh = addZero(dd.getHours());
var mm = addZero(dd.getMinutes());
var ss = addZero(dd.getSeconds());
var time = hh + '' + mm + '' + ss;
sessionStorage.setItem("time_delay_notif", time);
}

function check_time_delay(){

var dd = new Date();
dd.setSeconds(dd.getSeconds());
var hh = addZero(dd.getHours());
var mm = addZero(dd.getMinutes());
var ss = addZero(dd.getSeconds());
var time = hh + '' + mm + '' + ss;


if(sessionStorage.getItem("time_delay_notif")) {
	
	if (time > sessionStorage.getItem("time_delay_notif")) {
	
		set_time_delay_seconds();
		Ajax_Notification();
	
	}
	   
}else{
	
	   set_time_delay_seconds();
	   
}


}

function addZero(i) {
  if (i < 10) {i = "0" + i}
  return i;
}


</script>


<script type="text/javascript">
Show_Notification();
function Check_Member(value){
	if (value > sessionStorage.getItem("count_member")) {
		Swal.fire({
			toast: true,
			icon: 'warning',
			title: 'มี สมาชิกใหม่ ใหม่',
			position: 'top',
			showConfirmButton: false,
			timer: 8000,
			timerProgressBar: true,
		})
		$('#playAudio').click();
		sessionStorage.setItem("count_member", value);
	}else{
		sessionStorage.setItem("count_member", value);
	}
}
function Check_Deposit(value){
	if (value > sessionStorage.getItem("count_deposit")) {
		Swal.fire({
			toast: true,
			icon: 'warning',
			title: 'มี รายการฝาก ใหม่',
			position: 'top',
			showConfirmButton: false,
			timer: 8000,
			timerProgressBar: true,
		})
		$('#playAudio').click();
		sessionStorage.setItem("count_deposit", value);
	}else{
		sessionStorage.setItem("count_deposit", value);
	}
}
function Check_Withdraw(value){
	if (value > sessionStorage.getItem("count_withdraw")) {
		Swal.fire({
			toast: true,
			icon: 'warning',
			title: 'มี รายการถอน ใหม่',
			position: 'top',
			showConfirmButton: false,
			timer: 8000,
			timerProgressBar: true,
		})
		$('#playAudio').click();
		sessionStorage.setItem("count_withdraw", value);
	}else{
		sessionStorage.setItem("count_withdraw", value);
	}
}
function Check_Withdrawaff(value){
	if (value > sessionStorage.getItem("withdrawaff")) {
		Swal.fire({
			toast: true,
			icon: 'warning',
			title: 'มี รายการถอนแนะนำเพื่อน ใหม่',
			position: 'top',
			showConfirmButton: false,
			timer: 8000,
			timerProgressBar: true,
		})
		$('#playAudio').click();
		sessionStorage.setItem("withdrawaff", value);
	}else{
		sessionStorage.setItem("withdrawaff", value);
	}
}


function Check_status_bank_kbank(value){
	if (value == "ปิด") {
		$('#status_bank_kbank').html('<span class="heartbit"></span><span class="point"></span>');
		sessionStorage.setItem("status_bank_kbank", value);
	}else{
		$('#status_bank_kbank').html('');
		sessionStorage.setItem("status_bank_kbank", value);
	}
}
function Check_status_bank_scb(value){
	if (value == "ปิด") {
		$('#status_bank_scb').html('<span class="heartbit"></span><span class="point"></span>');
		sessionStorage.setItem("status_bank_scb", value);
	}else{
		$('#status_bank_scb').html('');
		sessionStorage.setItem("status_bank_scb", value);
	}
}
function Check_status_bank_truewallet(value){
	if (value == "ปิด") {
		$('#status_bank_truewallet').html('<span class="heartbit"></span><span class="point"></span>');
		sessionStorage.setItem("status_bank_truewallet", value);
	}else{
		$('#status_bank_truewallet').html('');
		sessionStorage.setItem("status_bank_truewallet", value);
	}
}


function Show_Notification(){
	
	if (sessionStorage.getItem("count_member") > 0) {
		$("#count_member").attr("class", "btn btn-sm btn-sm-square btn-outline-primary m-2");
		$('#count_member').html(sessionStorage.getItem("count_member") + '<div class="notify position-sticky" style="top: -18px; right: -20px;"><span class="heartbit"></span><span class="point"></span></div>');
	}else{
		$("#count_member").attr("class", "btn btn-sm btn-sm-square btn-outline-primary m-2");
		$('#count_member').text(sessionStorage.getItem("count_member"));
	}
	
	if (sessionStorage.getItem("count_deposit") > 0) {
		$("#count_deposit").attr("class", "btn btn-sm btn-sm-square btn-outline-primary m-2");
		$('#count_deposit').html(sessionStorage.getItem("count_deposit") + '<div class="notify position-sticky" style="top: -18px; right: -20px;"><span class="heartbit"></span><span class="point"></span></div>');
	}else{
		$("#count_deposit").attr("class", "btn btn-sm btn-sm-square btn-outline-primary m-2");
		$('#count_deposit').text(sessionStorage.getItem("count_deposit"));
	}
	
	if (sessionStorage.getItem("count_withdraw") > 0) {
		$("#count_withdraw").attr("class", "btn btn-sm btn-sm-square btn-outline-primary m-2");
		$('#count_withdraw').html(sessionStorage.getItem("count_withdraw") + '<div class="notify position-sticky" style="top: -18px; right: -20px;"><span class="heartbit"></span><span class="point"></span></div>');
	}else{
		$("#count_withdraw").attr("class", "btn btn-sm btn-sm-square btn-outline-primary m-2");
		$('#count_withdraw').text(sessionStorage.getItem("count_withdraw"));
	}
	
	if (sessionStorage.getItem("count_withdrawaff") > 0) {
		$("#count_withdrawaff").attr("class", "btn btn-sm btn-sm-square btn-outline-primary m-2");
		$('#count_withdrawaff').html(sessionStorage.getItem("count_withdrawaff") + '<div class="notify position-sticky" style="top: -18px; right: -20px;"><span class="heartbit"></span><span class="point"></span></div>');
	}else{
		$("#count_withdrawaff").attr("class", "btn btn-sm btn-sm-square btn-outline-primary m-2");
		$('#count_withdrawaff').text(sessionStorage.getItem("count_withdrawaff"));
	}
	
	
	if (sessionStorage.getItem("status_bank_kbank") == "ปิด") {
		$('#status_bank_kbank').html('<span class="heartbit"></span><span class="point"></span>');
	}else{
		$('#status_bank_kbank').html('');
	}
	
	if (sessionStorage.getItem("status_bank_scb") == "ปิด") {
		$('#status_bank_scb').html('<span class="heartbit"></span><span class="point"></span>');
	}else{
		$('#status_bank_scb').html('');
	}
	
	if (sessionStorage.getItem("status_bank_truewallet") == "ปิด") {
		$('#status_bank_truewallet').html('<span class="heartbit"></span><span class="point"></span>');
	}else{
		$('#status_bank_truewallet').html('');
	}
	
}


function Ajax_Notification(){
$.ajax({
        type: "POST",
        url: "/api/admin/storestatus",
        data: {},
        success: function(data) {
            var obj = JSON.parse(data);
			if (sessionStorage.getItem('count_member')) {
				Check_Member(obj.count_member);
			}else{
				sessionStorage.setItem("count_member", obj.count_member);
			}
			
			if (sessionStorage.getItem('count_deposit')) {
				Check_Deposit(obj.count_deposit);
			}else{
				sessionStorage.setItem("count_deposit", obj.count_deposit);
			}
			
			if (sessionStorage.getItem('count_withdraw')) {
				Check_Withdraw(obj.count_withdraw);
			}else{
				sessionStorage.setItem("count_withdraw", obj.count_withdraw);
			}
			
			if (sessionStorage.getItem('count_withdrawaff')) {
				Check_Withdrawaff(obj.count_withdrawaff);
			}else{
				sessionStorage.setItem("count_withdrawaff", obj.count_withdrawaff);
			}
			
			
			
			if (sessionStorage.getItem('status_bank_kbank')) {
				Check_status_bank_kbank(obj.status_bank_kbank);
			}else{
				sessionStorage.setItem("status_bank_kbank", obj.status_bank_kbank);
			}
			
			if (sessionStorage.getItem('status_bank_scb')) {
				Check_status_bank_scb(obj.status_bank_scb);
			}else{
				sessionStorage.setItem("status_bank_scb", obj.status_bank_scb);
			}
			
			if (sessionStorage.getItem('status_bank_truewallet')) {
				Check_status_bank_truewallet(obj.status_bank_truewallet);
			}else{
				sessionStorage.setItem("status_bank_truewallet", obj.status_bank_truewallet);
			}
			
			Show_Notification();
        }
    });	
	
}

</script>
<script type="text/javascript">
$(".check-out").click(function(){
Swal.fire({
			title: 'คำเตือน1',
			text: "คุณต้องการออกจากระบบใช่ไหม",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#00C851',
			cancelButtonColor: '#d33',
			confirmButtonText: 'ใช่'
		}).then((result) => {
			if (result.isConfirmed) {
				localStorage.clear();
				sessionStorage.clear();
				$.ajax({
					type:"POST",
					url:"/api/admin/logout",
					success:function(data){
												
						Swal.fire({
							title: 'ออกจากระบบ',
							text: "ออกจากระบบสำเร็จแล้ว",
							icon: 'success',
							confirmButtonColor: '#00C851',
						}).then((result) => {
							window.location.href='./login';

						})

					}

				})

			}

		})

	});
</script>


</body>
</html>
<?php
}
?>
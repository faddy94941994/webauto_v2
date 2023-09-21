<div class="main-container container">
<div class="row h-100">
            <div class="col-12 mx-auto text-center">
                <div class="row h-100">
                    <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-6 mx-auto align-self-center">
                        <h2 class="text-center mb-4">สมัครสมาชิก</h2>
                        <div class="card card-bg-dc shadow-sm mb-4">
                            <div class="card-body shadow-gold">
							<div class="col-12 text-center align-self-end py-2">
							<p class="mb-2 fw-bold">ยืนยัน OTP ที่ส่งไปยังหมายเลขโทรศัพท์</p>
							<p class="mb-2 text-color-gold fw-bold" id="showphone"></p>
							<p class="mb-4 text-danger fw-bold" id="showname"></p>
								<div class="row">
									<div class="col text-center">
										<span class="progressstimer">
											<img src="assets/img/progress.png" alt="">
											<span class="timer" id="timer"></span>
										</span>
										<br>
										<button class="btn text-white" id="ResendOTP" disabled>ส่ง OTP อีกครั้ง</button>
									</div>
								</div>
							</div>
							
                                <form class=" was-validated">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" id="otp" maxlength="6" placeholder="รหัส OTP" >
                                        <label>รหัส OTP</label>
                                    </div>
                                </form>

								<div class="row p-2">
								
									<div class="col-12 col-md-8 col-lg-8 p-1">
										<div class="d-grid"><a href="javascript:void(0)" id="VerifyOTP" class="btn btn-success shadow-sm">ยืนยัน OTP</a></div>
									</div>
									<div class="col-12 col-md-4 col-lg-4 p-1">
										<div class="d-grid"><a href="javascript:void(0)" id="cancelotp" class="btn btn-danger shadow-sm">ยกเลิก </a></div>
									</div>
								
								</div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
</div>



<script type="text/javascript">
function rand(len){
 var x= '';
 for(var i=0;i<len;i++){x+=Math.floor(Math.random() * 10);}
 return x;
}

function CheckTime_OTP(){
if(sessionStorage.getItem("time_otp")) {
	
	if(sessionStorage.getItem("time_otp") == '0:00') {
		$("#ResendOTP").prop('disabled', false);
		$("#timer").html('0:00');
	}else{
	var gettimesession = sessionStorage.getItem("time_otp");
	var TimeSession = gettimesession.split(/[:]+/);
    var m = TimeSession[0];
    var s = checkSecond((TimeSession[1] - 1));
    if (s == 59) { m = m - 1 }
    if (m < 0) {
        return
    }
	$("#timer").html(m + ":" + s);
	if (m == '0' && s == '00'){
		$("#ResendOTP").prop('disabled', false);
		sessionStorage.setItem("time_otp","0:00");
	}else{
		$("#ResendOTP").prop('disabled', true);
		sessionStorage.setItem("time_otp", m + ":" + s);
	}
	
	}	
	
}else{
	window.location.href='register';
}

}
function checkSecond(sec) {
	if (sec < 10 && sec >= 0) { sec = "0" + sec };
    if (sec < 0) { sec = "59" };
    return sec;
}
</script>
<script type="text/javascript">
$(function(){
	
if(sessionStorage.getItem("date_register_array")) {
	var LoadDateArray = JSON.parse(sessionStorage.getItem("date_register_array"));
	$("#showphone").html(LoadDateArray[0]);
	$("#showname").html(LoadDateArray[5]);
	CheckTime_OTP();
	setInterval(CheckTime_OTP, 1000);
}else{
	window.location.href = 'register';
}

});
</script>
<script type="text/javascript">
$('#ResendOTP').click(function(e) {
e.preventDefault();
$(this).prop('disabled', true);
if(sessionStorage.getItem("date_register_array")) {
	if(sessionStorage.getItem("time_otp") == '0:00') {
		$.ajax({
			type: "POST",
			url: "api/v2/ResendOTP",
			data: {},
			success: function(data) {
				var obj = JSON.parse(data);
				if (obj.status == "success") {
					sessionStorage.setItem("time_otp", "01:30");
				}
			}
		});
	}
}else{
	window.location.href = 'register';
}
});
</script>
<script type="text/javascript">
$('#cancelotp').click(function(e) {
e.preventDefault();
sessionStorage.removeItem("time_otp");
sessionStorage.removeItem("date_register_array");
});
</script>
<script type="text/javascript">
$('#VerifyOTP').click(function(e) {
e.preventDefault();
$(this).prop('disabled', true);
var DateRegisterArray = JSON.parse(sessionStorage.getItem("date_register_array"));
var otp = $("#otp").val();
var phone = DateRegisterArray[0];
	$.ajax({
        type: "POST",
        url: "api/v2/VerifyOTP",
        data: {
            otp:otp,
			phone:phone,
        },
		success: function(data) {
			$('#VerifyOTP').prop('disabled', false);
			var objnew = JSON.parse(data);
			if (objnew.status == "success") {
				
				var phone_mb = DateRegisterArray[0];
				var phone_true = DateRegisterArray[1];
				var password_mb = DateRegisterArray[2];
				var bank_mb = DateRegisterArray[3];
				var bankacc_mb = DateRegisterArray[4];
				var name_mb = DateRegisterArray[5];
				var aff = DateRegisterArray[6];
				$.ajax({
					type: "POST",
					url: "api/v2/register",
					data: {
						phone_mb:phone_mb,
						phone_true:phone_true,
						password_mb:password_mb,
						bank_mb:bank_mb,
						bankacc_mb:bankacc_mb,
						name_mb:name_mb,
						aff:aff,
					},
					success: function(data) {
						sessionStorage.removeItem("time_otp");
						sessionStorage.removeItem("date_register_array");
						var obj = JSON.parse(data);
						if (obj.status == "success") {
							Swal.fire({
								icon: 'success',
								title: 'สมัครสมาชิก',
								text: obj.info,
								confirmButtonColor: '#00C851',
							}).then((result) => {
								window.location.href = 'wallet';
							})
						} else {
							Swal.fire({
								icon: 'error',
								title: 'สมัครสมาชิก',
								text: obj.info,
								confirmButtonColor: '#00C851',
							})
						}
					}
				});
				
			}else {
                Swal.fire({
                    icon: 'error',
                    title: 'ยืนยัน OTP',
                    text: objnew.info,
                    confirmButtonColor: '#00C851',
                })
            }
		}
	});
});
</script>
<div class="container-fluid h-100 mt-5">
		<div class="row">
			<div class="col-12 mx-auto">
			  <div class="row">
				<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-4 mx-auto align-self-center py-4">
				  <div class="card card-bg-dc mb-3">
					<div class="card-body shadow-gold">
					
					  <h3 class="mb-4 text-center text-white-light1">เข้าสู่ระบบ</h3>
				
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="phone_mb" placeholder="เบอร์โทรศัพท์" autoComplete="none" >
							<label>เบอร์โทรศัพท์</label>
						</div>
						<div class="form-floating mb-3">
							<input type="password" class="form-control" id="password_mb" placeholder="รหัสผ่าน">
							<label>รหัสผ่าน</label>
						</div>
					
					<p class="mb-3 text-end">
						<a href="javascript:void(0)" class="">
							ลืมรหัสผ่าน
						</a>
					</p>
					<div class="row">
						<div class="col-12 col-md-6 d-grid p-1">
							<a href="javascript:void(0)" id="submitlogin" class="btn btn-success shadow-sm">เข้าสู่ระบบ</a>
						</div>
						<div class="col-12 col-md-6 d-grid p-1">
							<a href="register" class="btn btn-info shadow-sm">สมัครสมาชิก</a>
						</div>
					</div>
					  
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
</div>

<script type = "text/javascript" >
    $('#submitlogin').click(function(e) {
        e.preventDefault();
		$(this).addClass("disabled");
        var phone_mb = $("#phone_mb").val();
        var password_mb = $("#password_mb").val();
        $.ajax({
            type: "POST",
            url: "api/v2/login",
            data: {
                phone_mb: phone_mb,
                password_mb: password_mb,
            },
            success: function(data) {
				$('#submitlogin').removeClass("disabled");
                var obj = JSON.parse(data);
                if (obj.status == "success") {
					Swal.fire({
                        icon: 'success',
                        title: 'เข้าสู่ระบบ',
                        text: obj.info,
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#00C851',
                    }).then((result) => {
						$.removeCookie('topup');
						$.removeCookie('LoadBalance');
                        window.location.href = 'wallet';
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: obj.info,
                        confirmButtonText: ' ปิด ',
                        confirmButtonColor: '#DC3545',
                    })
                }
            }
        });
    });
</script>
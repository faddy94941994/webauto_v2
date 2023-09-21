<!DOCTYPE html> 
<html lang="en">
<head>
	<title><?php echo $Get_Setting->name_web; ?> System Control</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/assets/loginadmin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/loginadmin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/loginadmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/loginadmin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/assets/loginadmin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/loginadmin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/loginadmin/css/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/loginadmin/css/main.css">
<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><!-- v4.0.0-alpha.6 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sf.css">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	
	<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>backend System Manager</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/asset3/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/asset3/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/asset3/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/asset3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/asset3/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Sign In Start -->
		
        <div class="container-fluid">
            <div class="row h-80 align-items-center justify-content-center" style="min-height: 80vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Backend System Manager</h3>
                            </a>
                            <h3>ระบบหลังบ้าน</h3>
                        </div>
                        <div class="form-floating mb-3">
						<input class="form-control" type="text" id="username_ad"  placeholder="Username">
                            <label for="floatingInput">ยูสเซอร์เนม</label>
                        </div>
                        <div class="form-floating mb-4">
						<input class="form-control" type="password" id="password_ad" placeholder="Password">
                            <label for="floatingPassword">รหัสผ่าน</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                             
                            </div>
                            <a href="https://t.me/a2wjon">ลืมรหัสผ่าน</a>
                        </div>
                        <button type="submit" button id="submitlogin"  class="btn btn-primary py-3 w-100 mb-4">เข้าสู่ระบบ</button>
                        <p class="text-center mb-0">ติดต่อเเจ้งปัญหา <a href="https://t.me/a2wjon">คลิก</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="text-center">
						<a class="txt" href="#">
							2023 © WPOFFICIAL All Rights Reserved. | Version: (2.6.33)</a>
					</div>

    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/asset3/lib/chart/chart.min.js"></script>
    <script src="/asset3/lib/easing/easing.min.js"></script>
    <script src="/asset3/lib/waypoints/waypoints.min.js"></script>
    <script src="/asset3/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/asset3/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/asset3/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/asset3/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script> -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

	
<script type="text/javascript">
$('#submitlogin').click(function(e){
		e.preventDefault();
		var username_ad = $("#username_ad").val();
		var password_ad = $("#password_ad").val();
		$.ajax({
			type:"POST",
			url:"/api/admin/login",
			data:{
				username_ad:username_ad,
				password_ad:password_ad,
			},success:function(data){
				var obj = JSON.parse(data);
				if (obj.status=="success"){
					Swal.fire({
						icon: 'success',
						title: 'เข้าสู่ระบบ',
						text: obj.info,
						allowOutsideClick: false,
						confirmButtonColor: '#00C851',
					}).then((result) => {
						window.location.href='./';
					})
				}else{
					Swal.fire({
						icon: 'error',
						title: 'เข้าสู่ระบบ',
						text: obj.info,
						allowOutsideClick: false,
						confirmButtonColor: '#00C851',
					})
				}
			}
		});
});
</script>
	
<!--===============================================================================================-->	
	<script src="/assets/loginadmin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/loginadmin/vendor/bootstrap/js/popper.js"></script>
	<script src="/assets/loginadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/loginadmin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/loginadmin/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/assets/loginadmin/js/main.js"></script>

</body>
</html>

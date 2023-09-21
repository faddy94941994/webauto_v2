<?php
error_reporting(0);
if(isset($_SESSION['id_ad'])){

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ระบบหลังบ้าน</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/asset3/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/asset3/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/admin/css/et-line-font/et-line-font.css">	
	<link rel="stylesheet" href="/assets/admin/css/themify-icons/themify-icons.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/asset3/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><!-- v4.0.0-alpha.6 -->
    <!-- Template Stylesheet -->
	
    <link href="/asset3/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/admin/plugins/dropify/dropify.min.css">
	<link rel="stylesheet" href="/assets/admin/plugins/bootstrap-switch/bootstrap-switch1.css">
	<link rel="stylesheet" href="/assets/admin/css/themify-icons/themify-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" href="/assets/admin/css/et-line-font/et-line-font.css">
	<link rel="stylesheet" href="/assets/admin/font-awesome-pro-5.15.4/css/all.css">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><!-- v4.0.0-alpha.6 -->
<!-- <link rel="stylesheet" href="/assets/admin/bootstrap/css/bootstrap.min11.css"> -->
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


<!-- DataTables -->
<!-- <link rel="stylesheet" href="/assets/admin/plugins/bootstrap-switch/bootstrap-switch1.css"> -->

<!-- dropify -->
<link rel="stylesheet" href="/assets/admin/plugins/dropify/dropify.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.min.css" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">

<?php

}
?>

<script type="text/javascript">
	function CheckedMain(checkbox) {
    if(checkbox.checked){
		$.ajax({
            url: '/api/admin/updatecheckbox',
            type: 'POST',
            data:{
				TABLE_NAME:"setting",
				SET_NAME:"status_auto2",
				SET_VALUE:"เปิด",
				WHERE_NAME:"id",
				WHERE_VALUE:"1",
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
				TABLE_NAME:"setting",
				SET_NAME:"status_auto2",
				SET_VALUE:"ปิด",
				WHERE_NAME:"id",
				WHERE_VALUE:"1",
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
function CheckedMain2(checkbox) {
    if(checkbox.checked){
		$.ajax({
            url: '/api/admin/updatecheckbox',
            type: 'POST',
            data:{
				TABLE_NAME:"setting",
				SET_NAME:"status_auto",
				SET_VALUE:"เปิด",
				WHERE_NAME:"id",
				WHERE_VALUE:"1",
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
				TABLE_NAME:"setting",
				SET_NAME:"status_auto",
				SET_VALUE:"ปิด",
				WHERE_NAME:"id",
				WHERE_VALUE:"1",
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



<?php

?>
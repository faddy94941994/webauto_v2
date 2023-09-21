<?php
if(!isset($_SESSION['id_mb'])){
	session_destroy();
	echo "<script>window.location = './'</script>";
	exit;
}else{
	session_destroy();
	echo "<script>window.location = './'</script>";
	exit;
}
?>
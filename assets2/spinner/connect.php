<?php
require "Setting.php";
$conn = mysqli_connect($S_Host,$S_User,$S_Password,$S_Database) or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");

?>
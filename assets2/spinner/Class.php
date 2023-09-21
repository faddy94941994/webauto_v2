<?php
require "Setting.php";
require "connect.php";
$s_sql = "SELECT * FROM $S_Table_Setting WHERE id = '1'";
$s_result = mysqli_query($conn, $s_sql) or die ("Error in query: $s_sql " . mysqli_error());
$s_row = mysqli_fetch_array($s_result);


$s_Image1 = $s_row["Image1"];
$s_Image2 = $s_row["Image2"];
$s_Image3 = $s_row["Image3"];
$s_Image4 = $s_row["Image4"];
$s_Image5 = $s_row["Image5"];
$s_Image6 = $s_row["Image6"];
$s_Image7 = $s_row["Image7"];
$s_Image8 = $s_row["Image8"];
$s_ImageCenter = $s_row["ImageCenter"];
?>
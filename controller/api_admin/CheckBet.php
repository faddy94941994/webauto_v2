<?php 
$status = $Load_Master->CheckBet($_POST['username'],$_POST['startdate'],$_POST['enddate']);

echo $status;
?>
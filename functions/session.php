<?php
if(!empty($_SESSION['uid'])){
	$session_uid=$_SESSION['uid'];
	include('class/Admin.php');
	$userClass = new Admin();
}

if(empty($session_uid)){
	header("Location: functions/erro.html");
}

<?php
	include('config/config.php');
	include('functions/session.php');
	$userDetails=$userClass->userDetails($session_uid);
?>
<h1>Welcome <?php echo $userDetails->name; ?></h1>

<h4><a href="functions/logout.php">Logout</a></h4>
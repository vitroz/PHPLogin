<?php 
include('config/config.php');
include('functions/session.php');
$userDetails=$userClass->userDetails($session_uid);
include 'header.php'; 

include 'pages/redir.php'; 

echo ' </div></section>';
include 'footer.php'; 
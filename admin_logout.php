<?php
	require_once("session.php");
?>

<?php
	$_SESSION['user_id'] = null;
	$_SESSION['username'] = null;
	$_SESSION['Email_Id'] = null;
	header("Location: admin_login.php");
?>	

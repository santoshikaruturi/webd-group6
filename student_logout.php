<?php
	require_once("session.php");
?>

<?php
	$_SESSION['user_id'] = null;
	$_SESSION['status'] = null;
	$_SESSION['Email_Id'] = null;
	$_SESSION['fname'] = null;
	header("Location: student_login.php");
?>	

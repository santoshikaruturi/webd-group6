<?php 
	
	require_once("connections.php");
	require_once("session.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("student_login.php");
?>


<?php
	global $message;
	$message = "";
	if(isset($_POST['submit']))
	{
		$index = $_SESSION['user_id'];
		$address = $_POST['addr'];
		$mobile = $_POST['contact'];
		$city = $_POST['city'];
		$pin = $_POST['pin'];
		$state = $_POST['state'];
		$nationality = $_POST['country'];

		$query = "UPDATE student_details SET p_addr='{$address}',m_no='{$mobile}',city='{$city}',state='{$state}',pin='{$pin}',country='{$nationality}' WHERE id = '{$index}' ";
	//echo $query;

		$result = mysqli_query($connection,$query);
		if( !$result ) {
    $message = ("Error description: " . mysqli_error($connection));
	?>
	<script> alert("<?php echo $message; ?>"); </script>
	<?php
    }
		confirm_query($result);
		$message =  'Student Personal Details Updated';
		?>
	<script> alert("<?php echo $message; ?>"); </script>
	<?php
	header("Location: details.php");
	}
?>


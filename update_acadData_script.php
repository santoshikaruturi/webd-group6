<?php 
	require_once("connections.php"); 
	require_once("session.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("admin_login.php");
	
?>

<?php
	global $message;
	$message = "";
	if(isset($_POST['submit']))
	{
		$index = $_GET['id'];
		
		
		$ClassX_Board=$_POST['ClassX_Board'];
		$ClassX_Percentage=$_POST['ClassX_Percentage'];
		$ClassX_YrOfPassing=$_POST['ClassX_YrOfPassing'];
		
		$ClassXII_Board=$_POST['ClassXII_Board'];
		$ClassXII_Percentage=$_POST['ClassXII_Percentage'];
		$ClassXII_YrOfPassing=$_POST['ClassXII_YrOfPassing'];
		
		$ug_board=$_POST['ug_board'];
		$ug_cgpa=$_POST['ug_cgpa'];
		$ug_yrofpassing=$_POST['ug_yrofpassing'];
		
		//$course=$row2['btech'];
		$branch=$_POST['branch'];
		$regn=$_POST['regn'];
		$roll_no=$_POST['roll_no'];
		$query = "UPDATE student_details SET ClassX_Board='{$ClassX_Board}',ClassX_Percentage='{$ClassX_Percentage}',ClassX_YrOfPassing='{$ClassX_YrOfPassing}',ClassXII_Board='{$ClassXII_Board}',ClassXII_Percentage='{$ClassXII_Percentage}',ClassXII_YrOfPassing='{$ClassXII_YrOfPassing}',ug_board='{$ug_board}',ug_cgpa='{$ug_cgpa}',ug_yrofpassing='{$ug_yrofpassing}',branch='{$branch}',regn='{$regn}',roll_no='{$roll_no}' WHERE id = '{$index}' ";

		echo $query;

		$result = mysqli_query($connection,$query);
		echo $result;
		if( !$result ) {
    $message = ("Error description: " . mysqli_error($connection));
	?>
	<script> alert("<?php echo $message ?>"); </script>
	<?php
    }
		confirm_query($result);
		$message =  'Details updated successfully';
		?>
		<script> alert("<?php echo $message ?>"); </script>
		<?php
		header("Location: show_accounts.php");
	}
?>

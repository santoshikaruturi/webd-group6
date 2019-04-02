<?php 
	
	require_once("connections.php");

	require_once("session.php");
?>
	
<?php 
	session_start();
	if(isset($_POST['Delete']))
		{
			$id = $_GET['id'];
			$query="SELECT * FROM student_details WHERE id='$id' ";
			echo $query;
			$db_query = mysqli_query($connection, $query);
			$res = mysqli_fetch_all($db_query);
			if(empty($_POST)==False){
				$query = "DELETE FROM student_details WHERE id='$id'";
				mysqli_query($connection, $query);
				header("Location: delete_existing.php");
			}
			else{
				header("Location: admin_home.php");
			}
		}
	else{
		header("Location: admin_home.php");
	}
?>
<?php 
	
	require_once("connections.php");

	require_once("session.php");
?>
	
<?php 
	session_start();
	if(isset($_SESSION['username'])){
		$id = $_GET['id'];
		$query="SELECT * FROM student_details WHERE id='$id' ";
		echo $query;
		$db_query = mysqli_query($connection, $query);
		$res = mysqli_fetch_all($db_query);
		if(empty($_POST)==False){
			$query = "UPDATE student_details SET status='1' WHERE id='$id'";
			mysqli_query($connection, $query);
			header("Location: admin_accept_delete.php");
		}
		else{
			header("Location: admin_home.php");
		}
	}
	else{
		header("Location: admin_home.php");
	}
?>
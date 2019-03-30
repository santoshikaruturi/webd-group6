<?php 
	session_start();
	function logged_in() 
	{
		#if($_SESSION['login']==0)
			return isset($_SESSION['user_id'] );
		/*if($_SESSION['login']==1)
		?>
		<script>
			alert("Student can't login since admin is already logged in.");
		</script>
		<?php
		if($_SESSION['login']==2)
		?>
		<script>
			alert("Admin can't login since student is already logged in.");
		</script>
		<?php*/
	}
	
	function confirm_logged_in() 
	{
		if ( !logged_in() ) {
			return false;
		}
		else return true;
	}
	
	function confirm_query( $result_set ) {
		if( !$result_set ) {
		die( "Database query failed: " . mysqli_error() );
		}
	}
	
	function redirect_to( $location = NULL ) {
		if ( $location != NULL ) {
			header( "Location: {$location}" );
			exit;
		}
	}

?>	

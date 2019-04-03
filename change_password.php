<?php 
	require_once("connections.php"); 
	require_once("session.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("student_login.php");
?>

<?php
	$email=$_SESSION['Email_Id'];
	$query = "SELECT * FROM student_details WHERE email='$email'";
	$result = mysqli_query($connection,$query);
	$row2 = mysqli_fetch_assoc($result);
	$password = $row2['pwd'];
?>

<?php
	global $message;
	$message = "";
	if(isset($_POST['submit']))
	{
		$index = $_SESSION['user_id'];
		$new_pwd = $_POST['password'];

		$query = "UPDATE student_details SET pwd='{$new_pwd}' WHERE id = '{$index}' ";
	//echo $query;

		$result = mysqli_query($connection,$query);
		if( !$result ) {
    $message = ("Error description: " . mysqli_error($connection));
	?>
	<script> alert("<?php echo $message ?>"); </script>
	<?php
    }
		confirm_query($result);
		$message =  'Password changed successfully';
		?>
		<script> alert("<?php echo $message ?>"); </script>
		<?php
	}
?>


<!Doctype.html>
<html>
    <head>
        <link rel="shortcut icon" href="SAE.ico" type="image/x-icon" />
        <title>Webd Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link href="https://fonts.googleapis.com/css?family=Acme|Coiny" rel="stylesheet">-->
        <link rel="stylesheet" href="css/home.css"/>
        <link rel="stylesheet" href="css/student_regn.css"/>
		<script type="text/javascript" src="js/validate.js"></script>
    </head>
	
    <body>
	  <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="student_home.php"><i class="fa fa-home"></i> Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
                        <a class="nav-link" href="about_student.html">About</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="dept_student.html">Departments</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="facilities_student.html">Facilities</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="contact_student.html">Contact</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="student_logout.php">Logout</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link"><i>Hello, <?php echo $_SESSION['fname']; ?></i> </a>
					</li>
                </ul>
            </div>
            </div>
        </nav>
	  </section>
	  
		<br>
	  
	  <section class="signup_form">
	   <div class="container">
	    <form name="signup" action="change_password.php" method="post" onsubmit="return check()">
		<table>
			<tr>
				<td>Email Id:</td>
				<td style="text-transform:none;"><?php echo $email; ?><br></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required onblur="pass_out()"/></td>
			</tr>
			<tr>
				<td>Confirm Password: &nbsp;</td>
				<td><input type="password" name="c_password" required onblur="con_pass_out()"/></td>
			</tr>
		<br>
		<table>
		  <tr>
			<td><input type="reset" value="Reset"></input> <br></td>
			<td><input type="submit" name="submit"></input> <br></td>
		  <tr>
		</table>
		</form>
 	   </div>
	  </section>
		
        <footer>
            <div class="Wraper">
				<a class="fb-ic" href="https://www.facebook.com/nitdgp.unofficial">
				  <i class="fa fa-facebook"> </i>
				</a>
				<a class="tw-ic" href="mailto:director@admin.nitdgp.ac.in">
				  <i class="fa fa-envelope"> </i>
				</a>
            </div>
        </footer>
        
		<script type="text/javascript" src="js/validate.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
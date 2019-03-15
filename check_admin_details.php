<?php
  require_once("connections.php");
  //require_once("includes/functions.php");
  require_once("session.php"); 
  
	if (isset($_POST['submit'])) 
	{
		if (logged_in()) 
		{
			header("Location: admin_home.php");
		}
		//$user_id=$_POST['id'];
		$username=$_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

	$query = "SELECT * FROM admin WHERE username='{$username}' AND email = '{$email}' AND pwd = '{$password}' ";
		//$query .= "WHERE email = '{$Email_Id}' ";
		//$query .= "AND pwd = '{$password}' ";
		$result_set = mysqli_query($connection,$query);
				
		if( !$result_set ) 
		{
			$message=("Error description: " . ($connection));
			echo $message;
		}

		global $message;
		$message = "";
		if (mysqli_num_rows($result_set)==1)
		{
			$found_user = mysqli_fetch_array($result_set);
			$_SESSION['user_id'] = $found_user['id'];
			//echo $_SESSION['user_id'];
			//$_SESSION['login']=1;
			$_SESSION['username'] = $found_user['username'];
			$_SESSION['Email_Id'] = $found_user['email'];
			header("Location: admin_home.php");
		} 
		else 
		{
			//$message = "<h4><b>Wrong Email_Id or password</b></h4>";
			//echo $message;
			?>
			<!--$message = "<h2>User with same registration number already exists.Try again with a different registration number</h2>";
			die("<b><h2>User with same registration number already exists.Try again with a different registration number</h2></b>");-->
			
			<!Doctype.html>
			<html>
				<head>
					<title>Webd Project</title>
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<!--<link href="https://fonts.googleapis.com/css?family=Acme|Coiny" rel="stylesheet">-->
					<link rel="stylesheet" href="css/home.css"/>
					<link rel="stylesheet" href="css/student_regn.css"/>
				</head>
				<body>
				  <section>
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
						<div class="container">
						<a class="navbar-brand" href="home_signup.php"><i class="fa fa-home"></i> Home</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="nav navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="about.html">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="dept.html">Departments</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="facilities.html">Facilities</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Contact</a>
								</li>
							</ul>
						</div>
						</div>
					</nav>
				  </section>
				  
				  <br>
				  <h2 style="color:white; margin:10%;"> Wrong Email Id or Password. Go back to the home page to login again. </h2>
				  
				  <section>
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
				  </section>
					
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
				</body>
			</html>
			
		<?php 
			
		}
	}

?>     
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
		$username = $_POST['f_name'];
		$lastname = $_POST['l_name'];
		$address = $_POST['addr'];
		$email = $_POST['email'];
		$mobile = $_POST['contact'];
		$nationality = $_POST['country'];

		$query = "UPDATE student_details SET f_name='{$username}',l_name='{$lastname}',p_addr='{$address}',email='{$email}',m_no='{$mobile}',country='{$nationality}' WHERE id = '{$index}' ";
	//echo $query;

		$result = mysqli_query($connection,$query);
		if( !$result ) {
    $message = ("Error description: " . mysqli_error($connection));
    }
		confirm_query($result);
		$message =  'Student Details Updated';
	}
?>


<html>
    <head>
        <title>Webd Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link href="https://fonts.googleapis.com/css?family=Acme|Coiny" rel="stylesheet">-->
        <link rel="stylesheet" href="css/admin_home.css"/>
        <link rel="stylesheet" href="css/student_regn.css"/>
    </head>
    <body>
	  <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="student_update.php"><i class="fa fa-home"></i> Home</a>
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
					<li class="nav-item">
                        <a class="nav-link" href="student_logout.php">Logout</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link"><i>Hello, <?php echo $_SESSION['fname']; ?></i></a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
	  </section>
		
	<!--  <section>
		<div class="contact-us" class="section scrollspy">
			<img src="img/img1.jpg" alt="logo" width="250px" height="250px"></img>
			<div class="options">
				<button type="button"><a href="admin_accept_delete.php"> Accept or Delete new accounts </a></button>
				<button type="button"><a href=""> Delete existing accounts </a></button>
				<button type="button"><a href="admin_student_edit.php"> Update existing accounts </a></button>
				<button type="button"><a href="show_accounts.php"> Show all accounts </a></button>
			</div>
		</div>
	  </section> -->
	  <div style="color:white ;font-size:300%; margin:50px,50px;"><?php echo $message ?> </div>
		
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
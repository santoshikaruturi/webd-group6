<?php 
	
	require_once("connections.php");
	require_once("session.php");
?>



<?php
	// print_r($_SESSION);
	if(!confirm_logged_in()) redirect_to("admin_login.php");
	$index = $_SESSION['user_id'];
	$query = "Select id,f_name,l_name,email,m_no,regn,roll_no,dp from student_details where id=$index";
	$result = mysqli_query($connection,$query);
?>

	


<!Doctype.html>
<html>
    <head>
        <title>Webd Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link href="https://fonts.googleapis.com/css?family=Acme|Coiny" rel="stylesheet">-->
        <link rel="stylesheet" href="css/admin_home.css"/>
        <link rel="stylesheet" href="css/student_regn.css"/>
        <link rel="stylesheet" href="css/home.css"/>
        <link rel="stylesheet" href="css/student_login.css"/>
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
	  
	  <form action="admin_home.php" method="POST">
			<br><br><br><br><br>
				<table style="color: #CCCCCC ; width:800 ; font-size:20px" align="center" border="0" bordercolor="black" >
	  <br>
	  <br>
	  
	  <section>
			<form action="admin_home.php" method="POST">
	
		<?php
		
			$row=mysqli_fetch_assoc($result)
		
		?>
			
		<tr >
			<td height="50">First Name </td>
			<td height="50"><?php 	echo $row['f_name']; ?></td>
		</tr>
		
		<tr>
			<td height="50">Last Name </td>
			<td height="50"><?php 	echo $row['l_name']; ?></td>
		</tr>
		
		<tr>
			<td height="50">Email-Id </td>
			<td height="50"><?php 	echo $row['email']; ?></td>
		</tr>
		
		<tr>
			<td height="50">Mobile Number </td>
			<td height="50"><?php 	echo $row['m_no']; ?></td>
		</tr>
		
		<tr>
			<td height="50">Registration Number </td>
			<td height="50"><?php 	echo $row['regn']; ?></td>
		</tr>
		
		<tr>
			<td height="50">Roll Number </td>
			<td height="50"><?php 	echo $row['roll_no']; ?></td>
		</tr>
		
		<!--<tr>
			<td >profile Pictue </td>
			<td ><?php 	echo $row['dp']; ?></td>
		</tr>-->
		
		<?php 	echo $row['dp']; ?>
		
		</table>
	  </section>
	  
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

</html>


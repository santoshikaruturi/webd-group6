<?php 
	
	require_once("connections.php");
	require_once("session.php");
?>
	
<?php
	if(!confirm_logged_in()) header("Location: admin_login.php");
	$query = "Select id,f_name,l_name,email,m_no,regn from student_details WHERE status=0";
	$result = mysqli_query($connection,$query);
	if(!mysqli_num_rows($result))
		$flag=1;
	else
		$flag=0;
	
?>	

<?php
	global $message1;
	$message1="";
	$checked=array();

	 // print_r($_SESSION);
	if(isset($_POST['Accept']))
	{
		$count=0;
		while($row = mysqli_fetch_assoc($result))
		{
			$email = $row['email'];
			echo $email;
			$count = $count+1;	
			$query = "SELECT * FROM student_details ";
		    $query .= "WHERE email = '{$email}' ";		
			$result_set = mysqli_query($connection,$query); 
			if(mysqli_num_rows($result_set)==1)
		    {
		    	$query2 = "UPDATE student_details SET status=1 WHERE email = '{$email}' ";
		    	$result_set2 = mysqli_query($connection,$query2);
				//confirm_query($result_set2);
			}
		}
		if($count<=0)  
			$message1 = 'No students were selected to accept';
		else 
			$message1 = 'Selected students Accepted';
		$query = "Select id,f_name,l_name,email,m_no,regn from student_details WHERE status=0";
		$result = mysqli_query($connection,$query);
		if($flag==1)
		{
			$message1="No new student entry";
			$flag=0;
		}
	}
	
	if(isset($_POST['Delete']))
	{
		$count1=0;
		while($row = mysqli_fetch_assoc($result))
		{
			$email = $row['email'];
			$count1 = $count1+1;
			// echo $index;
			// print_r($_POST);
			$query = "SELECT * FROM student_details ";
			$query .= "WHERE email = '{$email}' ";
		    $result_set = mysqli_query($connection,$query);
		    //confirm_query($result_set);
			if(mysqli_num_rows($result_set)==1)
		    {
		    	$query2 = "DELETE FROM student_details ";
		    	$query2 .= "WHERE email = '{$email}' ";
			   	$result_set2 = mysqli_query($connection,$query2);
			   	//confirm_query($result_set2);
		    }
		}
		if($count1<=0)  $message1 = 'No students were selected to delete';
		else $message1= 'Selected students are deleted';
		$query = "Select id,f_name,l_name,email,m_no,regn from student_details WHERE status=0";
		$result = mysqli_query($connection,$query);
	}

	#$query = "Select f_name,l_name,email,m_no,regn_no from student_details WHERE status=0";
	#$result = mysqli_query($connection,$query);
?>

<!Doctype.html>
<html>
    <head>
        <title>Webd Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link href="https://fonts.googleapis.com/css?family=Acme|Coiny" rel="stylesheet">-->
        <link rel="stylesheet" href="css/home.css"/>
        <link rel="stylesheet" href="css/student_login.css"/>
    </head>
    <body>
	  <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="admin_home.php"><i class="fa fa-home"></i> Home</a>
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
                        <a class="nav-link" href="admin_logout">Logout</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#"><i>Hello, <?php echo $_SESSION['username']; ?></i></a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
	  </section>
	  
	  <br>
	  <br>
	  
	  <section>
			<form action="admin_home.php" method="POST">
				<table align="left" style="color: white;">
				<tr>
				<strong><h4 style="color:white; padding:0px 510px;"> <?php echo $message1; ?></h4> </strong>
				</tr>
				<tr><br/></tr>
				</table>
				<table style="color: #CCCCCC;" align="center" border="1px" bordercolor="white" cellpadding="10" >
					<tr>
						<th> <i> Name </i> </th>
						<th> <i> Email </i> </th>
						<th> <i> Registration No. </i> </th>
						<th> <i> Mobile No. </i></th>
					</tr>	

					<!--?php 
						if(!mysqli_num_rows($result)) {?>
							<h4><strong style="color:white; padding:0px 550px;"><?php echo $message1; ?> </strong> </h4>
							<br>-->
							
						<?php 
						
						{
						while($row=mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td> <?php 	echo $row['f_name']; ?> <?php echo $row['l_name']; ?></td>
							<td> <?php 	echo $row['email']; ?> </td>
							<td> <?php 	echo $row['regn']; ?> </td>
							<td> <?php 	echo $row['m_no']; ?> </td>
							<td> <input type="checkbox" name="<?php echo $row['id'] ?>"> </td>
						</tr>	

						<?php	
						}	} ?>
						</table>
						<br> <br>
						<table align="center">
							<tr>
							 <th><input type="submit" align="center" name="Accept" value="Accept entries"> </th>
							<th> <input type="submit" align="center" name="Delete" value="Delete entries"> </th>
							</tr>
						</table>
			</form>
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



	 
<!--<html>
<head>
	<title>
		Main Page
	</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body background="images/back.jpg">
	<div id="header" style="text-align: center;">
		<img src="images/nit_logo.png" alt="nit_logo" style="float: left; width:100px;height:90px">
<br><br>
			<h1>NIT DURGAPUR</h1>
			

		</div>
		<div class="container">
			<ul class="navbar">
				<li><a href="admin.php">Home</a></li>
				<li>
					<div class="dropdown">
						<button class="dropbtn">Student Info</button>
						<div class="dropdown-content">
							<a href="admin_update.php">Edit Student Info</a>
							<a href="admin_delete.php">Delete Student Info</a>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<button class="dropbtn">Student</button>
						<div class="dropdown-content">
						    <a href="admin_create.php">Add Students</a>
						    <a href="admin_show.php">Accepted Students</a>
						<!--    <a href="login2.html">Administration Signup</a> --!->
					  	</div>
					</div>
				</li>
				<li><a href="admin_logout.php">Logout</a></li> 
			</ul>
			<form action="admin.php" method="POST">
				<table align="left" style="color: white;">
				<tr>
				<th><h4> ?php echo $message1; ?></h4> </th>
				</tr>
				</table>
				<table style="color: #CCCCCC;" align="center" border="1px" bordercolor="white" cellpadding="10" >
					<tr>
						<th> <i> Name </i> </th>
						<th> <i> Email </i> </th>
						<th> <i> Registration No. </i> </th>
						<th> <i> Mobile No. </i></th>
					</tr>	

					?php 
						while($row=mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td> ?php 	echo $row['f_name']; ?> </td>
							<td> ?php 	echo $row['email']; ?> </td>
							<td> ?php 	echo $row['regn_no']; ?> </td>
							<td> ?php 	echo $row['m_no']; ?> </td>
							<td> <input type="checkbox" name="?php echo $row['id'] ?>"> </td>
						</tr>	

					?php } ?>
						</table>
						<br><br>
						<table align="center">
							<tr>
							 <th><input type="submit" align="center" name="Accept" value="Accept entries"> </th>
							<th> <input type="submit" align="center" name="Delete" value="Delete entries"> </th>
							</tr>
						</table>
					
				
			</form>
		</div>
			
</body>
</html>
-->
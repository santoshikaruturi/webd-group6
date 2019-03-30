<?php 
	require_once("connections.php"); 
	require_once("session.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("student_login.php");
?>

<?php
	// echo $_SESSION['Email'];
	// $index = $_SESSION['user_id'];
	// $query = "SELECT * FROM student_details ";
	// $query .= "WHERE email = '$_SESSION['Email']' ";
	// echo "string";
	$k=$_SESSION['Email_Id'];
	$query = "SELECT * FROM student_details WHERE email='$k'";
	$result = mysqli_query($connection,$query);
	// echo "string1";
			$row2 = mysqli_fetch_assoc($result);
			$firstname = $row2['f_name'];
			// echo $firstname;
			$lastname = $row2['l_name'];
			$address = $row2['p_addr'];
			$email = $row2['email'];
			$mobile = $row2['m_no'];
			$city = $row2['city'];
			$state = $row2['state'];
			$pin = $row2['pin'];
			$nationality = $row2['country'];
			 // print_r($result_set);
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
		<!--<script type="text/javascript">
			function check()
			{
				var f_name = document.forms["signup"]["f_name"].value;
				if (f_name == "") 
				{
					alert("Name must be filled out");
					return false;
				}
				else 
					alert("First name filled correctly");
			}
		</script>-->
		
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
	    <form name="signup" action="student_update.php" method="post" onsubmit="return check()">
		<table>
		<tr>
			<td>First Name: </td>
			<td style="height:30px;"><?php echo $firstname; ?><br></td>
		</tr>
		<tr>
			<td>Last Name: </td>
			<td style="height:30px;"><?php echo $lastname; ?><br></td>
		</tr>
		<tr>
			<td>Date of Birth: </td>
			<td style="height:30px;"><?php echo $row2['dob']; ?><br></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td style="height:30px;"><?php echo $row2['gender']; ?><br></td>
		</tr>
		<tr>
			<td>Contact: </td>
			<td><input type="text" name="contact" id="contact" onblur="contact_out()" value="<?php echo $mobile; ?>"></input><br></td>
		</tr>
		<tr>
			<td>Present Address: </td>
			<td><input type="textarea" name="addr" maxlength="100" onblur="addr_out()" value="<?php echo $address; ?>"></textarea><br></td>
		</tr>
		<tr>
			<td>City: </td>
			<td><input type="text" name="city" id="city" maxlength="30" onblur="city_out()" value="<?php echo $city; ?>"> </input><br></td>
		</tr>
		<tr>
			<td>Pincode: </td>
			<td><input type="text" name="pin" id="pin" pattern="[1-9]{1}[0-9]{5}" title="Enter the correct pincode" onblur="pin_out()" value="<?php echo $pin; ?>"> </input><br></td>
		</tr>
		<tr>
			<td>State: </td>
			<td><input type="text" name="state" id="state" maxlength="30" onblur="state_out()" value="<?php echo $state; ?>"> </input><br></td>
		</tr>
		<tr>
			<td>Country: </td>
			<td><input type="text" name="country" id="country" maxlength="30" onblur="coun_out()" value="<?php echo $nationality; ?>"> </input><br></td>
		</tr>
		</table>
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
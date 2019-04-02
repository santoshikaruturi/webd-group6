<?php 
	require_once("connections.php"); 
	require_once("session.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("admin_login.php");
	
?>

<?php
	#if(isset($_SESSION['username']))
	{
		if(isset($_POST['Update'])){
		$id = $_GET['id'];
		echo $id;
		$query = "SELECT * FROM student_details WHERE id='{$id}'";
		$result = mysqli_query($connection,$query);
		$row2 = mysqli_fetch_assoc($result);
		$ClassX_Board=$row2['ClassX_Board'];
		$ClassX_Percentage=$row2['ClassX_Percentage'];
		$ClassX_YrOfPassing=$row2['ClassX_YrOfPassing'];
		
		$ClassXII_Board=$row2['ClassXII_Board'];
		$ClassXII_Percentage=$row2['ClassXII_Percentage'];
		$ClassXII_YrOfPassing=$row2['ClassXII_YrOfPassing'];
		
		$ug_board=$row2['ug_board'];
		$ug_cgpa=$row2['ug_cgpa'];
		$ug_yrofpassing=$row2['ug_yrofpassing'];
		
		//$course=$row2['btech'];
		$branch=$row2['branch'];
		$regn=$row2['regn'];
		$roll_no=$row2['roll_no'];
		}
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
                        <a class="nav-link" href="student_logout.php">Logout</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link"><i>Hello, <?php echo $_SESSION['username']; ?></i> </a>
					</li>
                </ul>
            </div>
            </div>
        </nav>
	  </section>
		<br>
	  <section class="signup_form">
	   <div class="container">
	    <form name="signup" action="update_acadData_script.php?id=<?php echo $row2['id'] ?>" method="post" onsubmit="return check()">
		<table>
		
			<thead>
					<tr>
						<td><h5>Qualifications:</h5></td>
						<td><br></br></td>
					</tr>
					<tr>
						<!--<td align="center"><b>Sl.No.</b></td> !-->
						<td align="center"><b>Examination</b></td>
						<td align="center"><b>Board</b></td>
						<td align="center"><b>Percentage/CGPA</b></td>
						<td align="center"><b>Year of Passing</b></td>
					</tr>
				</thead>
				<tr>
					<!--<td align="center">1</td> !-->
					<td align="center">Class X</td>
					<td align="center"><input type="text" name="ClassX_Board" value="<?php echo $row2['ClassX_Board'] ;?>" maxlength="30" required /></td>
					<td align="center"><input type="text" name="ClassX_Percentage" value="<?php echo $row2['ClassX_Percentage']; ?>" maxlength="6" placeholder="Percentage" required /></td>
					<td align="center"><input type="text" name="ClassX_YrOfPassing" value="<?php echo $row2['ClassX_YrOfPassing'] ;?>" maxlength="4" required /></td>
				</tr>
				<tr>
					<!--<td align="center">2</td> !-->
					<td align="center">Class XII</td>
					<td align="center"><input type="text" name="ClassXII_Board" value="<?php echo $row2['ClassXII_Board'] ;?>" maxlength="30" required /></td>
					<td align="center"><input type="text" name="ClassXII_Percentage" value="<?php echo $row2['ClassXII_Percentage'] ;?>" maxlength="6" placeholder="Percentage" required /></td>
					<td align="center"><input type="text" name="ClassXII_YrOfPassing" value="<?php echo $row2['ClassXII_YrOfPassing'] ;?>" maxlength="4" required /></td>
				</tr>
				<tr>
					<!--<td align="center">3</td> !-->
					<td align="center">Under Graduation</td>
					<td align="center"><input type="text" name="ug_board" value="<?php echo $row2['ug_board'] ;?>" maxlength="30" required /></td>
					<td align="center"><input type="text" name="ug_cgpa" maxlength="4" value="<?php echo $row2['ug_cgpa'] ;?>" placeholder="CGPA" required /></td>
					<td align="center"><input type="text" name="ug_yrofpassing" value="<?php echo $row2['ug_yrofpassing'] ;?>" maxlength="4" required /></td>
				</tr>
				<!--<tr>
					<td>Courses Applied:</td>
					<td><input type="radio" name="btech" value="btech" required /> B.Tech</td>
				</tr>-->
				<tr>
					<td>Branch:</td>
					<td>
						<select name="branch"  style="width:150px" onblur="branch_out()" >
							<option value="<?php echo $row2['branch'] ?>"><?php echo $row2['branch'] ?></option>
							<option value="BT">Biotechnology</option>
							<option value="CHE">Chemical Engineering</option>
							<option value="CIV">Civil engineering</option>
							<option value="CSE">Computer Science and engineering</option>
							<option value="ECE">Electronics and communication Engineering</option>
							<option value="IT">Information Technology</option>
							<option value="ME">Mechanical engineering</option>
							<option value="MME">Metallurgical and materials engineering</option>
						</select>
					</td>
					<td><br></br></td>
				</tr>
				<tr>
					<td>Registration No:</td>
					<td><input type="text" name="regn" placeholder="eg: 16U10141" value="<?php echo $row2['regn'] ;?>" maxlength="8" pattern="[1-9]{2}[Uu][0-9]{5}" title="eg: 16u10141" required /></td>
				</tr>
				<tr>
					<td>Roll No:</td>
					<td><input type="text" name="roll_no" value="<?php echo $row2['roll_no'] ;?>" maxlength="11" placeholder="eg: 16/IT/01" onclick="getstudentid()" title="eg:16/IT/01" required /></td>
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


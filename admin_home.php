<!Doctype.html>
<?php 
	require_once("connections.php") ;
	require_once("session.php");
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
                        <a class="nav-link" href="admin_logout.php">Logout</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link"><i>Hello, <?php echo $_SESSION['username']; ?></i></a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
	  </section>
		
	  <section>
		<div class="contact-us" class="section scrollspy">
			<img src="img/img1.jpg" alt="logo" width="250px" height="250px"></img>
			<div class="options">
				<button type="button"><a href="admin_accept_delete.php"> Accept or Delete new accounts </a></button>
				<button type="button"><a href=""> Delete existing accounts </a></button>
				<button type="button"><a href=""> Update existing accounts </a></button>
			</div>
			<!--<form action="mail.php" method="post" class="contact-form">
				<div id="contact" class="section scrollspy"><span>Sign Up as Student</span></div>
				<ul>
					<li>
						<label for="name"></label>
						<input type="text" name="name" placeholder="Name" required autocomplete="off" />
					</li>
					<li>
						<label for="email"></label>
						<input type="text" name="email" placeholder="Email" required autocomplete="off" />
					</li>
					<li>
						<label for="name"></label>
						<input type="text" name="password" placeholder="Password" required autocomplete="off" />
					</li>
					<li>
						<label for="name"></label>
						<input type="text" name="contact" placeholder="Contact No." required autocomplete="off" />
					</li>
					<li>
						<label for="name"></label>
						<input type="text" name="branch" placeholder="Branch" required autocomplete="off" />
					</li>
					<li>
						<label for="name"></label>
						<input type="text" name="roll" placeholder="Roll No." required autocomplete="off" />
					</li>
					<li>
						<label for="name"></label>
						<input type="text" name="address" placeholder="Address" required autocomplete="off" />
					</li>
					<li>
						<label for="name"></label>
						<input type="text" name="dob" placeholder="Date of Birth" required autocomplete="off" />
					</li>
					<li>
						<input type="submit" value="Submit" placeholder="Submit" />
					</li>
				</ul>
				</form>-->
		</div>
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
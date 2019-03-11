<?php
	$dbservername="localhost";
	$dbusername="root";
	$dbpassword="12345678";
	#create a database in mysql first then execute this file
	$dbname="student";
	$connection=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname) or die("ERROR, couldn't connect." . mysqli_error($connection));
?>

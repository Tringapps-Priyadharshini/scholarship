<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Register</title>
</head>
<body>
	
	<?php include("link.php");

		session_start();
	$userid=$_SESSION['userid'];?>
	<div class="container mt-3">
		
			<form action="education_details.php" method="post">
				<div class="mb-3">
					<h3 style="color:blue;">Educational Details</h3>
					</div><br>
				<div class="row">
					<div class="col-md-4">
						<label>SSLC School Name:</label>
					     <input type="text" name="sslcschl" class="form-control" required>
					</div>
					<div class="col-md-4">
						<label> Board Name:</label>
					     <input type="text" name="sslcboard" class="form-control" required>
					
				</div><br>
				<div class="row">
					<div class="col-md-4"><br>
						<label>Year Of Passing:</label>
					     <input type="number" name="sslcyear" class="form-control" required>
					</div>
					<div class="col-md-4"><br>
						<label> Board Roll Number:</label>
					     <input type="text" name="sslcrollno" class="form-control" required>
					
				</div><br>
				<div class="row">
					<div class="col-md-4"><br>
						<label>SSLC Mark(In Percentage):</label>
					     <input type="number" name="sslcmark" class="form-control" required><br>
					</div>
				</div><hr class="noscreen">
				<div class="row">
					<div class="col-md-4"><br>
						<label>HSC School Name:</label>
					     <input type="text" name="hscschl" class="form-control" required>
					</div>
					<div class="col-md-4"><br>
						<label> Board Name:</label>
					     <input type="text" name="hscboard" class="form-control" required>
					
				</div><br>
				<div class="row">
					<div class="col-md-4"><br>
						<label>Year Of Passing:</label>
					     <input type="number" name="hscyear" class="form-control" required>
					</div>
					<div class="col-md-4"><br>
						<label> Board Roll Number:</label>
					     <input type="text" name="hscrollno" class="form-control" required>
					
				</div><br>
				<div class="row">
					<div class="col-md-4"><br>
						<label>HSC Mark(In Percentage):</label>
					     <input type="number" name="hscmark" class="form-control" required>
					</div>
				</div>
                <div class="mb-3"><br>
                 <input type="submit" name="next" class="btn btn-primary" value="Next" >
				</div>
				</form></div></body>


<?php

if(isset($_POST['next'])){

$con=mysqli_connect('localhost','root','','scholarship');

	
	 $sslcschl=$_POST['sslcschl'];
	 $sslcboard=$_POST['sslcboard'];
	 $sslcyear=$_POST['sslcyear'];
	 $sslcrollno=$_POST['sslcrollno'];
	 $sslcmark=$_POST['sslcmark'];
	 $hscschl=$_POST['hscschl'];
	 $hscboard=$_POST['hscboard'];
	 $hscyear=$_POST['hscyear'];
	 $hscrollno=$_POST['hscrollno'];
	 $hscmark=$_POST['hscmark'];

	 $sql="INSERT INTO `education_details`(`stuid`,`sslcschl`, `sslcboard`, `sslcyear`, `sslcrollno`, `sslcmark`, `hscschl`, `hscboard`, `hscyear`, `hscrollno`, `hscmark`) VALUES ('$userid','$sslcschl','$sslcboard','$sslcyear',
	 	'$sslcrollno','$sslcmark','$hscschl','$hscboard','$hscyear','$hscrollno','$hscmark')";

	 mysqli_query($con,$sql);

	 echo "<script> alert('Registered');window.location.href='other_details.php'</script>";

	}
	?>
		

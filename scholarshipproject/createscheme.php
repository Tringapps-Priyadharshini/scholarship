<!DOCTYPE html>
<html>
<head>
	<?php include("link.php");?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Scheme</title>
</head>
<body><?php include("adminhome.php");?>

	<div class="container mt-3" style="background-color:pink;">
		<center><h2><font color="blue">CREATE SCHEME</font></h2></center>
		<form action="createscheme.php" method="post">
			<div class="col-md-4">
				<label>Scholarship Name:</label>
				<input type="text" name="name"  class="form-control"required>
			</div>
			<div class="col-md-4">
				<label>Scholarship Type:</label>
				<input type="text" name="type" class="form-control"required>
			</div>
			<div class="col-md-4">
				<label>Scholarship Grade:</label>
				<input type="text" name="grade" class="form-control"required>
			</div>
			<div class="col-md-4">
				<label>Last Date:</label>
				<input type="date" name="time" class="form-control"required>
			</div>
			<div class="col-md-4">
				<label>Required Documents:</label>
				<input type="text" name="documents" class="form-control"required>
			</div>	
			<div class="col-md-4">
				<label>Additional Details(if any):</label>
				<input type="text" name="additional" class="form-control">
			</div>
			<div class="mb-3">
				<br>
				<input type="submit" name="create" class="btn btn-primary" value="Create">
				<input type="submit" name="create" class="btn btn-primary" value="Update">
			</div>
		</form>

  </div>


</body>
</html>

<?php

if(isset($_POST['create'])){

$con=mysqli_connect('localhost','root','','scholarship');

	
	 $name=$_POST['name'];
	 $type=$_POST['type'];
	 $grade=$_POST['grade'];
	 $time=$_POST['time'];
	 $documents=$_POST['documents'];
	 $additional=$_POST['additional'];

	 $sql="INSERT INTO `create_scheme`(`name`, `type`, `grade`, `time`, `documents`, `additonal`) VALUES ('$name','type','$grade','$time','$documents','$additional')";

	 mysqli_query($con,$sql);

	 echo "<script> alert('Scheme Created');</script>";

	}
	if (isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		mysqli_query($conn,"DELETE FROM create_schme where id=$id");
	} 
	?>

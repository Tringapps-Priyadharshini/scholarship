<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Register</title>
</head>
<body>
	<center> <h2><font color="blue">SCHOLARSHIP APPLICATION FORM</font> </h2></center>

	<?php include("link.php");
       session_start();

	
	?>
	<div class="container mt-3">
		
			<form action="personal_details.php" method="post">
				<div class="mb-3">
					<label>Catagory</label>
					<select class="form-select mt-3">
						<option selected>Choose</option>
                        <option value="Community Based Scholarship" name="formcat">Community Based Scholarship</option>
                        <option value="3" name="formcat">Government Scholarship</option>
                        <option value="4" name="formcat">Single parent Scholarship</option>
					</select>			
				</div>
				<div class="row">
					<div class="col">
						<label>Name:</label>
					     <input type="text" name="name" class="form-control" placeholder="In Block letters" required>
					</div>
					<div class="col">
						<label> Father's Name:</label>
					     <input type="text" name="father" class="form-control" required>
					</div>
					<div class="col">
						<label>Mothers's Name:</label>
					     <input type="text" name="mother" class="form-control" required>
					</div>
				</div><br>
				<div class="row">
					<div class="col"><br>Gender:
						<div class="form-check form-check-inline">
							<input type="radio" name="gender" value="Male">
							<label class="form-check-label">Male</label>
						</div>
				          <div class="form-check form-check-inline">
							<input type="radio" name="gender"value="Female">
							<label class="form-check-label">Female</label>
						</div></div>
					<div class="col">
						<label>Date Of Birth:</label>
					     <input type="date" name="dob" class="form-control" required>
					</div>
					<div class="col">
						<label>Religion</label>
					     <input type="text" name="religion" class="form-control" required>
					</div>
				</div><br>

				<div class="row">
					<div class="col"><br>Category:
						<div class="form-check form-check-inline">
							<input type="radio" name="category" value="OC">
							<label class="form-check-label">OC</label>
						</div>
				          <div class="form-check form-check-inline">
							<input type="radio" name="category" value="MBC">
							<label class="form-check-label">MBC</label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" name="category" value="SC">
							<label class="form-check-label">SC</label>
						</div>
					<div class="form-check form-check-inline">
							<input type="radio" name="category"value="Others">
							<label class="form-check-label">Others</label>
						</div></div>
						<div class="col">
						<label>Mobile Number</label>
					     <input type="number" name="mobile" class="form-control" required></div>
					</div><br>
					<div class="row">
					<div class="col">
						<label>Email:</label>
					     <input type="text" name="email" class="form-control" placeholder="ex:abc@gmail.com" required>
					</div>
					<div class="col">
						<label> District:</label>
					     <input type="text" name="district" class="form-control" required>
					</div>
					<div class="col">
						<label> State:</label>
					     <input type="text" name="state" class="form-control" required>
					</div>
				</div><br>
				<div class="row">
					<div class="col mt-3">
						<label>Cuttent Address:</label>
						<textarea class="form-control mt-3" name="address"></textarea>
					</div>
					<div class="col mt-3">
						<label>Permanent Address:</label>
						<textarea class="form-control mt-3" name="paddress"></textarea>
					</div><br><br>
	
				</div>
				<div class="mb-3">
				<input type="submit" name="next" class="btn btn-primary" value="Next">
					</div>
			</form>
			

	</div>
</body>

<?php
if(isset($_POST['next'])){

$con=mysqli_connect('localhost','root','','scholarship');


	$userid=$_SESSION['userid'];
	 $name=$_POST['name'];
	 $father=$_POST['father'];
	 $mother=$_POST['mother'];
	 $gender=$_POST['gender'];
	 $dob=$_POST['dob'];
	 $religion=$_POST['religion'];
	 $category=$_POST['category'];
	 $mobile=$_POST['mobile'];
	 $email=$_POST['email'];
	 $district=$_POST['district'];
	 $state=$_POST['state'];
	 $address=$_POST['address'];
	 $paddress=$_POST['paddress'];

	 //print_r($_POST);

	 $sql="INSERT INTO `personal_details`(`stuid`,`name`, `father`, `mother`, `gender`, `dob`, `religion`, `category`, `mobile`, `email`, `district`, `state`, `address`, `paddress`,`schemeid`) VALUES ('$userid','$name','$father','$mother',
	 	'$gender','$dob','$religion','$category','$mobile','$email','$district','$state','$address','$paddress','$schemeid')";

	 mysqli_query($con,$sql);

	 echo "<script> alert('Registered');window.location.href='education_details.php'</script>";

	}
	?>

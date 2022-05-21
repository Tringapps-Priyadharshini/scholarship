<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Register</title><style>
		.no-border{
			border: 0;
			box-shadow: none;
		}
	</style>
</head>
<body>
	
	<?php include("link.php");?>
	<div class="container mt-3">
		
			<form action="document_details.php" method="post">
				<div class="mb-3">
					<h3 style="color:blue;">Documents</h3>
					</div><br>
				<div class="row">
					<div class="col-md-4">
						<label>Income Certificate:</label>
					     <input type="file" name="income" class="form-control" required>
					</div>
					<div class="col-md-4">
						<label>Aadhar:</label>
					     <input type="file" name="aadhar" class="form-control" required>
					</div>
					
				</div>
				<div class="row"><br>
					<div class="col-md-4"><br>
						<label>Community Certificate:</label>
					     <input type="file" name="community" class="form-control" required>
					</div>
					<div class="col-md-4"><br>
						<label>Bank Passbook:</label>
					     <input type="file" name="bank" class="form-control" required>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-4"><br>
						<label>HSC Marksheet:</label>
					     <input type="file" name="marksheet" class="form-control" required>
					</div>
					
				</div>
				<h4 style="color: red;"><center>Declaration</center></h4>
				<p>I  <input type="text" name="name" class="no-border" placeholder=" Your Name"> S/O or  D/O <input type="text" name="fname" class="no-border" placeholder=" Your father's Name"> hereby declare that the information given in the application form is true as per my knowledge and belief.  I hereby undertake to present the <font color="green">Original documents</font> immediately upon the demand by the concerned authorities of the institude.</p><br>

				<center><div class="row">
					<div class="col-md-4">
					
						 <input type="file" name="sign" class="form-control" required>
						 <label><b>Student Signature</b></label>
					    
				</div>
				<div class="col-md-4">
					
						 <input type="file" name="parentsign" class="form-control" required>
						 <label><b> Parent's Signature</b></label>
					    
				</div></div></center>


				<div class="mb-3"><br>
                 <input type="submit" name="next" class="btn btn-primary" value="Submit" >
				</div>


			</form>
		</div>
	</body>
	</html>
<?php

if(isset($_POST['next'])){
	
		session_start();
	$userid=$_SESSION['userid'];

$con=mysqli_connect('localhost','root','','scholarship');

	$income=$_FILES['income']['name'];
	$incometmp=$_FILES['income']['tmp_name'];
	$aadhar=$_FILES['aadhar']['name'];
	$aadhartmp=$_FILES['aadhar']['tmp_name'];

	move_uploaded_file($incometmp, "uploads/$income");

	$sql="INSERT INTO `document_details`(`income`) VALUES('$income')";
	mysqli_query($con,$sql);

}
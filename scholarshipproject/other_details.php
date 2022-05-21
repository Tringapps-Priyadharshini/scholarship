<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
</head>
<body>

	<?php include('link.php');?>
	<div class="container mt-3">
		
			<form action="other_details.php" method="post">
				<div class="mb-3">
					<h3 style="color:blue;">Eligibility Details</h3>
					</div><br>
				<div class="row">
					<div class="col-md-4">
						<label>Annual Income (IN Rupees)</label>
					     <input type="number" name="income" class="form-control" required>
					</div></div>
					
				<div class="row">
					<div class="col-md-4"><br>
						<label>Father's Occupation</label>
					     <input type="text" name="foccupation" class="form-control" required>
					</div>
					<div class="col-md-4"><br>
						<label>Mother's Occupation</label>
					     <input type="text" name="moccupation" class="form-control" required>
					
				</div></div>
				<div class="row">
					<div class="col-md-4"><br>
						<div class="form-check form-check-inline">
							<input type="radio" name="type" value="Dayscholar">
							<label class="form-check-label">Dayscholar</label>
						</div>
				          <div class="form-check form-check-inline">
							<input type="radio" name="type"value="Hosteller">
							<label class="form-check-label">Hosteller</label>
						</div></div>
					</div>

				<div class="mb-3"><br>
					<h3 style="color:blue;">Bank Details</h3>
					</div><br>
				<div class="row">
					<div class="col-md-4">
						<label>Bank Name:</label>
					     <input type="text" name="bank" class="form-control" required>
					</div>
					
					<div class="col-md-4">
						<label>Branch Name:</label>
					     <input type="text" name="branch" class="form-control" required>
					</div>
					
				<div class="row">
					<div class="col-md-4"><br>
						<label>Account Number:</label>
					     <input type="text" name="accountnum" class="form-control" required>
					</div>
					<div class="col-md-4"><br>
						<label>IFSC Code:</label>
					     <input type="number" name="ifsc" class="form-control" required>
					
				</div></div>
				

				<div class="mb-3"><br>
                 <input type="submit" name="next" class="btn btn-primary" value="Apply" >
				</div>
				
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

	
	 $income=$_POST['income'];
	 $foccupation=$_POST['foccupation'];
	 $moccupation=$_POST['moccupation'];
	 $type=$_POST['type'];
	 $bank=$_POST['bank'];
	 $branch=$_POST['branch'];
	 $accountnum=$_POST['accountnum'];
	 $ifsc=$_POST['ifsc'];
	 
	 $sql="INSERT INTO `other_details`(`stuid`,`income`, `foccupation`, `moccupation`, `type`, `bank`, `branch`, `accountnum`, `ifsc`) VALUES ('$userid','$income','$foccupation','$moccupation','$type','$bank','$branch','$accountnum','$ifsc')";

	 mysqli_query($con,$sql);

	 echo "<script> alert('Applied Successfully');window.location.href='apply.php'</script>";

	}
	?>
		

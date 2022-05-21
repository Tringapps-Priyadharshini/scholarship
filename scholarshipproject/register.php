<?php 
include("link.php");
?>

<h2>Register</h2>
<div class="container col-md-4 border">
	<form action="register.php" method="post">
		<div class="mb-3">
			<label class="form-label"> Username:</label>
		      <input type="text" name="name" class="form-control" required>				
		</div>
		<div class="mb-3">
			<label class="form-label"> Email:</label>
		      <input type="text" name="email" class="form-control" required>				
		</div>
		<div class="mb-3">
			<label class="form-label"> Password:</label>
		      <input type="text" name="password" class="form-control" required>				
		</div>
		
		<div class="mb-3">
		      <input type="submit" name="register" value="Register" class="btn btn-primary">				
		</div>
	</form>
</div>

<?php
$con=mysqli_connect('localhost','root','','scholarship');

	if(isset($_POST['register'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$sql="INSERT INTO `user`(`username`, `email`, `password`,`type`) VALUES ('$name','$email','$password','1')";
		mysqli_query($con,$sql);

		echo "<script>alert('Registered Successfully');window.location.href='home.php'</script>";
	}

		?>
	}
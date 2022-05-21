<?php 
include("link.php");
?>

<h2>Login</h2>
<div class="container col-md-4 border">
	<form action="login.php" method="post">
		
		<div class="mb-3">
			<label class="form-label"> Email:</label>
		      <input type="text" name="email" class="form-control" required>				
		</div>
		<div class="mb-3">
			<label class="form-label"> Password:</label>
		      <input type="text" name="password" class="form-control" required>				
		</div>
		
		<div class="mb-3">
		      <input type="submit" name="login" value="Login" class="btn btn-primary">				
		</div>
	</form>
</div>

<?php
$con=mysqli_connect('localhost','root','','scholarship');

	if(isset($_POST['login'])){
	
		$email=$_POST['email'];
		$password=$_POST['password'];

		$sql="SELECT userid,email,password,type from user where email='$email' and password='$password'";
		$result=mysqli_query($con,$sql);

		if(mysqli_num_rows($result)>0){
			$user=mysqli_fetch_array($result);
			session_start();

			$userid=$user[0];
			$type=$user[3];

			$_SESSION['type']=$type;

			if($type==1){
			$_SESSION['userid']=$userid;
		echo "<script>alert('Login Successfully');window:location.href='userhome.php'</script>";
	}elseif ($type==2) {
		header('Location:adminhome.php');
	}
}
	else{
		echo "Invalid Login";
	}
}
	

		?>
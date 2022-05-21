<?php

		session_start();
		error_reporting(0);
	$userid=$_SESSION['userid'];
	$name=$_SESSION['name'];

$con=mysqli_connect('localhost','root','','scholarship');

if(mysqli_query($con,"INSERT INTO `application`(`stuid`, `status`,`name`) VALUES ('$userid','pending','$name')")){

	echo "<script> alert('Applied Successfully');window.location.href='category.php'</script>";
}else{
	echo "<script>alert('cannot apply')</script>";
}
?>
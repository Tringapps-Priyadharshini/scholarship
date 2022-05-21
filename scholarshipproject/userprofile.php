<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php include('link.php');include('userhome.php');
	session_start();
	$userid=$_SESSION['userid'];
    ?>
    <h2 style="text-align: center;padding: 30px;color: blue;">User Profile</h2>
    <div class="container">
    <table class="table table-secondary table-striped" style="position: relative;top:30px">
    	<thead>
    		<tr>
    			<th scope="col">ID</th>
    			<th scope="col">UserName</th>
    			<th scope="col">Email</th>
    		</tr>
    	</thead><?php
    	 

           $con=mysqli_connect('localhost','root','','scholarship');
           
            $sql="SELECT * FROM user where userid=' ".$userid."'";
            $res=mysqli_query($con,$sql);
            while ($row=mysqli_fetch_array($res)) {


    	?>
    	
    	<tbody>
    		<tr>
    			<td><?=$row['userid']?></td>
    			<td><?=$row['username']?></td>
    			<td><?=$row['email']?></td>
    		</tr>
    		<?php 
            }
            ?>
    	</tbody>
    
</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>scheme</title>
</head>
<body>
    <?php include('link.php'); include('userhome.php')
    ?>
    <h2 style="text-align: center;padding: 30px;color: blue;">Manage Schemes</h2>
    <div class="container">
    <table class="table table-secondary table-striped" style="position: relative;top:30px">
    	<thead>
    		<tr>
    			<th scope="col">ID</th>
    			<th scope="col">Scholarship Name</th>
    			<th scope="col">Scholarship Type</th>
    			<th scope="col">Scholarship Grade</th>
    			<th scope="col">Last Date</th>
    			<th scope="col">Required Documents</th>
    			<th scope="col">Additional Details</th>
    			<th></th>
    		</tr>
    	</thead>
    	<?php 

           $con=mysqli_connect('localhost','root','','scholarship');
            $sql="SELECT * FROM create_scheme";
            $res=mysqli_query($con,$sql);
            while ($row=mysqli_fetch_array($res)) {
            	$_SESSION['id']=$row['id'];
                $_SESSION['name']=$row['name'];

    	?>
    	<tbody>
    		<tr>
    			<td><?=$row['id']?></td>
    			<td><?=$row['name']?></td>
    			<td><?=$row['type']?></td>
    			<td><?=$row['grade']?></td>
    			<td><?=$row['time']?></td>
    			<td><?=$row['documents']?></td>
    			<td><?=$row['additonal']?></td>
    			<td>
    				<a href="personal_details.php?id=<?=$row['id'] ?>" class="btn btn-primary">Apply</a>
    			</td>
    		</tr>
            <?php 
            }
            ?>
    	</tbody>
    </table></div>
</body>
</html>

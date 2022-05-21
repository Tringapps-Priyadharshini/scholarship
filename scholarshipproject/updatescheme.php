<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update scheme</title>
</head>
<body>
    <?php include('link.php'); include('adminhome.php');
    $con=mysqli_connect('localhost','root','','scholarship');

    if (isset($_GET['delete']))
    {
        $id=$_GET['delete'];
        echo $id;
        mysqli_query($con,"DELETE FROM create_scheme where id=$id");
    } 
    
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
            	//$id=$row['id'];

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
    				<a href="createscheme.php?id=<?php $row['id'] ?>" class="btn btn-primary">Edit</a><br><br>
                    <a href="updatescheme.php?delete=<?php $row['id'] ?>" class="btn btn-danger">Delete</a><br><br>
                   <!--  <button type="button" class="btn btn-danger">Delete</button>
                    <a href="createscheme.php?id=<?=$row['id'] ?>" class="btn btn-primary">Delete</a>
 -->
    			</td>
    		</tr>
            <?php 
            }
            ?>
    	</tbody>
    </table></div>
</body>
</html>

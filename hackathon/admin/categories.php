<?php
require_once('__header.php');
if(isset($_GET['delid'])){
	$id=filter($_GET['delid'],$conn);
	$sql="delete from categories where id='".$id."'";
	if(mysqli_query($conn,$sql)){
			echo "<script>alert('Deleted');</script>";

	}
}
?>
<div class="container news">
	<div class="container  "><br><br><center><button class='newsbutton' onclick="window.location.href = 'categoriesadd.php';">ADD Categories</button></center><br><br>
		<table class="table">
				  <thead>
				    <tr>
				   		<th scope="col">#ID</th>
				      <th scope="col">Category Name</th>
				      <th scope="col">Added By</th>
				      <th scope="col">Actions</th>
				      
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  	$sql="Select * from categories ";
					$result=mysqli_query($conn,$sql);
				while ($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row['id']."</td><td>".$row['c_name']."</td><td>".$row['added_by']."</td><td>      <button class='newsbutton' onclick=\"window.location.href = 'categories.php?delid=".$row['id']."';\">Delete</button></td></tr>"; 
				}
				
					?>		    
				  </tbody>
				</table>
				 	

					
				

	</div>
<?php
require_once('__header.php');
if(isset($_GET['delid'])){
	$id=filter($_GET['delid'],$conn);
	$sql="delete from news where id='".$id."'";
	if(mysqli_query($conn,$sql)){
			echo "<script>alert('News Deleted');</script>";

	}
}
?>
<div class="container">
	<div class="container"><br><br><center><button onclick="window.location.href = 'newsadd.php';">ADD NEWS</button></center><br><br>
		<table class="table">
				  <thead>
				    <tr>
				   		<th scope="col">#ID</th>
				      <th scope="col">Title</th>
				      <th scope="col">Publish Date</th>
				      <th scope="col">Actions</th>
				      
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  	$sql="Select * from news ";
					$result=mysqli_query($conn,$sql);
				while ($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['publish_time']."</td><td>      <button onclick=\"window.location.href = 'newsedit.php?id=".$row['id']."';\">Edit</button></td><td>      <button onclick=\"window.location.href = 'news.php?delid=".$row['id']."';\">Delete</button></td></tr>"; 
				}
				
					?>		    
				  </tbody>
				</table>
				 	

					
				

	</div>
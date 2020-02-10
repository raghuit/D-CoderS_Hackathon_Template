
<?php
require_once('__header.php');

if(isset($_GET['delid'])){
	$id=filter($_GET['delid'],$conn);
	$sql="delete from events where id='".$id."'";
	if(mysqli_query($conn,$sql)){
			echo "<script>alert('Event Deleted');</script>";

	}
}



?>



?>
<div class="container news">
	<div class="container"><br><br><center><button class='newsbutton' onclick="window.location.href = 'eventsadd.php';">ADD events</button></center><br><br>
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
				  	$sql="Select * from events";
					$result=mysqli_query($conn,$sql);
				while ($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['publish_time']."</td><td>      <button class='newsbutton' onclick=\"window.location.href = 'eventsedit.php?id=".$row['id']."';\">Edit</button></td><td>      <button class='newsbutton' onclick=\"window.location.href = 'events.php?delid=".$row['id']."';\">Delete</button></td></tr>"; 
				}
				
					?>		    
				  </tbody>
				</table>
				 	

					
				

	</div>

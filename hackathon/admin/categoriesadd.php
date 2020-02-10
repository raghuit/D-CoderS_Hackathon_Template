<?php
require_once('__header.php');
?>
<div class="container addnews">

		<form action="" method="post" >
			<br><br><br>
			<input type="text" name="name" placeholder="Category Name"><br><br><br>

			
			<input type="text" name="by" placeholder="Author"><br><br>

			
			<input type="submit" name="submit" placeholder="Submit">

</div>

<?php

if(isset($_POST['submit'])){
	$name=filter($_POST['name'],$conn);
	$by=filter($_POST['by'],$conn);
	


       $sql="Insert into categories (`c_name`,`added_by`,`active`) values ('".$name."','".$by."','1')";
       if(mysqli_query($conn,$sql)){
       	echo "<script>alert('Added');</script>";
       }
       else{
       	echo mysqli_error($conn);
       }
   		}
?>
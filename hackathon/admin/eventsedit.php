<?php
require_once('__header.php');
$id=filter($_GET['id'],$conn);
$sql="Select * from events where id='".$id."';";
//echo $sql;
if(!$result=mysqli_query($conn,$sql)){
	echo mysqli_error($conn);
}


$row = $result->fetch_assoc();

?>
<div class="container">

		<form action="" method="post" enctype="multipart/form-data">
			<br><br><br>
			<input type="text" name="title" value="<?php echo $row['title'];?>" ><br><br><br>

			<textarea name="body" rows="10" cols="80"><?php echo $row['body'];?></textarea><br><br>

			<input type="submit" name="submit" placeholder="Update">

</div>

<?php

if(isset($_POST['submit'])){
	$title=filter($_POST['title'],$conn);
	$body=filter($_POST['body'],$conn);



       $sql="Update events set  title='$title',body='$body' where id='$id'";
       if(mysqli_query($conn,$sql)){
       	echo "<script>alert('Edit Success');</script>";
       }
       else{
       	echo mysqli_error($conn);
       }
   		}
?>
<?php
require_once('__header.php');
$id=filter($_GET['id'],$conn);
$sql="select * from news where id='".$id.";";
if(!$result=mysqli_query($conn,$sql)){
	echo mysqli_error($conn);
}


$row = $result->fetch_assoc();

?>
<div class="container">

		<form action="" method="post" enctype="multipart/form-data">
			<br><br><br>
			<input type="text" name="title" vaule="<?php echo $row['title'];?>"><br><br><br>

			<textarea name="body" rows="10" cols="80" value="<?php echo $row['body'];?>"></textarea><br><br>Select Category
			<select name="category">

				<?php
				$sql="SELECT * FROM `categories` where active=1";
				$result=mysqli_query($conn,$sql);
				while ($row = $result->fetch_assoc()) {
					echo "<option value='".$row['id']."'>".$row['c_name']."</option>";
				}
				echo "</select>";
				?><br><br>

			<input type="date" name="date"><br><br>

			<input type="text" name="author" value="<?php echo $row['author'];?>"><br><br>

			<input type="file" name="banner_image" placeholder="Image To Upload"><br><br>

			<input type="submit" name="submit" placeholder="Update">

</div>

<?php

if(isset($_POST['submit'])){
	$title=filter($_POST['title'],$conn);
	$body=filter($_POST['body'],$conn);
	$date=filter($_POST['date'],$conn);
	$author=filter($_POST['author'],$conn);
	$category=filter($_POST['category'],$conn);


	$image_name=$_FILES['banner_image']['name'];
       $temp = explode(".", $image_name);
       $newfilename = round(microtime(true)) . '.' . end($temp);
       $imagepath="uploads/".$newfilename;
       move_uploaded_file($_FILES["banner_image"]["tmp_name"],$imagepath);


       $sql="Insert into events (`title`,`body`,`publish_time`,`event_date`,`photo_path`,`author`,`category_id`) values ('".$title."','".$body."','".date("d:m:Y:h:i:sa")."','".$date."','".$newfilename."','".$author."','".$category."')";
       if(mysqli_query($conn,$sql)){
       	echo "<script>alert('News Added');</script>";
       }
       else{
       	echo mysqli_error($conn);
       }
   		}
?>
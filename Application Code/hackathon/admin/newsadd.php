<?php
require_once('__header.php');
?>
<div class="container">

		<form action="" method="post" enctype="multipart/form-data">
			<br><br><br>
			<input type="text" name="title" placeholder="News Title"><br><br><br>

			<textarea name="body" rows="10" cols="80" placeholder="News Body"></textarea><br><br>Select Category
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

			<input type="text" name="author" placeholder="Author"><br><br>

			<input type="file" name="banner_image" placeholder="Image To Upload"><br><br>

			<input type="submit" name="submit" placeholder="Submit">

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


       $sql="Insert into News (`title`,`body`,`publish_time`,`News_date`,`photo_path`,`author`,`category_id`) values ('".$title."','".$body."','".date("d:m:Y:h:i:sa")."','".$date."','".$newfilename."','".$author."','".$category."')";
       if(mysqli_query($conn,$sql)){
       	echo "<script>alert('News Added');</script>";
       }
       else{
       	echo mysqli_error($conn);
       }
   		}
?>
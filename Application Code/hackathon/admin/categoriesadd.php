<?php
require_once('__header.php');
?>
<div class="container">

		<form action="" method="post">
			<br><br><br>
			<input type="text" name="title" placeholder="News Title"><br><br><br>

			<textarea name="News Body" rows="10" cols="80" placeholder="News Body"></textarea><br><br><br>

			<input type="date" name="date"><br><br>

			<input type="text" name="author" placeholder="Author"><br><br>

			<input type="file" name="img" placeholder="Image To Upload"><br><br>

			<input type="submit" name="submit" placeholder="Submit">

</div>

<?php

print_r($_POST);
?>
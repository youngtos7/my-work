<!DOCTYPE html>
<html>
<head>
<title>insert image</title>
</head>
<body>
<form method="POST" action="upload.php" enctype="multipart/form-data">
 File:
 <input type="file" name="myimage">
 <input type="submit" name="submit_image" value="Upload">
</form>


<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("databaseimage") or die(mysql_error();

echo $file = $_FILES['myimage']['tmp_name'];

if(!isset($file))
	echo "Please select an image";
else{
	$image = file_get_contents($_FILES['myimage']['tmp_name']);
	$image_name = $_FILES['myimage']['name'];
}
?>




</body>
</html>
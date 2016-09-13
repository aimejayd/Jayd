<?php 
if(isset($_POST['submit']))
{
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES["file"]["tmp_name"],"pic/" . $_FILES["file"]["name"]);
$connect=mysqli_connect("localhost","root","","matsiko");
$insert=mysqli_query($connect,"INSERT INTO jayd(id,img) VALUES('$file')");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
<form action="ivan.php" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" value="submit" name="submit">

</form>
</body>
</html>
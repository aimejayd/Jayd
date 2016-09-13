<!DOCTYPE html>
<html>
<head>
	<title>Upload an image</title>
</head>
<body>
<form action="index.php" method="post" enctype="multipart/form-data">
file:
<input type="file" name="image"> <input type="submit" value="upload">
	
</form>

<?php
error_reporting(1);
//connect to database
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("databaseimage") or die(mysql_error());
// file properties
 $file = $_FILES['image']['tmp_name'];
if (!isset($file))
	echo "Please select an image.";

else
{
$image = addcslashes( file_get_contents( $_FILES['image']['tmp_name']));
$image_name = addcslashes ( $_FILES ['image'] ['name']);
$image_size = getimagesize($_FILES['image'][tmp_name]);

if($image_size==FALSE)
	echo "That's not an  image. ";
else
{
if (!$insert = mysql_query("INSERT INTO store VALUES('','$image_name','$image') "))
echo "Problem uploading image.";
else 
{
	$lastid = mysql_insert_id();
	echo "Image uploaded.<p /> Your image: <p /><img src=get.php?id=$lastid>";
}

} 

}

?>


</body>
</html>
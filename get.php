<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("databaseimage") or die(mysql_error());

$id = addcslashes( $_REQUEST['id']);
$image=mysql_query("SELECT * FROM store where id=$id");
$image=mysql_fetch_assoc($image);
$image=$image['image'];

header("content-type: image/JPG");

echo $image;

?>
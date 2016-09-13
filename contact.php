<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
mysql_connect("localhost","root","")or
die("NO CONNECTION");
mysql_select_db("insurance")or 
die("DATABASE SELECTION FAIL");
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['telephone'];
$d=$_POST['subject'];
if(empty($a) || empty($b) || empty($c))
{
echo"<script>alert('plz can you fill all fiels given')</script>";
echo "<script> window.open('contact1.html','_self')</script>";
echo "<script> window.open('contact1.html','_self')</script>"; 
} 
else
{
$insertion =mysql_query("insert into tbl_contacts(name,email,telephone,subject)values('$a','$b','$c','$d')")or die(mysql_error());
echo"WELCOME TO REGISTERATION IN DATABASE";
echo"<script>alert('DATA ARE SAVED IN DATABASE')</script>";
echo "<script> window.open('contact1.html','_self')</script>";
}
?>
</body>
</html>

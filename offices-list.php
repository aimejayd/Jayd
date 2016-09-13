<?php
error_reporting(1);
session_start();
require_once('database.php');
require_once('library.php');
isUser();
$sql = "SELECT *
		FROM tbl_offices";
$result = dbQuery($sql);		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">
<?php include("header.php"); ?>
	</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
	<script language="JavaScript">
var checkflag = "false";
function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong><font face="euphemia">OFFICE DETAILLS </font></strong></div></td>
    </tr>
  </tbody></table>

 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
      <td class="newtext" bgcolor="#EDEDED" width="20%"><font face="euphemia">Office Name</font> </td>
      <td class="newtext" bgcolor="#EDEDED" width="20%"><font face="euphemia">Address</font></td>
	  <td class="newtext" bgcolor="#EDEDED" width="10%"><font face="euphemia">City</font></td>
      <td class="newtext" bgcolor="#EDEDED" width="15%"><font face="euphemia">Phone Number</font></td>
      <td class="newtext" bgcolor="#EDEDED" width="20%"><font face="euphemia">Office Timing</font></td>
      <td class="newtext" bgcolor="#EDEDED" width="15%"><font face="euphemia">Contact Person</font></td>
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gray';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" style="height:20px;">
      <td class="gentxt"><font face="euphemia"><?php echo $off_name; ?></font></td>
      <td class="gentxt"><font face="euphemia"><?php echo $address; ?></font></td>
      <td class="gentxt"><font face="euphemia"><?php echo $city; ?></font></td>
      <td class="gentxt"><font face="euphemia"><?php echo $ph_no; ?></font></td>
      <td class="gentxt"><font face="euphemia"><?php echo $office_time; ?></font></td>
	  <td class="gentxt"><font face="euphemia"><?php echo $contact_person; ?></font></td>
    </tr>
    <?php
	} //while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>
  <tr>
  <td colspan="2" class="aalpha" bgcolor="009148" height="25"><div align="center"><font face="euphemia"><font color="ffffff"></font></FONT></tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
   <td width="900"><img src="home_files/footer.jpg" ></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>
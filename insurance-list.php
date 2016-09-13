<?php
error_reporting(1);
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT cid, cons_no, clnt_name, Reference_Number, iss_date, exp_date, time, amount, type, status
		FROM tbl_clients
		WHERE status != 'Approved'
		ORDER BY cid DESC 
		LIMIT 0, 20";
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
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong><font face="euphemia"><font size="2.9">Clients Insurance Information</font></font> </strong></div></td>
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
      <td class="newtext" bgcolor="#EDEDED" width="6%"><div align="center"><font face="euphemia">Edit</font></div></td>
      <td class="newtext" bgcolor="#EDEDED" width="10%"><font face="euphemia">Consignment No</font> </td>
      <td class="newtext" bgcolor="#EDEDED" width="7%"><font face="euphemia">Client</font></td>
      <td class="newtext" bgcolor="#EDEDED" width="15%"><font face="euphemia">Reference Number</font></td>
      <td class="newtext" bgcolor="#EDEDED" width="18%"><font face="euphemia">Issued Date / Expired Date</font></td>
	  <td class="newtext" bgcolor="#EDEDED" width="10%"><font face="euphemia">Time</font></td>
	  <td class="newtext" bgcolor="#EDEDED" width="11%"><font face="euphemia">Amount</font></td>
	  <td class="newtext" bgcolor="#EDEDED" WIDTH="7%"><font face="euphemia">Type</font></td>
      <td class="newtext" bgcolor="#EDEDED" width="9%"><font face="euphemia">Status</font></td>
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gray';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
	
      <td class="gentxt" align="center">
	  <a href="edit-insurance.php?cid=<?php echo $cid; ?>">
	  <img src="images/edit_icon.gif" border="0" height="20" width="20"></a>
	  </td>
      <td class="gentxt"><font face="euphemia"><?php echo $cons_no; ?></font></td>
      <td class="gentxt"><font face="euphemia"><?php echo $clnt_name; ?></font></td>
      <td class="gentxt"><font face="euphemia"><?php echo $Reference_Number; ?></font></td>
      <td class="gentxt"><font face="euphemia"><?php echo $iss_date; ?> - <?php echo $exp_date; ?></font></td>
	  <td class="gentxt"><font face="euphemia"><?php echo $time; ?></font> </td>
	  <td class="gentxt"><font face="euphemia"><?php echo $amount; ?></font></td>
	  <td class="gentxt"><font face="euphemia"><?php echo $type; ?></font></td>
      <td class="gentxt"><font face="euphemia"><?php echo $status; ?></font></td>
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
    <td colspan="2" class="aalpha" bgcolor="009148" height="25"><div align="center"><font face="euphemia"><font color="ffffff"></font></FONT>
  <tbody><tr>
    <td width="900"><img src="home_files/footer.jpg" ></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>
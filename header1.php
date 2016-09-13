<?php 
//session_start();
?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>
  <tr>
    <td>
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>

<table border="0" cellpadding="0" cellspacing="0" width="900">
<tbody><tr>
<td colspan="15"> <a href="index.php">
<img  src="images/trheader.jpg" height="109" width="900"></a></td>
</tr>
<!--<tr bgcolor="#2284d5">
<td height="30" width="110"><div align="center"><span class="headtext13 style2"><strong><font face="euphemia">INSURANCE:</FONT></strong></span></div></td>
<td height="30" width="83"><div class="lowerstyle" align="center"> <a href="add-insurance.php"><FONT FACE="EUPHEMIA">Add</FONT></a></div></td>
<td width="4"><div align="left">|</div></td>
<td height="30" width="74"> <div class="lowerstyle" align="center"><a href="insurance-list.php"><FONT FACE="EUPHEMIA">Update</FONT>  </a></div></td>
<td width="4"><div align="left">|</div></td>
<td width="89"><div class="lowerstyle" align="center">
  <div align="center"><a href="search-edit.php"><FONT FACE="EUPHEMIA">Search &amp; Edit </FONT></a></div>
</div></td>
<td width="3"><div align="left">|</div></td>
<td height="30" width="96"><div align="center"><span class="headtext13 style2"><strong><FONT FACE="EUPHEMIA">REPORTS</FONT></strong></span><span class="heading"><strong> : </strong></span></div></td>
<td height="30" width="83"><div class="lowerstyle" align="center"><a href="approved-list.php"><FONT FACE="EUPHEMIA">Approved</font> </a> </div></td>
<td width="3">|</td>
<td width="76"><div class="lowerstyle" align="center"><a href="waiting-list.php"><font face="euphemia">Waiting</font> </a> </div></td>
<td width="3">&nbsp;</td>
<td width="3">|</td>
<td width="76"><div class="lowerstyle" align="center"><a href="approved-list.php"><font face="euphemia">Deleting</font> </a> </div></td>
<td width="3">&nbsp;</td>
<td width="71"><div class="lowerstyle" align="center"><a href="http://tracking4web.com/admin/report_statuswise.php?status=all"></a> </div></td>
<td width="3"></td>
<td height="30" width="80">

</td>
</tr>

</tbody></table>

<?php
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?>
<table border="0" cellpadding="0" cellspacing="0" width="900">
  <tbody><tr style="height:25px;">
    <td bgcolor="#E2E2E2" width="4">&nbsp;</td>
    <td bgcolor="#E2E2E2" width="240">&nbsp;<b><font face="euphemia"><strong><font size="2.8">Admin Menu</font></font></strong></b></td>
    <td bgcolor="#E2E2E2" width="130"><div align="center"><a href="offices-list.php" class="headtext13"><font face="euphemia"><font size="2.5">Office Details</font></font></a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	
    <td bgcolor="#E2E2E2" width="100"><div align="center"><a href="add-office.php" class="headtext13"><font face="euphemia"><font size="2.5">Add New Office</font></font></a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	<td bgcolor="#E2E2E2" width="162"><div align="center"><a href="manager-list.php" class="headtext13"><font face="euphemia"><font size="2.5">Manager Details</font></font></a> </div></td>
    <td bgcolor="#E2E2E2" width="7">|</td>
    <td bgcolor="#E2E2E2" width="125"><div align="center"><a href="add-new-officer.php" class="headtext13"><font face="euphemia"><font size="2.5">Add New Manager</font></font></a></div></td>
  </tr>
</tbody>
</table>
<?php 
}
?>
<table border="0" cellpadding="0" cellspacing="0" width="900">
  <tbody><tr style="height:25px;">
    <td bgcolor="#99CCFF" width="4">&nbsp;</td>
    <td bgcolor="#99CCFF" width="350">&nbsp;</td>
    <td bgcolor="#99CCFF" width="130"><div align="center"><a href="admin.php" class="headtext13"></a></div></td>
    <td bgcolor="#99CCFF" width="10"></td>
    <td bgcolor="#99CCFF" width="162"><div align="center"><a href="admin.php" class="headtext13"><font face="euphemia">Home</font></a> </div></td>
    <td bgcolor="#99CCFF" width="7">|</td>
    <td bgcolor="#99CCFF" width="125"><div align="center"><a href="process.php?action=logOut" class="headtext13"><font face="euphemia">Logout</font></a></div></td>
  </tr>-->
</tbody>
</table>
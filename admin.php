<?php
error_reporting(1);
session_start();
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>:: ONLINE INSURANCE MANAGEMENT SYTEM ::</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include("header.php");
?>

	
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"> <br>
        <br>
        <table bgcolor="#ECECEC" border="0" cellpadding="2" cellspacing="2" align="center" width="50%">
        <tbody><tr>
          <td class="Partext1" bgcolor="#EEEEEE"><div align="left"><strong><FONT FACE="EUPHEMIA">Insurance Management System</font> </strong></div></td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="add-insurance.php" class="REDLink"><font face="euphemia">Add Insurance</font></a></div></td>
        </tr>
                <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="insurance-list.php" class="REDLink"><font face="euphemia">List of Insurances</font></a></div></td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="report.php" class="REDLink"><font face="euphemia">Report</font></a></div></td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="process.php?action=logOut" class="REDLink"><font face="euphemia">Logout</font></a></div></td>
        </tr>
      </tbody></table>
            <br>
          <br>
          <br>      
          <br>
    </div></td>
  </tr>
  <tr>
    <td>
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
   <td colspan="2" class="aalpha" bgcolor="009148" height="25"><div align="center"><font face="euphemia"><font color="ffffff"></font></FONT></tr>
   <tr>
      <td width="900"><img src="home_files/footer.jpg" ></td>
	</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>
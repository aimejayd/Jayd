<?php
error_reporting(1);
session_start();
require_once('database.php');
require_once('library.php');
isUser();
$cid= (int)$_GET['cid'];

$sql = "SELECT *
		FROM tbl_clients
		WHERE cid = $cid";
$sql_1 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);		
$result_1 = dbQuery($sql_1);
while($data = dbFetchAssoc($result)) {
extract($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
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
	
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>

  <table border="0" align="center" width="98%">

    <tbody><tr>

      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong><font face="euphemia"><font size="2.9">Edit Client Information</font></font></strong></td>

    </tr>

  </tbody></table>



  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%"><div align="left" class="style3"><font face="euphemia">Client Name : </font></div></td>

            <td width="45%"><div align="left" class="style3">

              <font face="euphemia"><?php echo $clnt_name; ?></font>
            </div></td>

          </tr>

          <tr>

            <td><div align="left" class="style3"><font face="euphemia">Client Phone :</font> </div></td>

            <td><div align="left" class="style3">

              <font face="euphemia"><?php echo $clnt_phone; ?></font>
            </div></td>
          </tr>

          <tr>

            <td><div align="left" class="style3"><font face="euphemia">Client Address : </font></div></td>

            <td><div align="left" class="style3">
			<font face="euphemia"><?php echo $clnt_add; ?></font>
			</div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" bgcolor="#FFFFFF">
	  <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%" class="style3"><div align="left"><font face="euphemia">Officer Name : </font></div></td>

            <td width="45%" class="style3"><div align="left"><font face="euphemia"><?php echo $off_name; ?></font></div></td>

          </tr>

          <tr>

            <td class="style3"><div align="left"><font face="euphemia">Officer Phone : </font></div></td>

            <td class="style3"><div align="left">
			<font face="euphemia"><?php echo $off_phone; ?></font>
            </div></td>
          </tr>

          <tr>

            <td class="style3"><div align="left"><font face="euphemia">Officer Address : </font></div></td>

            <td class="style3"><div align="left">
			<font face="euphemia"><?php echo $off_add; ?></font>
            </div></td>
          </tr>
        </tbody></table>
      </div></td>

    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" width="336"><font face="euphemia">Consignment No  :</font> </td> 

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><font face="euphemia"><?php echo $cons_no; ?><font></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right"><font face="euphemia">Type of Insurance  :</font></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $type; ?><font>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right"><font face="euphemia">Amount :</font></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $amount; ?></FONT>&nbsp;(FRW)</td>
    </tr>

    <tr>

     <!-- <td class="style3" bgcolor="#F3F3F3" align="right"><font face="euphemia">Invoice no  :</font></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $invoice_no; ?>&nbsp;</font></td>
    </tr>-->

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right"><font face="euphemia">Booking Mode :</font></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $book_mode; ?></font>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right"><font face="euphemia">VAT : </FONT></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $vat; ?></font>&nbsp;18%.</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right"><font face="euphemia">Mode :</font> </td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $mode; ?></font></td>
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right"><font face="euphemia">Issued Date / Expired Date  :</font></td> 

      <td class="style3" bgcolor="#FFFFFF">

        <font face="euphemia"><?php echo $iss_date; ?></font> -<span class="gentxt">
<font face="euphemia"><?php echo $exp_date; ?></font>
        </span> </td> 
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right"><font face="euphemia">Status :</font></td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<font face="euphemia"><?php echo $status; ?></font></td> 
    </tr> 

     

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" valign="top"><font face="euphemia">Comments :</font></td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<font face="euphemia"><?php echo $comments; ?></font></td> 
    </tr> 
  </tbody></table> 

  <span class="Partext1"><br>
   </span><span class="Partext1"><br>

  <br>  

  </span>

  <form action="process.php?action=update-status" method="post" name="frmInsurance" id="frmInsurance"> 

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

    <tbody><tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div class="Partext1" align="center"><strong><font face="euphemia">UPDATE STATUS </font></strong>

</div></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"></td>
    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%"><font face="euphemia">New Location</font></td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

        <select name="OfficeName">
			<font face="euphemia"><?php 
			while($data = dbFetchAssoc($result_1)){
			?></font>
			<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
			<?php 
			}//while
			?>
	</select>      </td>
    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><font face="euphemia">New Status: </font></td>

      <td class="Partext1" bgcolor="#FFFFFF" width="26%">

	  






<select name="status">

<option value="Approved"><font face="euphemia">Approved</font></option>

<option value="Waiting"><font face="euphemia">Waiting</font></option>

<option value="Onhold"><font face="euphemia">Onhold</font></option>

<option value="Rejected">Rejected</option>

</select>

<br></td>

      <td class="Partext1" bgcolor="#FFFFFF" width="58%"><div align="center">
	  <a href="process.php?action=delete&cid=<?php echo $cid; ?>"><font face="euphemia">Delete this insurance document???</font> <span class="style1"><font face="euphemia">DELETE </FONT></span></a><span class="style1"></span></div></td>
    </tr>

    <tr>

      <td bgcolor="#FFFFFF" align="right"><span class="Partext1"><font face="euphemia">Comments:</font></span></td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
	  <textarea name="comments" cols="40" rows="3" id="comments"></textarea></td>
    </tr>

    

    <tr>

      <td bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

       <input name="submit" value="Submit" type="submit">

          <input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">

          <input name="cons_no" id="cons_no" value="<?php echo $cons_no; ?>" type="hidden">      </td>
    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div align="center">


      </div></td>
      </tr>
  </tbody></table>

  <br>

  </form>    </td>

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
<?php } 
?>
<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_clients
		WHERE cons_no = '$cons'";
		
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
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

      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong><font face="euphemia">Client Information</font> </strong></td>

    </tr>

  </tbody></table>



  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%"><div align="left" class="style3"><font face="euphemia"></font>Client Name :</font> </div></td>

            <td width="45%"><div align="left" class="style3">

              <font face="euphemia"><?php echo $clnt_name; ?></font>
            </div></td>

          </tr>

          <tr>

            <td><div align="left" class="style3"><font face="euphemia">Client Phone : </font></div></td>

            <td><div align="left" class="style3">

              <font face="euphemia"><?php echo $clnt_phone; ?></font>
            </div></td>
          </tr>

          <tr>

            <td><div align="left" class="style3"><font face="euphemia">Client Address :</font> </div></td>

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

            <td width="55%" class="style3"><div align="left"><font face="euphemia">Officer Name :</font> </div></td>

            <td width="45%" class="style3"><div align="left"><font face="euphemia">UMWARI Ernestine</font></div></td>

          </tr>

          <tr>

            <td class="style3"><div align="left"><font face="euphemia">Officer Phone : </font></div></td>

            <td class="style3"><div align="left">
			<font face="euphemia">(250)788303060</font>
            </div></td>
          </tr>

          <tr>

            <td class="style3"><div align="left"><font face="euphemia">Officer Address :</font> </div></td>

            <td class="style3"><div align="left">
			<font face="euphemia">OIMS-KIGALI Headquarters</font>
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

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><font face="euphemia"><?php echo $cons_no; ?></font></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right"> <font face="euphemia">Type of Insurance  :</font></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $type; ?></font>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right"><font face="euphemia">Amount :</font></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $amount; ?></font>&nbsp;RWF</td>
    </tr>

    <!--<tr>

      <td class="style3" bgcolor="#F3F3F3" align="right"><font face="euphemia">Invoice no  :</font></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $invoice_no; ?></font>&nbsp;</td>
    </tr>-->

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right"><font face="euphemia">Booking Mode :</font></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $book_mode; ?></font>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right"><font face="euphemia">VAT : </FONT></td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $vat; ?>%.</font></td>
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

      <td class="style3" bgcolor="#F3F3F3" align="right"><font face="euphemia">Time :</font> </td>

      <td class="style3" bgcolor="#FFFFFF"><font face="euphemia"><?php echo $time; ?></font></td>
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

  <p>&nbsp;</p></td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">&nbsp;</td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>
<?php }//while
}//if
else {
echo 'In else....';
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




  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

  <span class="Partext1"><br>

   
   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>
<font face="euphemia">Consignment Number</font> <font color="#FF0000"><font face="euphemia">&nbsp;<?php echo $cons; ?></font></font><font face="euphemia"> not found. Please verify the Number.</font><br/>
<a href="search-edit.php"><font face="euphemia">Go Back</font></a><font face="euphemia"> to Search Again.</font></h3>
       </tr>

        </tbody></table>


</td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="009148" height="40" width="476">&nbsp;</td>
    <td bgcolor="009148" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>



<?php 
}//else
?>
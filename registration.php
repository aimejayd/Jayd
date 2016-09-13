<?php 
error_reporting(1);
session_start();
require_once('library.php');
$rand = get_rand_id(8);
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("insurance") or die(mysql_error());
// file properties
 $file = $_FILES['image']['tmp_name'];
if (isset($file))

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
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Registration</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
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
<link type="text/css" rel="stylesheet" href="css/style.htm">
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

<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	font-weight: bold;
	color: #003399;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script> 
</head>

<body>
<?php include("header1.php"); ?>

	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF">
	
	
<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 
  <tbody><tr> 

    <td id="ds_calclass"> </td> 
  </tr> 
</tbody></table> 
<script type="text/javascript">
// <!-- <![CDATA[

// Project: Dynamic Date Selector (DtTvB) - 2006-03-16
// Script featured on JavaScript Kit- http://www.javascriptkit.com
// Code begin...
// Set the initial date.
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(id) {
	return document.getElementById(id);
}

// Get the left and the top of the element.
function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';
	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
	// Define width the day row.
}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}

// This one draws calendar...
function ds_draw_calendar(m, y) {
	// First clean the output buffer.
	ds_ob_clean();
	// Here we go, do the header
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	// Make a date object.
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;
	// Start the first week
	ds_echo (ds_template_new_week());
	// If sunday is not the first day of the month, make a blank cell...
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
		// Today is sunday, make a new week.
		// If this sunday is the first day of the month,
		// we've made a new row for you already.
		if (j == 0 && !first_loop) {
			// New week!!
			ds_echo (ds_template_new_week());
		}
		// Make a row of that day!
		ds_echo (ds_template_day(i + 1, m, y));
		// This is not first loop anymore...
		first_loop = 0;
		// What is the next day?
		j ++;
		j %= 7;

	}
	// Do the footer
	ds_echo (ds_template_main_below());
	// And let's display..
	ds_ob_flush();
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// A function to show the calendar.
// When user click on the date, it will set the content of t.
function ds_sh(t) {
	// Set the element to set...
	ds_element = t;
	// Make a new date, and set the current month and year.
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	// Draw the calendar
	ds_draw_calendar(ds_c_month, ds_c_year);
	// To change the position properly, we must show it first.
	ds_ce.style.display = '';
	// Move the calendar container!
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// Hide the calendar.
function ds_hi() {
	ds_ce.style.display = 'none';
}

// Moves to the next month...
function ds_nm() {
	// Increase the current month.
	ds_c_month ++;
	// We have passed December, let's go to the next year.
	// Increase the current year, and set the current month to January.
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year++;
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous month...
function ds_pm() {
	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
	// We have passed January, let's go back to the previous year.
	// Decrease the current year, and set the current month to December.
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the next year...
function ds_ny() {
	// Increase the current year.
	ds_c_year++;
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous year...
function ds_py() {
	// Decrease the current year.
	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Format the date to output.
function ds_format_date(d, m, y) {
	// 2 digits month.
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	// 2 digits day.
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	// YYYY-MM-DD
	return d2 + '/' + m2 + '/'+ y;
}

// When the user clicks the day.
function ds_onclick(d, m, y) {
	// Hide the calendar.
	ds_hi();
	// Set the value of it, if we can.
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
	// Maybe we want to set the HTML in it.
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	// I don't know how should we display it, just alert it to user.
	} else {
		alert (ds_format_date(d, m, y));
	}
}

function getSelected(opt)
 {
 
 	var opt=document.frmExport.opt;
            for (var intLoop = 0; intLoop < opt.length; intLoop++)
			 {
			  if (!(opt.options[intLoop].selected))
			   {
			   		alert("Select any one field!");
					return false;
               }
		    }
			return true;           
  }

// And here is the end.

// ]]> -->
</script>
 <br/>
  <table border="0" align="center" width="100%">
    <tbody>
	<tr>
      <td class="Partext1" bgcolor="F9F5F5" align="center"><span class="headtext13">CUSTOMER INFORMATION </span></td>
    </tr>
    
  </tbody>
  </table>
   <p align="right"><a href="index.php" target="_self"> <u> Back </u> <font face="euphemia"><font color="ffffff"></font></FONT> </a></p>
<form action="process.php?action=add-reg" method="post" name="frmInformation" > 
<div class="gentxt" align="right">
<table border="0" cellpadding="1" cellspacing="1" align="center" width="83%">
<tbody><tr>
<td width="60%">&nbsp;</td>
<td width="40%"><div align="right"></div></td>
</tr>
</tbody></table>
</div>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
  <tbody><tr>
    <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
    <td background="images/boxtopBG.gif" width="734"></td>
    <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
  </tr>
  <tr>
    <td background="images/boxleftBG.gif"></td>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
      <tbody><tr>
        <td colspan="2" height="4"></td>
      </tr>
      <tr>
        <td height="18">&nbsp;</td>
      </tr>
      <tr>
        <td><table class="Partext1" cellpadding="2" cellspacing="2" align="center" width="100%">
          <tbody><tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="gentxt" align="right">
                <div class="headtext13" align="left"><strong>Client info : </strong></div>
            </div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right" width="138">Client Name   :</td>
            <td>&nbsp;</td>
            <td>
			<input name="Clientname"  maxlength="100" size="40" type="TEXT">
                </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone   :</td>
            <td>&nbsp;</td>
            <td><input name="Clientphone" id="Clientphone" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Address   :</td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Clientaddress" cols="27" rows="2" id="Clientaddress"></textarea>
              *</span></td>
          </tr>
          <form action="photo.php" method="post" enctype="multipart/form-data">
<tr>

            <td class="TrackMediumBlue" align="right">Photo   :</td>
            <td>&nbsp;</td>
            <td> Photo: <input type="file" name="image"> </td>
          </tr></form>
          
          <tr>

            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <!--<td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Officer  info : </strong></div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Officer Name : </td>
            <td>&nbsp;</td>
            <td><input name="Officername" id="Officername" maxlength="100" size="40" type="TEXT">
                <span class="REDLink">*</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone : </td>
            <td>&nbsp;</td>
            <td><input name="Officerphone" id="Officerphone" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right"> Address: : </td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Officeraddress" cols="27" rows="2" id="Officeraddress"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>-->
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Insurance   info : </strong></div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Consignment No  : </td>
            <td width="13">&nbsp;</td>
            <td width="477"><input name="ConsignmentNo"  value="<?php echo strtoupper($rand); ?>" id="ConsignmentNo"  readonly="true" maxlength="13" size="40"  type="TEXT">
                <span class="REDLink">* <font face="euphemia"><font color="Red">Please write down ConsignmentNo as your Document Identification</font></font></span> </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Type of Insurance  :</td>
            <td>&nbsp;</td>
            <td><select id="Instype" name="Instype">
                <option value="Home" selected="selected">Home</option>
                <option value="Personal">Personal</option>
                <option value="Group">Group</option>
				<option value="Education">Education</option>
				<option value="Travel">Travel</option>
				<option value="Retirement">Retirement</option>
            </select>
			</td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Amount :  </td>
            <td>&nbsp;</td>

            <td><select id="Amount" name="Amount">
                <option value=" 450.000" selected="selected">450.000 </option>
                <option value="500.000">Personal </option>
                <option value="650.000"> Group </option>
				<option value="700.000"> Education</option>
				<option value="980.000 "> Travel</option>
				<option value="210.000"> Retirement</option>
            </select>
              (FRW) <font face="euphemia"><font color="RED">Refer to Price on home page</FONT></font></td>
          </tr>
         <!--<tr>
            <td class="TrackMediumBlue" align="right">Invoice no  :</td>
            <td>&nbsp;</td>
            <td><input name="Invoiceno" id="Invoiceno" size="40" maxlength="20" onKeyUp="check_phone('Invoiceno')" type="TEXT"></td>
          </tr>-->
          <tr>
            <td class="TrackMediumBlue" align="right">Indentification Number  :</td>
            <td>&nbsp;</td>
            <td><input name="Indnbr" id="Indnbr" maxlength="50" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Booking Mode :</td>
            <td>&nbsp;</td>
            <td><select name="Bookingmode" id="Bookingmode">
                <option selected="selected" value="Cash">Cash</option>
                <option value="Wire">Wire</option>
                <option value="Card">Card</option>
            </select></td>
          </tr>
          <!-- <tr>
            <td class="TrackMediumBlue" align="right">Vat : </td>
            <td>&nbsp;</td>
            <td><input id="Vat" size="10" maxlength="2" name="Vat">(18%)</td>
          </tr> -->
          <!--<tr>
            <td class="TrackMediumBlue" align="right">Mode : </td>
            <td>&nbsp;</td>
            <td><select name="Mode" id="Mode">
                <option selected="selected" value="Premium">Premium</option>
                <option value="Gold">Gold</option>
                <option value="Sliver">Sliver</option>
				<option value="Platinum">Platinum</option> 
            </select></td>
          </tr>-->
          <tr>
            <td class="TrackMediumBlue" align="right">Time : </td>
            <td width="13">&nbsp;</td>
            <td width="477"><input name="Time"  value="<?php echo date("h:i:s:A"); ?>" id="Time"  readonly="true" maxlength="13" size="10"  type="TEXT">
          </tr>
          <!--<tr>
            <td class="TrackNormalBlue" align="right">Destination Office:</td>
            <td>&nbsp;</td>
            <td><input name="Destination" id="Destination" maxlength="50" size="40" type="TEXT">
                <span class="REDLink">*</span> </td>

          </tr>-->
          <tr>
            <td class="TrackNormalBlue" align="right">Reg Date  :</td>
            <td>&nbsp;</td>
            <td><input name="Issueddate" id="Issueddate" readonly="True" style="cursor: text;" onClick="ds_sh(this);" maxlength="15" type="text">
                <span class="REDLink">* <FONT FACE="EUPHEMIA"><FONT COLOR="RED">Choose current date</FONT></FONT></span> </td>
          </tr>
		  <tr>
            <td class="TrackNormalBlue" align="right">Expired Date  :</td>
            <td>&nbsp;</td>
            <td><input name="Expireddate" id="Expireddate" readonly="True" style="cursor: text;" onClick="ds_sh(this);" maxlength="15" type="TEXT">
                <span class="REDLink">* <font face="red"><font color="red">Your insurance will expiry in one year / choose same date and month as issued date but different year</font></font></span> </td>
          </tr>
          <!--<tr>
            <td class="TrackNormalBlue" align="right" valign="top">Pickup Time  :</td>
            <td>&nbsp;</td>
            <td><input name="Pickuptime" id="Pickuptime" maxlength="50" size="20" type="TEXT"></td>
          </tr>-->
          <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Status :</td>
            <td>&nbsp;</td>
            <td><select name="Status" id="Status">
                <option selected="selected" value="Unapproved">Unapproved</option>
            </select></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Comments :</td>
            <td>&nbsp;</td>
            <td><textarea name="Comments" cols="40" rows="4" id="Comments"></textarea></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="Submit" type="submit" onClick="MM_validateForm('Clientname','','R','Clientphone','','R','Officername','','R','Officerphone','','R','ConsignmentNo','','R','Amount','','R','Invoiceno','','R','Indnbr','','RisNum','Vat','','R','Time','','R','Clientaddress','','R','','','RisNum','Vat','','R');return document.MM_returnValue" value="SUBMIT"></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
    <td background="images/boxrightBG.gif"></td>
  </tr>
  <tr>
    <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
    <td background="images/boxbtmBG.gif" width="734"></td>
    <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
  </tr>
</tbody></table>
<br>
</form> 
	</td>
  </tr>

 <td colspan="2" class="aalpha" bgcolor="009148" height="25"><div align="center"><font face="euphemia"><font color="ffffff"></font></FONT>
  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  <tbody><tr>

    <td width="900"><img src="home_files/footer.jpg" ></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>
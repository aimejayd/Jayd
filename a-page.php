<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.

*/
//1. First, include the file popup-contactform.php
require_once('popup-contactform.php');

//2. link to the style file contact.css
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
      <link rel="STYLESHEET" type="text/css" href="popup-contact.css">
      <link href="css/aalpha.css" rel="stylesheet" type="text/css">
      <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="jquerycycle.js"></script>
  <script type="text/javascript">
$('#slider').cycle({
 fx:      'scrollHorz',
 next:     '#next',
 prev:     '#prev',
 timeout:    300,
 pause:      1
});

  </script>
</head>
<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900" style="padding-top:20px;">
  <tbody><tr>
    <td width="900"><img src="home_files/trheader.jpg" ></td>
  </tr>
<table border="1" bgcolor="#fff">
<tr align="center">

<p align="center" WELCOME TO SORAS CONTACT US FORM.</p> 

</tr>
</table>
<table align="center">
<tr align="center">

<td align="center">
<a  href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'>
<img border='0' src='contact-us-button.png' width='213' height='39' /></a>
</td>
</tr>

</table>
<?PHP
//3. php include contactform-code.php at the end of the page

require_once('contactform-code.php');
?>
<center><form >
	        <div id="slider">
  <img src="1.png" width="900" height="900">
  <img src="2.png" width="900" height="900">
  <img src="3.png" width="900" height="900">
  <img src="4.png" width="900" height="900">
  <img src="5.png" width="900" height="900">
    <img src="6.png" width="900" height="900">

</div>
</form>
</center>
</table>
</body>
</html>
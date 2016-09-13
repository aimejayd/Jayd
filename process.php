<?php 
//start session
session_start();

require_once('database.php');

$action = $_GET['action'];

switch($action) {
	case 'add-cons':
		addCons();
	break;
	
	case 'add-ref':
	    addRef();
	break;
	
	case 'add-reg':
	    addReg();
	break;
	
	case 'approved':
		markApproved();
	break;
	
	case 'add-office':
		addNewOffice();
	break;
	
	case 'add-manager':
		addManager();
	break;
	
	case 'update-status':
		updateStatus();
	break;
	
	case 'change-pass':
		changePass();
	break;
			
	case 'logOut':
		logOut();
	break;
    
    case 'delete':
         delete();
    break;		 
	
}//switch

function addCons(){

	$Clientname = $_POST['Clientname'];
	$Clientphone = $_POST['Clientphone'];
	$Clientaddress = $_POST['Clientaddress'];
	
	$Officername = $_POST['Officername'];
	$Officerphone = $_POST['Officerphone'];
	$Officeraddress = $_POST['Officeraddress'];
	
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$Instype = $_POST['Instype'];
	$Amount = $_POST['Amount'];
	$Invoiceno = $_POST['Invoiceno'];
	$Indnbr = $_POST['Indnbr'];

	$Bookingmode = $_POST['Bookingmode'];
	$Vat = $_POST['Vat'];
	$Mode = $_POST['Mode'];
	
	
	$Issueddate = $_POST['Issueddate'];
	$Expireddate = $_POST['Expireddate'];
	$Time = $_POST['Time'];
	$Status = $_POST['Status'];
	$Comments = $_POST['Comments'];
	

	$sql = "INSERT INTO tbl_clients (cons_no, clnt_name, clnt_phone, clnt_add, off_name, off_phone, off_add,  type, amount, invoice_no, ind_nbr, book_mode, vat, mode, iss_date, exp_date, time, status, comments, book_date )
			VALUES('$ConsignmentNo', '$Clientname','$Clientphone', '$Clientaddress', '$Officername','$Officerphone','$Officeraddress', '$Instype','$Amount' , '$Invoiceno', $Indnbr, '$Bookingmode', '$Vat', '$Mode', '$Issueddate', '$Expireddate','$Time', '$Status', '$Comments', NOW())";	
	//echo $sql;
	dbQuery($sql);
	header('Location: insurance-add-success.php'); 
	
	//echo $Ship;
}//addCons
function addReg() {
    $Clientname = $_POST['Clientname'];
	$Clientphone = $_POST['Clientphone'];
	$Clientaddress = $_POST['Clientaddress'];
	
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$Instype = $_POST['Instype'];
	$Amount = $_POST['Amount'];
	$Indnbr = $_POST['Indnbr'];
	
	$Bookingmode = $_POST['Bookingmode'];
	$Vat = $_POST['Vat'];
	$Mode = $_POST['Mode'];
	
		$Issueddate = $_POST['Issueddate']; 
	$Expireddate = $_POST['Expireddate'];
	$Time = $_POST['Time'];
	$Status = $_POST['Status'];
	$Comments = $_POST['Comments'];
	
	$sql = "INSERT INTO tbl_clients (cons_no, clnt_name, clnt_phone, clnt_add, type, amount, ind_nbr, book_mode, vat, mode, iss_date, exp_date, time, status, comments, book_date )
			VALUES('$ConsignmentNo', '$Clientname','$Clientphone', '$Clientaddress', '$Instype', '$Amount', $Indnbr, '$Bookingmode', '$Vat', '$Mode', '$Issueddate', '$Expireddate','$Time', '$Status', '$Comments', NOW())";	
			dbQuery($sql);
			header('Location: reg-add-success.php');
} 
function markApproved() {
	$cid = (int)$_GET['cid'];
	$sql = "UPDATE tbl_clients
			SET status = 'Approved'
			WHERE cid= $cid";
	dbQuery($sql);
	header('Location: delivered-success.php'); 
			
}//markDelivered();

function addNewOffice() {
	
	$OfficeName = $_POST['OfficeName'];
	$OfficeAddress = $_POST['OfficeAddress'];
	$City = $_POST['City'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeTiming = $_POST['OfficeTiming'];
	$ContactPerson = $_POST['ContactPerson'];
	
	$sql = "INSERT INTO tbl_offices (off_name, address, city, ph_no, office_time, contact_person)
			VALUES ('$OfficeName', '$OfficeAddress', '$City', '$PhoneNo', '$OfficeTiming', '$ContactPerson')";
	dbQuery($sql);
	header('Location: office-add-success.php');
}//addNewOffice

function addManager() {
	
	$ManagerName = $_POST['ManagerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_ins_officers (officer_name, off_pwd, address, email, ph_no, office, reg_date)
			VALUES ('$ManagerName', '$Password', '$Address', '$Email', '$PhoneNo', '$OfficeName', NOW())";
	dbQuery($sql);
	header('Location: manager-add-success.php');

}//addNewOffice

function updateStatus() {
	
	$OfficeName = $_POST['OfficeName'];
	$status = $_POST['status'];
	$comments = $_POST['comments'];
	$cid = (int)$_POST['cid'];
	$cons_no = $_POST['cons_no'];
	//$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_track (cid, cons_no, current_city, status, comments, bk_time)
			VALUES ($cid, '$cons_no', '$OfficeName', '$status', '$comments', NOW())";
	dbQuery($sql);
	
	$sql_1 = "UPDATE tbl_clients 
				SET status = '$status' 
				WHERE cid = $cid
				AND cons_no = '$cons_no'";
	dbQuery($sql_1);	
	
	header('Location: update-success.php');

}//addNewOffice



function logOut(){
	if(isset($_SESSION['user_name'])){
		unset($_SESSION['user_name']);
	}
	if(isset($_SESSION['user_type'])){
		unset($_SESSION['user_type']);
	}
	session_destroy();
	header('Location: login.php');
}//logOut

function delete() {
	$cid = (int)$_GET['cid'];
	$sql = "delete from tbl_clients WHERE cid= $cid";
	dbQuery($sql);
	header('Location: deleted-success.php'); }

function addRef()
{
$cons = $_POST['Consignment'];
$ref = $_POST ['Refnmber'];

$SQL = "SELECT cons_no FROM tbl_clients WHERE cons_no ='$cons'";
$q = mysql_query($SQL);
if(mysql_num_rows($q) > 0){
        $SQL1 = "UPDATE tbl_clients SET Reference_Number='$ref' WHERE cons_no='$cons'";
		dbQuery($SQL1);
		header('Location: insurance-add-success.php');
}
else
			die("Cons not found in the system");
		
		
//$Cons = $_POST['Consignment'];
//$refnb = $_POST['Refnmbr'];	
//$result22 = mysql_query("SELECT * FROM clients WHERE cons_no = '$cons'");
//if($result22){
//$SQL = "INSERT INTO clients  (Reference_Number) VALUES ('$refnb')";
//$result = mysql_query($SQL); 

 
} 
?>
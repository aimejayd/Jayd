<?
$result22 = mysql_query("SELECT COUNT(1) FROM newsite WHERE user = '$username'");

if($result22){
$SQL = "UPDATE newsite SET active = '1' WHERE user = '$username'";
$_SESSION['username'] = $_GET['user'];
$result = mysql_query($SQL);
echo("lol."); // TEST
header("Location: ./share.php?user=$username");

}
if(!$result22){

$SQL = "INSERT INTO newsite (user, active) VALUES ('".$username."', '1')";
$_SESSION['username'] = $_GET['user'];
$result = mysql_query($SQL);
echo("NOPE."); //TEST
header("Location: ./share.php?user=$username");
}
}
?>
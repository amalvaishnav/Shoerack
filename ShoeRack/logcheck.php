<?php
$un=$_POST["username"];
$pwd=md5($_POST["password"]);
//$m = mysqli_connect("fdb16.awardspace.net", "2422716_shoerack", "2422716_shoerack", "2422716_shoerack");
$c=@mysql_connect("fdb16.awardspace.net","2422716_shoerack","2422716_shoerack");
	$m=@mysql_select_db("2422716_shoerack",$c);
	if($m==false) die("Failed to load <br>");

$h="select * from `signup` WHERE '$un' in (`Username`,`Email`) AND  `Password`='$pwd'";
$query =@ mysql_query($h);
$rows =@mysql_num_rows($query);
if($rows > 0){header("location:fineartvids2.php");}
else {
		header("location:Login.php?error");
		//echo '<script language="javascript">';
		//echo 'alert("Invalid Login Credentials")';
		/*echo '</script>';*/
	}
//header("location:Login.php");
?>
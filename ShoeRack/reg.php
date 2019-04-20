<?php
	$un=$_POST["username"];
	$em=$_POST["email"];
	$pwd=md5($_POST["password1"]);
	/*$dob_day=$_POST["dob_day"];
	$dob_month=$_POST["dob_month"];
	$dob_year=$_POST["dob_year"];*/
	$dob=$_POST['dob-day'] . '-' . $_POST['dob-month'] . '-' . $_POST['dob-year'];
	//echo "selected " . $dob;

	$c=@mysql_connect("fdb16.awardspace.net","2422716_shoerack","2422716_shoerack");
	$m=@mysql_select_db("2422716_shoerack",$c);
	if($m==false) die("Failed to load <br>");
	$t="insert into signup(Username,Email,Password,DateofBirth) values ('".$un."','".$em."','".$pwd."','".$dob."')";
	mysql_query($t);
	header("location:success.php");
?>
<?php
  if(isset($_POST['update']))
  {
 $r=$_POST['userid'];
 $p=$r;
  $q=$_POST['username'];
  $w=$_POST['email'];
  $e=md5($_POST['password']);
  $x=@mysql_connect("fdb16.awardspace.net","2422716_shoerack","2422716_shoerack");
 $y=@mysql_select_db("2422716_shoerack",$x);
  $updated=mysql_query ("update signup set Username='".$q."', Email='".$w."', Password='".$e."' WHERE signup.id=".$r."");
		  header("Location:Adminhome.php?edit=$p");
}
$i=$_POST['userid'];
$s=@mysql_connect("fdb16.awardspace.net","2422716_shoerack","2422716_shoerack");
$d=@mysql_select_db("2422716_shoerack",$s);
echo "<form action='' method='post'>
       USERNAME<input type='text' name='username' ><br>
	 EMAIL    <input type='text' name='email' ><br>
	        PASSWORD<input type='password' name='password' ><br>
	<input type='submit' name='update' value='UPDATE'>
	<input type='hidden' name='userid' value=".$i.">
	</form>";

?>


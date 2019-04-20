<?php
$c=@mysql_connect("fdb16.awardspace.net","2422716_shoerack","2422716_shoerack");
$m=@mysql_select_db("2422716_shoerack",$c);
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['username'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$query3=mysql_query("update addd set Username='$name', Email='$email', Password='$pwd' where id='$id'");
if($query3)
{
header('location:Adminhome.php');
}
}
$query1=mysql_query("select * from signup where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
Name:<input type="text" name="username" /><br />
Email:<input type="text" name="email"  /><br />
Password:<input type="password" name="password" /><br />
<br />
<input type="submit" name="submit" value="Edit" />
</form>
<?php
}
?>
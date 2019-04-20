<?php
$i=$_POST["userid"];
$s=@mysql_connect("fdb16.awardspace.net","2422716_shoerack","2422716_shoerack");
$d=@mysql_select_db("2422716_shoerack",$s);
$x="delete from signup where id='".$i."'";
mysql_query($x);
header("location:Adminhome.php?delete=$i");
?>
<?php
session_start();
if(isset($_SESSION['useremail']))
	{	
		//echo "<b>hellooooooooooooooooooooooooooooooooooooooooooooooooooo</b>";
	}
else
	{
		echo "<font color=red size=20>Access Unauthorized <br></font>";
		echo "<font size=20><a href='admin.php'>Login here</a></font>";
		die("<br>-----------------------------");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>The Shoe Rack</title>
<link rel="stylesheet" type="text/css" href="../css/ext.css">
<style>
html { color:#000000;
		font-family:"Copperplate Gothic Bold", "Copperplate Gothic Light", Jokerman;
		}
body{background-color:#dddddd}		

#main{
			width:1110px;
			margin:0 auto;
			background:#ffffff;
			}	
#button1{	
			border:solid;
			border-color:#009900;
			border-width:2px;
			background-color:#4CAF50;
			color:#FFFFFF;	
			 padding: 8px 10px;
}			
#button1:hover{
			background-color:#FF9900;
			color:#fff;
			border-color:#FF6633;	
			 padding: 8px 10px;
}

p#par {		
			
			text-align:justify;
			text-align:center;
			font-family:consolas;
		}		
#ii{
			border:solid;
			border-color:#006600;
}		
	
#p1{
			margin-left:30px;	
  } 
#errormsg{
			color:#009900;
			font-family:consolas;
			font-size:16px;
			/*background-color:#FFBABA;*/
			border:solid;
			width:225px;
			border-width:1px;
			border-color:#009900;		
}	
#content{
			height:550px;
			}
#vids{
			width=100%;
			height:35px;
			font-weight:700;
			font-size:22px;
			color:#333333;
		}		
h4{
		font-family:consolas;
		font-stretch:expanded;
		font-size:18px;
}		
		   		
}		
			
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
</style>
</head>

<body>
<div id="main">
  <img src="../1.jpg" alt="line" height=50 width=100%>
  <div id="header">
	  <div id="logo"><a href="../home.php" ><img src="../4.jpg" alt="line" width=173 height=133 /></a></div>
		<div id="navbar">
			<ul>
				<b>
				<li><a href="Adminhome.php" >User Management</a></li>
				<li><a href="product.php">Product Management</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="logout.php">Logout</a></li>
				<!--<li><a href="../Contact us.php">Contact us</a></li>	
				<li><a href="../Login.php">Login</a></li>	-->
				<?php
					if(isset($_SESSION['useremail'])){
						echo "<br><br><br><Br><h4><p align=right>welcome Admin-".$_SESSION['useremail']."</p></h4>";
					}
				?>			
			</b></ul>		
		</div>
  </div>
  <div id="content">
		<div id="vids"><center>
		  Admin home <h2>User Management</h2></center></div><div><font face="Georgia, Times New Roman, Times, serif"><center>
		<?php
		$c=@mysql_connect("fdb16.awardspace.net","2422716_shoerack","2422716_shoerack");
		$k=@mysql_select_db("2422716_shoerack",$c);
		if($k==false) die("error!");
		$t="select * from signup";
		$res=@mysql_query($t);
		echo "<table  id=ii border=2 cellspacing=4>";
		echo "<tr><th>id</th>"."<th>Username"."</th>"."<th>"."Email"."</th>"."<th>"."Password(Encrypted)"."</th>"."<th>"."Date Of Birth"."</th></tr>";
		while($re=@mysql_fetch_assoc($res))
		{
		echo "<tr><td>".$re["id"]."</td>"."<td>".$re["Username"]."</td>"." <td> ".$re["Email"]."</td>"."<td>".$re["Password"]."</td>"."<td>".$re["DateOfBirth"]."</td>";
		echo "<td>"."<form  action='edit.php?id=".$re["id"]."' method='post'>";
		echo "<input type='hidden' name='userid' value=".$re["id"]."><input type='submit'  id=button1 value='Edit' /></form></td>";
		echo "<td>"."<form action='delete.php?id=".$re["id"]."' method='post'>";
		echo "<input type='hidden' name='userid' value=".$re["id"].">";
		echo "<input type='submit'  id=button1 value='Delete' /></form></td>"."<br>";
		}
		echo "</table><br>";
		echo "<form action='add.php' method=post><input type=submit  id=button1 value='Add Record' name='add' />";
				$f=0;
				if(isset($_GET["add"]))
					$f=1;	
				if(isset($_GET["edit"]))
					$f=2;
				if(isset($_GET["delete"]))	
					$f=3;
					
				if($f==3)
					echo "<h2 id=errormsg> Record with id ".$_GET["delete"]." Successfully Deleted</h2>";	
				if($f==2)
					echo "<h2 id=errormsg> Record with id ".$_GET["edit"]." Successfully Updated</h2>";			
				if($f==1)
					echo "<h2 id=errormsg> Record Successfully Added</h2>";
?></center>
		</font></div>


		<!--<div id="link">
			<ul>
				<li><a href="userdetail.php">User Management</a></li>
				<li><a href="product.php">Product Management</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>-->
		</div>
	<img src="../2.jpg" alt="line2" height="10" width=100%>
	<div id="footer">
		<div id="copyright">copyright</div>
	</div>


</div>

</body>
</body>
</html>

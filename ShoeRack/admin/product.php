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
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>The Shoe Rack</title>
<link rel="stylesheet" type="text/css" href="../css/ext.css">
<style>
html { color:#000000;
		height:auto;
		font-family:"Copperplate Gothic Bold", "Copperplate Gothic Light", Jokerman;
		}
body{background-color:#dddddd;
	height:auto}		

#main{		
			height:auto;
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
			height:auto;
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
div#img {
    margin: 20px;
    border: 1px solid #ddd;
    float: left;
    width: 25%;
	clear:left;
}

div#img:hover {
    border: 1px solid #777;
}

div#img img {
    width: 100%;
    height: 200px;
}

div#desc {
	  	 	float:left;
			margin:10px;
			width:20%;
			font-weight:bold;
			
    		
}	
#file
{
	clear:both;
}	
.styled input[type="file"] {
display: none;
background-color:#3300CC;
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
		 <h2>Product Management-Images</h2></center></div><div><font face="Georgia, Times New Roman, Times, serif"><center><br>

<div id=con>
<?php
	$db=mysqli_connect("fdb16.awardspace.net","2422716_shoerack","2422716_shoerack","2422716_shoerack");
	$sql="select * from images";
	$result=mysqli_query($db,$sql);
	while($row=mysqli_fetch_array($result)){
		echo "<div id='img'>";
		echo"<img src='../images/".$row['image']."' >";
			echo "</div>";
		echo "<div id='desc'><p>".$row['text']."</p></div>";
	

}
?>
<center>
<div id='file'>
<form  action="product.php" method="post" enctype="multipart/form-data">
<br>
<input type='hidden' name="size" value=100000>

<input type="file" name="image" id='button1'><br><br>
<textarea name='text' rows="4" cols="40" placeholder="something about a pic....."></textarea>
<br>
<br>

<input id='button1' type="submit" name="submit" value="Upload">
</form></center>
</div>
</div>
<?php
echo "";
$msg="";
if(isset($_POST['submit'])){
$target="../images/".basename($_FILES['image']['name']);
$db=mysqli_connect("fdb16.awardspace.net","2422716_shoerack","2422716_shoerack","2422716_shoerack");
$image=$_FILES['image']['name'];
$text=$_POST['text'];
$sql="INSERT INTO IMAGES(image,text) values ('$image','$text')";
mysqli_query($db,$sql);
if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
	$msg="<center><b>Image uploaded successfully</b></center>";

}
else{
	$msg="no uploads";
}
}
echo $msg;
?>
</center>
		</font></div>
		</div>
	<img src="../2.jpg" alt="line2" height="10" width=100%>
	<div id="footer">
		<div id="copyright">copyright</div>
	</div>


</div>

</body>
</body>
</html>


<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>The Shoe Rack</title>
<link rel="stylesheet" type="text/css" href="css/ext.css">
<script src="js/login.js" type="text/javascript"></script>
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

#content{
			height:450px;
			}
#form1{
			margin:20px;


}
#vids{
			width=100%;
			height:35px;
			font-weight:700;
			font-size:22px;
			color:#333333;
		}		
#errormsg{
			color:#CC3300;
			font-family:consolas;
			font-size:13px;
			/*background-color:#FFBABA;*/
			border:solid;
			width:225px;
			border-width:1px;
			border-color:#FF0000;		
}	

#submit
{
				 background-color: #4CAF50;
				 color:white;	
				 font-family:"Copperplate Gothic Bold", "Copperplate Gothic Light";		
				 font-size:16px;
				 padding: 10px 12px;
				 border:none;
				 }
#submit:hover{
				 color:black;	
}		
#submit:active {
    			border:groove;
				border-color:#FF0000;
				border-width:thin; 
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
  <img src="1.jpg" alt="line" height=50 width=100%>
  <div id="header">
	  <div id="logo"><a href="index.php" ><img src="4.jpg" alt="line" width=173 height=133 /></a></div>
		<div id="navbar">
			<ul>
				<b>
				<li><a href="index.php" >Home</a></li>
				<li><a href="AboutUs.php">About Us</a></li>
				<li><a href="Gallery.php">Gallery</a></li>
				<li><a href="FineartVideos.php">FineArt Videos</a></li>
				<li><a href="ContactUs.php">Contact us</a></li>	
				<li><a href="Login.php">Login</a></li>				
			</b></ul>		
		</div>
  </div>
  <div id="content">
  		
		<div id="vids"><center>
		  <a href="Login.php">Login</a> OR <a href="REGISTER.php">Register </a></center></div>
		  
    <div class="login">
       <div id="form1">
	   <h1>Login to Shoe Rack </h1>
	   <div>
	   		<?php
				$f=0;
				if(isset($_GET["error"]))
					$f=1;			
				if($f==1)
					echo "<h2 id=errormsg> Invalid Login Credentials!!! </h2>";
			?>
	   </div>
      <form  action="logcheck.php" name="form2" id="form2" method="post">
        <p><input type="text" name="username" id="username" value="" placeholder="Username or Email"  onKeyPress="goblank1()">
			<span  id="span1" ></span></p>
        <p><input type="password" name="password" id="password" value="" placeholder="Password" onKeyPress="goblank2()">
			<span id="span2" ></span></p>
        <p class="remember_me">
          <label>
            <!--<input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer-->
          </label>
        </p>
        <p class="submit"><input type="submit" name="submit" id="submit" value="Login" OnClick="return validatef1()"></p>
		<p><a href="REGISTER.php">Not a Member?Register Here</a></p>
      </form></div>
    </div>

  <!--  <div class="login-help">
      <p>Forgot your password? <a href="Login.php">Click here to reset it</a>.</p>
    </div>-->
</div>
	<img src="2.jpg" alt="line2" height="10" width=100%>
	<div id="footer">
		<div id="copyright">copyright</div>
	</div>


</div>

</body>
</body>
</html>

<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>The Shoe Rack</title>
<link rel="stylesheet" type="text/css" href="css/ext.css">
<script src="js/r2.js" type="text/javascript"></script>
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

#content{
			height:500px;
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
	  <div id="logo"><a href="indexs.html" ><img src="4.jpg" alt="line" width=173 height=133 /></a></div>
		<div id="navbar">
			<ul>
				<b>
				<li><a href="index.html" >Home</a></li>
				<li><a href="AboutUs.php">About Us</a></li>
				<li><a href="Gallery.php">Gallery</a></li>
				<li><a href="FineartVideos.php">FineArt Videos</a></li>
				<li><a href="Contactus.php">Contact us</a></li>	
				<li><a href="Login.php">Login</a></li>				
			</b></ul>		
		</div>
  </div>
  <div id="content">
  		
		<div id="vids"><center>
		  <a href="Login.php">Login</a> OR <a href="REGISTER.php">Register </a></center></div>
		  
    <div class="login">
       <div id="form1">
    
      <h1>Register on Shoe Rack </h1>
      <form method="post" action="reg.php">
      <div >
      <h3>Your Personal Information</h3>
      <p>
        <input type="text" id="username" name="username" value="" placeholder="Your Desired Username" onKeyPress="goblank1()">
		<span id="error1"></span><br>
        <input type="text" id="email" name="email"  value="" placeholder="Your E-mail Address" onKeyPress="goblank2()" >
		<span id="error10"></span>
      </p>            
      </div>
      <div >
      <h3>Your Password</h3>
      <input type="password" id="password1" name="password1" value="" placeholder="Your Password" onKeyPress="goblank3()">
	  <span id="error2"></span><br>
      <input type="password" id="password2" name="password2" value="" placeholder="Confirm Password" onKeyPress="goblank4()">
      <span id="error3"></span>
	  </div>
   <div class="control-group">
  	<h3>Date of birth</h3>
  <div class="controls">
    <select name="dob-day" id="dob-day" name="dob-day">
      <option value="day" disabled>Day</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    <select name="dob-month" id="dob-month" name="dob-month">
      <option value="" disabled>Month</option>
      <option value="01">January</option>
      <option value="02">February</option>
      <option value="03">March</option>
      <option value="04">April</option>
      <option value="05">May</option>
      <option value="06">June</option>
      <option value="07">July</option>
      <option value="08">August</option>
      <option value="09">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select>
    <select name="dob-year" id="dob-year" name="dob-year">
      <option value="" disabled>Year</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>

    </select>
  </div>
</div>
      <p>
          <input type="checkbox" name="CHCKBOX" id="check">
           I accept Terms & Conditions       
      </p>
      <p>
        <input id="submit" type="submit" name="submit" value="Sign Up" onClick="return Submit()">
      </p>
      </form>
   
</div></div></div>
	<img src="2.jpg" alt="line2" height="10" width=100%>
	<div id="footer">
		<div id="copyright">copyright</div>

</div>
</div>
</body>
</body>
</html>

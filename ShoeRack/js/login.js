function validatef1()
{
	var u,p;
	u=document.getElementById("username").value;
	p=document.getElementById("password").value;
	if(u=="")
	{	
		document.getElementById("span1").innerHTML=" Please Enter Your Username";
		document.getElementById("username").focus;
		return false;
	}
	if(p=="")
	{	
		document.getElementById("span2").innerHTML=" Please Enter Your Password";
		document.getElementById("password").focus;
		return false;
	}
}
function goblank1()
{
		document.getElementById("span1").innerHTML="";	
} 
function goblank2()
{
		document.getElementById("span2").innerHTML="";	
} 


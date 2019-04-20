function Submit()
{
 var emailTEST= /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var u1= /^[A-Za-z0-9_]{3,20}$/;
 var us=document.getElementById("username").value;
 var femail = document.getElementById("email").value;
 var fpassword1 = document.getElementById("password1").value;
// var fpassword2 = document.getElementById("password2").value;
 // var checkbox = document.getElementById("check").checked;

    if (us == "" )
 {
 
   document.getElementById("error1").innerHTML = "enter the username";
   document.getElementById("username").focus();	 
 return false;
  }
  else if(!u1.test(us)){
  
  document.getElementById("error1").innerHTML = "enter the valid username";
  document.getElementById("username").focus();
  return false;
  } 
  
   if (femail == "" )
 {
 
  document.getElementById("error10").innerHTML = "enter the email";
   document.getElementById("email").focus();
 return false;
  }
  else if(!emailTEST.test(femail)){
  document.getElementById("error10").innerHTML = "enter the valid email";
  document.getElementById("email").focus();
  return false;
  }
   

   
 if(fpassword1 == "")
  {
   
   document.getElementById("error2").innerHTML = "enter the password";
   document.getElementById("password1").focus();
   return false;
  }
}
  
  // if(fpassword2 == "")
  //{
   
   //document.getElementById("error3").innerHTML = "enter the confirm-password";
   //document.getElementById("password2").focus();
   //return false;
  //}
  
 // if(fpassword1 != fpassword2){
   
   //document.getElementById("error3").innerHTML = "passwords are not matching, re-enter again";
   //document.getElementById("password2").focus();
   //return false;
   //}
   //if(checkbox == false)
//   {
	//   alert("you must accept terms and conditions");
	 //   return false;
   //}
   
 /* if(us != '' && femail != '' && fpassword1 != '' && fpassword2 != '')
  {
 	 alert("Form Submitted Successfully");
	
   }*/
//}
function goblank1()
{
		document.getElementById("error1").innerHTML="";
}
function goblank2()
{
		document.getElementById("error10").innerHTML="";
}
function goblank3()
{
		document.getElementById("error2").innerHTML="";
}
function gotblank4()
{
		document.getElementById("error3").innerHTML="";
}
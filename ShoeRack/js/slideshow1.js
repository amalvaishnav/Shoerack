var i=2;
function slide()
{
	setInterval("print1()",3000);	
	
	}
function print1()
{
	
	document.getElementById("img").src="slideshow/"+i+".jpg";
	i++;
	//if(i==3) {
		//document.getElementById("img").src.height=400px;
		//e.height=400px;
	//}
	if(i==4)
	{
		i=1;
	}
}
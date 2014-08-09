function validateSignUp()
{
	var x1=document.forms["myForm"]["name"].value;
	var x2=document.forms["myForm"]["handle"].value;
	var x3=document.forms["myForm"]["email"].value;
	var x4=document.forms["myForm"]["crpassword"].value;
	var x5=document.forms["myForm"]["copassword"].value;

	if (x1==null || x1=="")
	{
		alert("First name must be filled out");
  		return false;
  	}
  	if (x2==null || x2=="")
	{
		alert("Handle must be filled out");
  		return false;
  	}
  	if(x2.length<5)
  	{
  		alert("Handle name too small. It must be greater than 5 chars!!!");
  		return false;
  	}
  	var atpos=x3.indexOf("@");
	var dotpos=x3.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x3.length)
    {
  		alert("Not a valid e-mail address");
  		return false;
    }
    if (x4==null || x4=="")
	{
		alert("password must be filled out");
  		return false;
  	}
  	if(x4.length<5)
  	{
  		alert("password too short. size should range b/w 5 & 15");
  		return false;
  	}
  	if(x4.length>15)
  	{
  		alert("password too long. size should range b/w 5 & 15");
  		return false;
  	}
  	if(x5==null||x5=="")
  	{
  		alert("confirmation password must be filled out");
  		return false;
  	}
  	if(x4!=x5)
  	{
  		alert("passwords do not match");
  		return false;
  	}
}
function validateLogin()
{
    var x6=document.forms["login"]["username"].value;
    var x7=document.forms["login"]["password"].value;
    if(x6==null||x6=="")
    {
      alert("Please enter the username");
      return false;
    }
    if(x7==null||x7=="")
    {
      alert("Please enter the password");
      return false;
    }
}
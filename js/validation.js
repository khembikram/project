function valid()
{
	if(document.getElementById('pass').value=="")
	{
		document.getElementById('error').innerHTML="Please Enter Old Password";
		document.getElementById('pass').focus();
		return false;
	}
	else if(document.getElementById('npass').value=="")
	{
		document.getElementById('error').innerHTML="Please Enter New Password";
		document.getElementById('npass').focus();
		return false;
	}
	else if(document.getElementById('cpass').value=="")
	{
		document.getElementById('error').innerHTML="Please Re-Enter Password";
		document.getElementById('cpass').focus();
		return false;
	}
	else if(document.getElementById('npass').value!=document.getElementById('cpass').value)
	{
		document.getElementById('error').innerHTML="Password Mismatched";
		document.getElementById('cpass').select();
		return false;
	}
	
	else
	{
		return true;
	}
}
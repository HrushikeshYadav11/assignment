<html>
<body>
<script>     
function validate()
{
	var email = document.getElementById('email');
	var password = document.getElementById('Password');
	
	if(email.value =='')
	{
		alert('Enter User name');
		email.focus();
		return false;
	}
	else if(password.value == '')
	{
		alert('Enter password');
		password.focus();
		return false;
	}
	return true;
}

	</script>
<form action="authenticate.php" method=POST onsubmit="return validate();">
Username<input type="text" id = "email" name="email">	
Password<input type="password" id="Password" name="password">
<br>
<input type="submit" value= "Login">
</form>	
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
<fieldset>
	<?php
		session_start();
		include "header.php";
	?>
</fieldset>
<?php
$name = $pass = $error = "";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$data = file_get_contents("data.json");
	$data = json_decode($data, true); 
	foreach ($data as $row) 
	{
		if($row['username'] == $_POST['uname'] && $row['password'] == $_POST['pass'])
		{
			$_SESSION['flag'] = 1;
			$_SESSION['uname'] = $_POST['uname'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['email'] = $row['e-mail'];
			header("location: dashboard.php");
			break;
		}
	}

	if($_SERVER['flag'] != 1)
		$error = "Invalid Username or Password";
	$_COOKIE['uname'] = "";
	$_COOKIE['password'] = "";
	if(isset($_POST['remember']))
	{
		setcookie('uname', $_POST['uname'], time()+45);
		setcookie('password', $_POST['pass'], time()+45);
	}
}
?>
<fieldset>
	<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<fieldset>
		<legend>LOGIN</legend>
		Username : <input type = "text" name="uname" value="<?php {if(isset($_COOKIE['uname'])) echo $_COOKIE['uname'];}?>"><br>
		Password : <input type = "password" name="pass" value="<?php {if(isset($_COOKIE['password'])) echo $_COOKIE['password'];}?>">
		<hr/>
		<input type = "checkbox" name="remember">Remember me<br>
		<input type = "submit">&nbsp&nbsp<a href="forgotPassword.php">Forgot Password</a>
	</fieldset>	
	</form>
</fieldset>
<fieldset>
	<?php
	include "footer.php";
	?>
</fieldset>
<?php
echo $error;
?>
</body>
</html>
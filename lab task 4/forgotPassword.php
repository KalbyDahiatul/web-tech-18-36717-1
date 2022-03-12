<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forgot Password</title>
</head>
<body>
<?php
session_start();
$error = $pass = "";
static $flag = 0;
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$data = file_get_contents("data.json");
	$data = json_decode($data, true);
	foreach ($data as $row)
	{
		if($row['e-mail'] == $_POST['email'])
		{
			$pass = $row['password'];
			$flag = 1;
			break;
		}
	}
	if($flag != 1)
	{
		$error = "Email doesn't valid";
	}
}
?>

<fieldset>
	<?php include "header.php";?>
</fieldset>
<fieldset>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<fieldset>
		<legend>FORGOT PASSWORD</legend>
		Enter Email : <input type="text" name="email">
		<hr>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</fieldset>
<fieldset>
	<?php include "footer.php";?>
</fieldset>
<?php echo $error;?>
</body>
</html>
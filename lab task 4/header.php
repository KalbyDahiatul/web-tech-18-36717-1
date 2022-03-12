<!DOCTYPE html>
<html>
<body>
<img align="left" src="Coffee.png" width="40" height="40"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<?php
$home = "home.php";
$login = "login.php";
$registration = "registration.php";
$logout = "logout.php";
$self = "";

if(!($_SESSION['flag']))
{
	echo "<a href ='$home'>Home</a>|<a href ='$login'>Login</a>|<a href ='$registration'>Registration</a>";
}
else{echo "Logged in as <a href =$self>".$_SESSION['uname']."</a>|<a href ='$logout'>Logout</a>";}
?>
</body>
</html>
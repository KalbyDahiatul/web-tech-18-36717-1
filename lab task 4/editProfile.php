<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Profile</title>
</head>
<body>
<fieldset>
	<?php
	session_start();
	include "header.php";
	$data = file_get_contents("data.json");
	$data = json_decode($data, true);
	foreach ($data as $row)
	 {
	 	if($_SESSION['pass'] == $row['password'])
	 	{
	 		$_SESSION['name'] = $row['username'];
			$_SESSION['email'] = $row['e-mail'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['day'] = $row['dd'];
			$_SESSION['month'] = $row['mm'];
			$_SESSION['year'] = $row['yyyy'];
			break;
	 	}
	 }
	 if($_SERVER['REQUEST_METHOD'] == "POST")
	 {
	 	if(isset($_POST['submit']))
	 	{
	 		$data = file_get_contents("data.json");
	 		$data = json_decode($data, true);
	 		foreach($data as $row)
	 		{
	 			if($_SESSION['pass'] == $row['password'])
	 			{
	 				$row['username'] = $_POST['uname'];
	 				$row['e-mail'] = $_POST['email'];
	 				$row['gender'] = $_POST['gender'];
	 				break;
	 			}
	 		}
	 		file_put_contents('data.json', json_encode($data));
	 	}
	 } 
	?>
</fieldset>
<table>
	<td>
		<fieldset style="height: 300px; width: 300px;">
			<h3>Account</h3><br>
			<hr>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="editProfile.php">Edit Profile</a></li>
				<li><a href="changeProfilePic.php">Change Profile Picture</a></li>
				<li><a href="changePass.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</fieldset>
	</td>
	<td>
		<fieldset style="height: 300px;">
			<fieldset>
				<legend>PROFILE</legend>
				<form method="post">
					Name :<input type="text" name="uname" value="<?php echo $_SESSION['name'];?>"><br>
					Email :<input type="text" name="email" value="<?php echo $_SESSION['email'];?>"><br>
					Date Of Birth :<input type="text" name="date" value="<?php echo "".$_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'];?>"><br>
					Gender :<input type="radio" name="gender" value="male" id="male"<?php if($_SESSION['gender']=='male') echo "checked";?>>Male
							<input type="radio" name="gender" value="female" id="female"<?php if($_SESSION['gender']=='female') echo "checked";?>>Female
							<input type="radio" name="gender" value="other" id="other"<?php if($_SESSION['gender']=='other') echo "checked";?>>Other
							<br>
							<hr>
							<input type="submit" name="submit" value="Submit">
				</form>
			</fieldset>
		</fieldset>
	</td>
</table>
<fieldset>
	<?php include "footer.php";?>
</fieldset>
</body>
</html>
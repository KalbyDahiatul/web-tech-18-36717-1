<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
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
		<fieldset style="height : 300px;">
			<fieldset>
				<legend>PROFILE</legend>
				Name : <?php echo $_SESSION['name'];?><br>
				Email : <?php echo $_SESSION['email'];?><br>
				Gender : <?php echo $_SESSION['gender'];?><br>
				Date Of Birth : <?php echo $_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'];?>
			</fieldset>
		</fieldset>
	</td>
</table>
<fieldset>
	<?php
	include "footer.php"; 
	?>
</fieldset>
</body>
</html>
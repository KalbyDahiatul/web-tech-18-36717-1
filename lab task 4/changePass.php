<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
</head>
<body>
	<fieldset>
		<?php
		session_start();
		include "header.php";
		$pass_Err = "";
		
		$data = file_get_contents('data.json');
		$data = json_decode($data, true);
		foreach ($data as $row)
		{
			if ($_SESSION['email'] == $row['e-mail'])
			{
				$_SESSION['pass'] = $row['password'];
				break;
			}
		}
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			if(isset($_POST['submit']))
			{
				$data = file_get_contents('data.json');
				$data = json_decode($data, true);
				foreach ($data as $row)
				{
					if($_SESSION['email'] == $row['e-mail'])
					{
						if($_POST['pass'] == $_POST['cpass'] && $_POST['pass'] != $_POST['currpass'])
						{
							$row['password'] = $_POST['pass'];
							echo "Success";
						}
						else{$pass_Err = "ABCD";}
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
				<form method="post">
					<legend>CHANGE PASSWORD</legend>
					<table>
						<tr>
							<td>Current Password :</td>
							<td><input type="password" name="ABC" value="<?php echo $_SESSION['pass'];?>"><?php echo $pass_Err;?></td><br>
						</tr>
						
						<tr>
							<td><span style="color: greenyellow;">New Password :</span></td>
							<td><input type="password" name="pass"></td><br>
						</tr>

						<tr>
							<td><span style="color: greenyellow;">Confirm New Password :</span></td>
							<td><input type="password" name="cpass"></td>
						</tr>
					</table>
					<br>
					<hr>
					<input type="submit" name="submit">
				</form>
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
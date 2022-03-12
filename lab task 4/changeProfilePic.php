<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile Picture</title>
</head>
<body>
<fieldset>
	<?php
	session_start();
	include "header.php";
	$tar_dir = "uploads/";
	$tar_file = $tar_dir. basename($_FILES['fileToUpload']['name']);
	$upOk = 1;
	$imageFileType = strtolower(pathinfo($tar_file,PATHINFO_EXTENSION));

	if(isset($_POST['submit']))
	{
		$check = getimagesize($_FILES['fileToUpload']['tmp_name']);
		if($check !== false)
		{
			echo "File is an image -" . $check['mime'] . ".";
			$upOk = 1;
		}
		else
		{
			echo "File is not an image!!!";
			$upOk = 0;
		}
	} 
	if(file_exists($tar_file))
	{
		echo "File already exists!!!";
		$upOk = 0;
	}
	if($_FILES['fileToUpload']['size'] > 800000)
	{
		echo "Your file is too large. Try again!!!";
		$upOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
	{
		echo "Your file format is not allowed!!!";
		$upOk = 0;
	}
	if($upOk = 0)
	{
		echo "File upload failed";
	}
	else
	{
		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $tar_file))
		{
			"The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		}
		else{echo "Sorry, your image upload failed!!!";}
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
					<legend>CHANGE PROFILE PICTURE</legend>
					<input type="file" name="fileToUpload" id="fileToUpload" value="Choose File">
					<hr>
					<input type="submit" name="submit" value="Submit">
				</form>
			</fieldset>
		</fieldset>
	</td>
</table>
<fieldset>
	<?php include "footer.php"?>
</fieldset>
</body>
</html>
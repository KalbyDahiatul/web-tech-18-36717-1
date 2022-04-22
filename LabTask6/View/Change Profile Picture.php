<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
	<div class="navitems">
		<table style="width: 100%;">
			 <tr style="width: 100%;">

              <td style="width: 20%;">
			   <ul>

			   		<li>User Account</li>
			   		<hr>
                    <li><a href="../View/Dasboard.php">Dashboard</a></li>
                    <li><a href="../View/View Profile.php">View Profile</a></li>
                    <li><a href="../View/Edit Profile.php">Edit Profile</a></li>
                    <li><a href="../View/Change Profile Picture.php">Change Profile Picture</a></li>
                    <li><a href="../View/Change Password.php">Change Password</a></li>
                    <li><a href="../View/Payment.php">Payment</a></li>
                </ul>
               </td>
               <td style="width: 80%;">

			

				<img src="../uploads/<?php 
				if (isset($_SESSION['image'])){
					echo $_SESSION['image'];
				} else if(isset($img_name)){
					echo $img_name;
					} else{
					echo "picture.png";
				} 
			?>" width="180" height="210">
				<form action="../Controller/Change Profile Picture-control.php" method="post" enctype="multipart/form-data">
			      <br>
				  Choose photo: <input type="file" name="img-file"><br>
				  <input type="submit" name="sub" value="Submit">
			      <br>
			 	</form>
               </td>
             </tr>
		</table>            
    </div>
</div>
<?php require("foot.php"); ?>
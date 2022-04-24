<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
	<div class="navitems">
		<table style="width: 100%;">
			 <tr style="width: 100%;">

              <td style="width: 20%;">
			   <ul>

			   		<li class="button">User Account</li>
			   		<hr>
                    <li><a href="../View/Dasboard.php"><button class="button">Dashboard</button></a></li>
                    <li><a href="../View/View Profile.php"><button class="button">View Profile</button></a></li>
                    <li><a href="../View/Edit Profile.php"><button class="button">Edit Profile</button></a></li>
                    <li><a href="../View/Change Profile Picture.php"><button class="button">Change Profile Picture</button></a></li>
                    <li><a href="../View/Change Password.php"><button class="button">Change Password</button></a></li>
                    <li><a href="../View/displayfood.php"><button class="button">Display Food</button></a></li>
                    <li><a href="../View/Payment.php"><button class="button">Payment</button></a></li>
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
				  Choose photo: <input type="file" name="img-file" class="button"><br>
				  <br>
				  <input type="submit" name="sub" value="Submit" class="button">
			      <br>
			 	</form>
               </td>
             </tr>
		</table>            
    </div>
</div>
<?php require("foot.php"); ?>
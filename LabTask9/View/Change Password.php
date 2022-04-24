<?php require("head.php"); 

if(!isset($_SESSION["username"])){
        header("location: Login.php");
    }

?>

<div class="container custom-form-dashboard">
	<div class="navitems">
		<table style="width: 100%;">
			 <tr style="width: 100%;">

              <td style="width: 20%;">
			   <ul>

			   		<li class="button">User Account</li>
			   		<hr>
                    <li><a href="../View/Dasboard.php"><button class="button">Dashboard</button></a></li>
                    <li><a href="../View/View Profile.php"><button class="button">View Profile</button></a></a></li>
                    <li><a href="../View/Edit Profile.php"><button class="button">Edit Profile</button></a></a></li>
                    <li><a href="../View/Change Profile Picture.php"><button class="button">Change Profile Picture</button></a></a></li>
                    <li><a href="../View/Change Password.php"><button class="button">Change Password</button></a></a></li>
                    <li><a href="../View/displayfood.php"><button class="button">Display Food</button></a></li>
                    <li><a href="../View/Payment.php"><button class="button">Payment</button></a></a></li>
                </ul>
               </td>
               <td style="width: 80%;">

    <div class="container custom-form" style="width:500px;">  
	<form method="post" action="../Controller/Change Password-control.php">

        <?php 
            //$userData =get_user_view_data($_SESSION["username"]);
                         
        //?>
    <fieldset >
      <legend>CHANGE PASSWORD</legend>
      <label><span class="blue">Current Password: </span></label>
      <input type="text" name="curr" id="curr"><span class="red">&nbsp;</span>
      <br>
      <label><span class="green">New Password:</span> </label>
      <input type="text" name="new" id="new"value="<?php if(isset($userData["password"])){echo $userData["password"];} ?>">
      <br>
      <label><span class="red">Retype New Password: </span></label>
      <input type="text" name="re" id="new"value="<?php if(isset($userData["password"])){echo $userData["password"];} ?>">
      <hr>
      
      <input type="submit" name="sub" class="button">
      <br>
     </fieldset>
</form>
    </td>
  </tr>
</table>  
          
    </div>
</div>
<?php require("foot.php"); ?>
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

    <div class="container custom-form" style="width:500px;">  
	<form method="post" action="../Controller/Change Password-control.php">

        <?php 
            //$userData =get_user_view_data($_SESSION["username"]);
                         
        //?>
    <fieldset >
      <legend>CHANGE PASSWORD</legend>
      <label><span class="blue">Current Password: </span></label>
      <input type="text" name="curr"><span class="red">&nbsp;</span>
      <br>
      <label><span class="green">New Password:</span> </label>
      <input type="text" name="new" value="<?php if(isset($userData["password"])){echo $userData["password"];} ?>">
      <br>
      <label><span class="red">Retype New Password: </span></label>
      <input type="text" name="re" value="<?php if(isset($userData["password"])){echo $userData["password"];} ?>">
      <hr>
      
      <input type="submit" name="sub">
      <br>
     </fieldset>
</form>
    </td>
  </tr>
</table>  
          
    </div>
</div>
<?php require("foot.php"); ?>
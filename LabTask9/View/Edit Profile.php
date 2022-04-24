<?php require("head.php"); 
require("../Controller/View Profile-control.php"); 
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
                    <li><a href="../View/View Profile.php"><button class="button">View Profile</button></a></li>
                    <li><a href="../View/Edit Profile.php"><button class="button">Edit Profile</button></a></li>
                    <li><a href="../View/Change Profile Picture.php"><button class="button">Change Profile Picture</button></a></li>
                    <li><a href="../View/Change Password.php"><button class="button">Change Password</button></a></li>
                    <li><a href="../View/displayfood.php"><button class="button">Display Food</button></a></li>
                    <li><a href="../View/Payment.php"><button class="button">Payment</button></a></li>
                </ul>
               </td>
               <td style="width: 80%;">
               	<div class="container custom-form" style="width:500px;">  
                                
                <form method="post" action="../Controller/Edit Profile-control.php">  
                      <?php 
                           $userData =get_user_view_data($_SESSION["username"]);
                         
                          ?>
                     <br>  
                     <fieldset>
                         <legend>EDIT PROFILE</legend>
                         <br> <br> 
                         <fieldset>
                              <legend>Name</legend> 
                              <input type="text" name="name" class="form-control" value="<?php if(isset($userData["patient_name"])){echo $userData["patient_name"];} ?>" />  
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>E-mail</legend>
                               <input type="text" name = "email" class="form-control" value="<?php if(isset($userData["e-mail"])){echo $userData["e-mail"];} ?>"/>
                          </fieldset>
                          <hr>
                          <hr>
                         
                         <fieldset>
                         <legend>Gender</legend>
                          <input type="radio" id="male" name="gender" value="male" <?php if($userData["gender"] === "male"){echo "checked";} ?>
                          <label for="male">Male</label>                     
                          <input type="radio" id="female" name="gender" value="female"  <?php if($userData["gender"] === "female"){echo "checked";} ?>
                          
                          <label for="female">Female</label>
                          <input type="radio" id="other" name="gender" value="other"  <?php if($userData["gender"] === "other"){echo "checked";} ?>
                          
                          <label for="other">Other</label><br><br>
                         </fieldset>
                         <hr> 
                        
                         <legend>Date of Birth:</legend>
                         <input type="date" name="day" value="<?php if(isset($userData["dob"])){echo $userData["dob"];} ?>"> <br><br>
                    	<hr>
                    	<input type="submit" name="submit" value="Submit" class="button"/>
                </form>  
           </div>
               </td>

             </tr>
            
		</table>            
    </div>
</div>
<?php require("foot.php"); ?>
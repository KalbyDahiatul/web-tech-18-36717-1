<?php require("head.php"); ?>

<div class="container custom-form-doctorlist">
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
               <td style="width: 70%;">
                <div class="container custom-form" style="width:500px;">  
                                
                <form method="post">  
                      
                     <br>  
                     <fieldset>
                         <legend>FOR PAYMENT</legend>
                         <br> <br> 
                         <fieldset>
                              <legend>bKash/Rocket/Nagad Number</legend> 
                              <input type="text" name="name" class="form-control"/> 
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>Amount</legend>
                               <input type="text" name = "email" class="form-control"/>
                          </fieldset>
                          <hr>
                         <fieldset>
                              <legend>Pin Number</legend>
                              <input type="password" name = "username" class="form-control" />
                         </fieldset>
                         <hr>
                        
                        
                          </fieldset>
                          <input type="submit" name="submit" value="Submit" class="button" />
                          <input type="reset" name="reset" value="Reset" class="button" /><br />                      
                          <?php  
                          if(isset($message))  
                          {  
                               echo $message;  
                          }  
                          
                          ?> 
                           
                          </fieldset>
                          <hr> 
                     
                </form>  
           </div>  
               </td>
             </tr>
            
    </table>            
    </div>
</div>


<?php include("foot.php"); ?>
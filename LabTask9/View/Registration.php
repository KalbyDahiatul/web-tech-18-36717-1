<body>
<?php 
include'head.php'; 
?>


  <div class="container-custom-form-login">  
                                
    <form name="myform" method="post" action="../Controller/Registration-control.php">  
                      
                     <br>  
                     <fieldset>
                         <legend>REGISTRATION</legend>
                         <br> <br> 
                         
                         <fieldset>
                              <legend>Costomer Name</legend> 
                              <input type="text" name="name" id="name" class="form-control"onkeyup="checkName()" onblur="checkName()"/><span class="red" id="nameErr">&nbsp;<?php //echo $nameErr; ?></span>  
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>E-mail</legend>
                               <input type="text" name = "email" id="email" class="form-control"onkeyup="checkEmail()" onblur="checkEmail()"/><span class="red" id="emailErr">&nbsp;<?php //echo $emailErr; ?></span>
                          </fieldset>
                          <hr>
                         <fieldset>
                              <legend>User Name</legend>
                              <input type="text" name = "username" id="username"class="form-control" onkeyup="checkUserName()" onblur="checkUserName()"/><span class="red"id="usernameErr">&nbsp;<?php //echo $unameErr; ?></span>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Password</legend>
                              <input type="password" name = "pass" id="pass"class="form-control"onkeyup="checkPass()" onblur="checkPass()" /><span class="red"id="passErr">&nbsp;<?php //echo $passErr; ?>
                                   
                              </span>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Confirm Password</legend>
                              <input type="password" name = "cpass" id="cpass" class="form-control" onkeyup="checkCPass()" onblur="checkCPass()"/><span class="red"id="cpassErr">&nbsp;<?php //echo $cPassErr; ?></span>
                         </fieldset>
                         <hr>

                         <fieldset onkeypress="checkGender()" onblur="checkGender()">
                         <legend>Gender</legend> 
                          <input type="radio" id="male" name="gender" value="male">
                          <label for="male">Male</label>                     
                          <input type="radio" id="female" name="gender" value="female">
                          <label for="female">Female</label>
                          <input type="radio" id="other" name="gender" value="other">
                          <label for="other">Other</label>
                          <span class="red"&nbsp; id="genderErr"<?php if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];}?></span><br><br>
                         </fieldset>
                         <hr> 
                         <legend>Date of Birth:</legend>
                         <input type="date" name="date" id="date"onkeyup="checkDate()" onblur="checkDate()"> <span class="red"id="dateErr">&nbsp;</span><br><br>
                         <fieldset>
                              
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
                <p><?php if(isset($_SESSION['regErr'])){echo $_SESSION['regErr']; $_SESSION['regErr'] = '';}?></p>
           </div>  
           <br>  


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script type="text/javascript">
     function validation()
     {
          var name= document.getElementBYId("name");
          var email=document.getElementBYId("email");
          var username=document.getElementBYId("username");
          var pass=document.getElementBYId("pass");
          var cpass=document.getElementBYId("cpass");
          var gender=document.getElementBYId("gender");
          var date=document.getElementBYId("date");

          if(name.value.trim()=="")
          {
               document.getElementById("nameErr").innerHTML="Name is required";
               alert("Name can't be blank");
               return false;
          }
          else
          {
               if(name.value.split(" ").length<2)
               { 
                    document.getElementById("nameErr").innerHTML="Name must contain at least two words";
                    return false;

               }
               document.getElementById("nameErr").innerHTML="";
          }
     if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*Email is required";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }

  if (username.value.trim()=="") {
    document.getElementById("usernameErr").innerHTML=  "* User Name is required";
    return false;
  }
  else {
    document.getElementById("usernameErr").innerHTML=  "";
  }


  if(pass.value.trim()=="")
  {
    document.getElementById("passErr").innerHTML= "*Password is required";
    return false;
  }
  else {
    if(pass.value.length<8)
    {
    document.getElementById("passErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("passErr").innerHTML= "";
    }
}

 if(cpass.value.trim()=="")
 {
 document.getElementById("cpassErr").innerHTML= "*Confirm Password is required";
   return false;
 }
 else {
    if(!(pass.value=cpass.value))
    {
      document.getElementById("cpassErr").innerHTML= "*Password and confirm password have to be same";
    return false;
    }
    else {
      document.getElementById("cpassErr").innerHTML= "";
    }

}

if(date.value=="")
{
  document.getElementById("dateErr").innerHTML= "*Birthday is required";
 return false;
}
else {

var inputdate = new Date(date.value);
var today = new Date();
if (inputdate.getTime() > today.getTime()) {
   document.getElementById("dateErr").innerHTML= "Birth date cannot be grater than current date ";
}

  else {
      document.getElementById("dateErr").innerHTML= "";
  }
}



if(!(gender[0].checked || gender[1].checked || gender[2].checked))
{
document.getElementById("genderErr").innerHTML= "*Gender is requied";
return false;
}
else {
document.getElementById("genderErr").innerHTML= "";
}

return true;


}


function checkName()
{
  var name= document.getElementById("name");
  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is required";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("nameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("nameErr").innerHTML= "";

  }
}

function checkEmail()
{
  var email= document.getElementById("email");
  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is required";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }

}

function checkUserName()
{
    var username= document.getElementById("username");

  if (username.value.trim()=="") {
    document.getElementById("usernameErr").innerHTML=  "* User Name is required";
    return false;
  }
  else {
    document.getElementById("usernameErr").innerHTML=  "";
  }
}

function checkPass()
{
    var pass= document.getElementById("pass");
  if(pass.value.trim()=="")
  {
    document.getElementById("passErr").innerHTML= "*Password is required";
    return false;
  }
  else {
    if(pass.value.length<8)
    {
    document.getElementById("passErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("passErr").innerHTML= "";
    }
}
}

function checkCPass()
{
  var cpass=document.getElementById("cpass");

  if(cpass.value.trim()=="")
  {
  document.getElementById("cpassErr").innerHTML= "*Confirm Password is required";
    return false;
  }
  else {
     if(!(pass.value==cpass.value))
     {
       document.getElementById("cpassErr").innerHTML= "*Password and confirm password have to be same";
     return false;
     }
     else {
       document.getElementById("cpassErr").innerHTML= "";
     }

 }
}

function checkDate()
{
  var date=document.getElementById("date");

  if(date.value=="")
  {
    document.getElementById("dateErr").innerHTML= "*Birthday is required";
  return false;
  }
  else {

    var inputdate = new Date(date.value);
  var today = new Date();
  if (inputdate.getTime() > today.getTime()) {
     document.getElementById("dateErr").innerHTML= "Birth date cannot be grater than current date ";
  }

    else {
        document.getElementById("dateErr").innerHTML= "";
    }

  }
}

function checkGender()
{
  var gender= document.getElementsByName("gender");

  if(!(gender[0].checked || gender[1].checked || gender[2].checked))
  {
    document.getElementById("genderErr").innerHTML= "*Gender is required";
    return false;
  }
  else {
    document.getElementById("genderErr").innerHTML= "";
  }
}

</script>
</body>
<?php include("foot.php"); ?>
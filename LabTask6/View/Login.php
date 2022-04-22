<?php require("head.php"); ?>
    
<div class="container custom-form-login" style="width:500px;">  
 <form method="post" action="../Controller/Login-control.php">
    <fieldset >
      <legend>LOGIN</legend>
      <br> 
      <label>User Name: </label>
      <input type="text" name="username" id="username"value="<?php //echo $name;?>"onkeyup="checkUsername()" onblur="checkUsername ()"><span class="red" id="unameErr" >&nbsp;<?php //echo $nameErr ?></span>
      <br>
      <label>Password: </label>
      <input type="text" name="pass" id="pass"value="<?php //echo $pass;?>"onkeyup="checkPassword()" onblur="checkPassword()"><span class="red" id="passErr">&nbsp;<?php //echo $passErr ?></span>
      <hr>
      <input type="checkbox" id="me" name="rem-me[]" value="Remember Me">
      <label for="remember me"> Remember Me</label><br>
      <br>
      <input type="submit" name="log" value="Log In">
      <a href="Forget Password.php"><span class="blue">Forget Password?</span></a>
     </fieldset>
     <span><?php if(isset($_SESSION['authentication-error'])){
        echo $_SESSION['authentication-error']; 
        $_SESSION['authentication-error']= ""; } ?></span>
 </form>
</div>
<script>
 function validation()
  {
    var uname= document.getElementById("username");
    var pass= document.getElementById("pass");



    if(uname.value.trim()=="" )
    {
       document.getElementById("unameErr").innerHTML= "*Username is required";
       return false;
    }
    else{
      document.getElementById("unameErr").innerHTML= "";
    }

   if(pass.value.trim()=="" )
    {
       document.getElementById("passErr").innerHTML= "*Password is required";
       return false;
    }
    else{
      document.getElementById("passErr").innerHTML= "";
    }


      return true;

  }

  function checkUsername()
  {
    var uname= document.getElementById("username");
    if(uname.value.trim()=="" )
    {
       document.getElementById("unameErr").innerHTML= "*Username is required";
       return false;
    }
    else{
      document.getElementById("unameErr").innerHTML= "";
    }
  }

  function checkPassword()
  {
    if(pass.value.trim()=="" )
     {
        document.getElementById("passErr").innerHTML= "*Password is required";
        return false;
     }
     else{
       document.getElementById("passErr").innerHTML= "";
     }
  }
</script>
<?php require("foot.php"); ?>
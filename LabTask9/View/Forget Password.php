<?php require("head.php"); ?>
<div class="container custom-form-fpass" style="width:500px;">
 <form method="post" action="../Controller/Forget Password-control.php">
    <fieldset >
      <legend>FORGET PASSWORD</legend>
      <br>
      <label>Enter E-mail: </label>
      <input type="text" name="mail" value="<?php //echo $email;?>"><span class="red">&nbsp;<?php //echo $emailErr ?></span>
      <hr>
      <br>

      <input type="submit" name="sub">
      
     </fieldset>

 </form>
 <?php if(isset($_SESSION["emailErr"])){echo $_SESSION["emailErr"]; $_SESSION["emailErr"] = ''; }?>

</div>
<?php require("foot.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style>
		.error{color: red;}
	</style>
</head>
<body>
<fieldset>
	<?php
	session_start();
	include 'header.php';
	?>
</fieldset>
<?php
$message = '';  
 $name_err = $email_err = $uname_err = $pass_err = $cpass_err = $gender_err = '';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["uname"]))  
      {  
           $name_err = "Name is required";  
      }
	  else {
	$arr = str_word_count($_POST['uname']);
    if (!preg_match("/^[a-zA-Z- ]*$/",$_POST['uname']) || $arr < 2) 
      $name_err = "Only can contain whitespace,period,dash and alphabetic letter. Name must be consits of at least two words";
	  
    
  }
       if(empty($_POST["email"]))  
      {  
           $email_err = "Email is required";  
      }  
	  else {
    
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format";
      
    }
  }
       if(empty($_POST["usname"]))  
      {  
           $uname_err = "Username is required";  
      }  
       if(empty($_POST["pass"]))  
      {  
           $pass_err = "Password is required";  
      }
	  else{
		  if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST['pass']))
		  
				$pass_err = "Password is invalid";
			else
				$pass_err = "";}
       if(empty($_POST["cpass"]))  
      {  
           $cpass_er = "Confirm password filed cannot be empty";  
      } 
	  else{
		  if($_POST["cpass"]!=$_POST["pass"])
			  $cpass_err = "Mismatched password!!!";
	  }
       if(!isset($_POST["gender"]))  
      {  
           $gender_err = "Gender cannot be empty";  
      } 
	  
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
	   
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name' =>     $_POST['uname'],  
                     'e-mail' =>     $_POST["email"],  
                     'username' =>     $_POST["usname"],
					 'password' =>      $_POST["pass"],
                     'gender' =>     $_POST["gender"],  
                     'dd'   =>     $_POST["dd"] ,
					 'mm'   =>     $_POST["mm"],
					 'yyyy' =>     $_POST["yy"]
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "File Appended Success fully";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 }
?>
<fieldset>
	<form method="post" action="">
		<fieldset>
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td>Name :</td>
					<td><input type = "text" name="uname" class="form-control"><span class="error"><?php echo $name_err;?></span>
					</br>
					</td>
				</tr>

				<tr>
					<td>Email :</td>
					<td><input type = "text" name="email" class="form-control"><span class="error"><?php echo $email_err;?></span>
					</br>
					</td>
				</tr>

				<tr>
					<td>User Name :</td>
					<td><input type = "text" name="usname" class="form-control"><span class="error"><?php echo $uname_err;?></span>
					</br>
					</td>
				</tr>

				<tr>
					<td>Password :</td>
					<td><input type = "password" name="pass" class="form-control"><span class="error"><?php echo $pass_err;?></span>
					</br>
					</td>
				</tr>

				<tr>
					<td>Confirm Password :</td>
					<td><input type = "password" name="cpass" class="form-control"><span class="error"><?php echo $cpass_err;?></span>
					</br>
					</td>
				</tr>
			</table>
			<hr>
			<fieldset>
				<legend>GENDER</legend>
				<input type="radio" name="gender" value="Male">Male<br>
				<input type="radio" name="gender" value="Female">Female<br>
				<input type="radio" name="gender" value="Other">Other
				<span class="error"><?php echo $gender_err;?></span>
			</fieldset>
			<hr>
			<fieldset>
				<legend>DATE OF BIRTH</legend>
				<input type = "text" name = "dd" width=100>/&nbsp <input type = "text" name = "mm" width=100>/&nbsp <input type = "text" name="yy" width=100> (dd/mm/yyyy)
				<span class="error">Date of Birth required</span>
			</fieldset>
			<hr>
			<input type="submit" name="submit" value="Submit">&nbsp &nbsp
			<input type="reset" name="reset" value="Reset">
	</fieldset>		
	</form>
	<?php echo $message;?>
</fieldset>
<fieldset>
	<?php include "footer.php";?>
</fieldset>
</body>
</html>
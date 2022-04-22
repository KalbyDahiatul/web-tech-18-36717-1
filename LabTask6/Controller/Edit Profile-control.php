<?php 
 session_start();
require("../Model/Registration-model.php");
require("../Model/Edit Profile-model.php");

	$nameErr = $emailErr = $genderErr = $dayErr = "";
     $name = $email = $gender = $day =   "";

     if(isset($_POST["submit"]))  
{  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err=false;

  if (empty($_POST["name"])) {
    $nameErr = "* Name is required";
  } 
  else {
    $name = $_POST["name"];
    $pattern = "/^[a-z]+([a-z]|[0-9]|\.|-)*/i";
    // check if name only contains letters and whitespace
    if (!preg_match($pattern,$name)) {
      $nameErr = "* Only letters and white space allowed";
    }
    else if(str_word_count($name)<2){

     $nameErr= "* Name field at least two words";
     $name = " ";
    }

  }
}
if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
  } 
  else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    $emailErr = "* Invalid email ";
    }else{
     $email = $_POST["email"];
    }

  

  if (empty($_POST["day"])) {
    $dayErr = "* Date of birth is required";
  } else {
    $day = $_POST["day"];
    $d = explode("-",$day);
    $dd = (int)$d[2];
    $mm = (int)$d[1];
    $yy = (int)$d[0];
    //yyyy-mm-dd

    if(!($dd<=31 && $dd>=1 && $mm<=12 && $mm>=1 && $yy<=2001 && $yy>=1900)){
     $dayErr = "* Invalid date of birth<br>";
     $day = "";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "* Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

        if(!$err){
  $data['name'] = $_POST['name'];
  $data['e-mail'] = $_POST['email'];
  $data['gender'] = $_POST['gender'];
  $data['day'] = $_POST['day'];
  //var_dump($data);
    if (updatepatient($data)) {
    
    header("location: ../View/View Profile.php");
  } 
}
        


}
?>
<?php
    require("../Model/Forget Password-model.php");
    $emailErr = "";
    $email  = "";
    $_SESSION["emailErr"]="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $err = false;
      if(isset($_POST['sub'])){
        if (empty($_POST["mail"])) {
    $_SESSION["emailErr"] = "* Email is required";
    $err = true;
    } 
    else if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
    $_SESSION["emailErr"] = "* Invalid email ";
     $err = true;
    }else{
     $email = $_POST["mail"];
    }

    if($err){
        header("location: ../View/Forget Password.php");
    }
    
    $f = 0;
    $userData = Get_Data_From_File();
    if($userData != NULL){
        foreach ($userData as $user){
        if($user["e-mail"] === $_POST["mail"]){
            $_SESSION['e-mail'] = $_POST["mail"];
            $f = 1;
            header("location: ../View/FChange Password.php");

        }
    }

      
}
}
}

  ?>
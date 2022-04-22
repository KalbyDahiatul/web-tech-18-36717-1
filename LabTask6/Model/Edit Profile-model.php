<?php 
//session_start();
require_once 'db_connect.php';
function updatepatient($data){
     $conn = db_conn();
     
     
     $selectQuery = "UPDATE `registration` SET `name`=:name,`e-mail`=:email,`gender`=:gender,`dob`=:day WHERE `username` = :uname;";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
         /* ':id' => $data['id'],*/
          ':name' => $data['name'],
          ':email' => $data['e-mail'],
          ':uname' => $_SESSION["username"],
          /*':password' => $data['password'],*/
          ':gender' => $data['gender'],
          ':day' => $data['day']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

?>
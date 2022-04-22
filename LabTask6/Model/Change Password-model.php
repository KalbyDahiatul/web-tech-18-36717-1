<?php 

require_once 'db_connect.php';
function updateuser($data){
     $conn = db_conn();
     
     $selectQuery = "UPDATE `registration` SET `password`=:pass WHERE `username` = :uname;";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
          ':uname' => $_SESSION["username"],
          ':password' => $data['password'],
        ]);
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



?>
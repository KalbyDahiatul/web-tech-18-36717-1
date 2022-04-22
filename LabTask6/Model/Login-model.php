<?php 

require("db_connect.php");

function user_authentication($username, $password){
	$conn = db_conn();
    $selectQuery =  "SELECT * FROM `registration` WHERE `username`= ?;";
 
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]); //, $password
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}



?>
<?php 

function Get_Data_From_File(){
	$userData = json_decode(file_get_contents("../View/data.json"), true);
	return $userData;
}




?>
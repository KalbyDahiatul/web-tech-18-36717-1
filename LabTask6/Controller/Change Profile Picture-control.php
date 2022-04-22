<?php
session_start();
				require("../Model/Change Profile Picture-model.php");
				require("../Model/Registration-model.php");
				
					$img_name = "picture.png";
				// Check if image file is a actual image or fake image
				if(isset($_POST["sub"])) {
					
					$target_dir = "../uploads/";
					$target_file = $target_dir . basename($_FILES["img-file"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$img_name =  $target_dir.basename($_FILES["img-file"]["name"]);

				 
				if ($_FILES["img-file"]["size"] > 400000) {
				  echo "Picture size should not be more than 4MB";
				  $uploadOk = 0;
				}

				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  echo " Picture format must be in jpeg or jpg or png";
				  $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  echo "\nSorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["img-file"]["tmp_name"], $target_file)) {
					$img_name = $_FILES["img-file"]["name"];
				} else {
				    echo "\nSorry,  error uploading your file.";
				  }
				}


				//update the img attribute
				$idx = 0;

				$userData = Get_Data_From_File();
				if($userData != NULL){
					foreach ($userData as $user){
						if($user["username"] === $_SESSION['username']){
							$idx++;
							global $tmp_user;
							$tmp_user = $user;
							$tmp_user["image"] = $img_name;
						}
					}
					if($idx > 0){
						$userData[$idx-1] = $tmp_user;
					}
					//$userData[]=$new_data;
		   //if(Put_Data_From_File($userData))
		     header("location: ../View/View Profile.php");
		   
				}
			}
				?>
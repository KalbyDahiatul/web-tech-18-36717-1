<?php
				require("../Model/View Profile-model.php");
				
				

				?>

				<?php
			    
			  
			    function get_user_view_data($username){
			    	$userData = user_authentication($username);
			    	return $userData;
			    }
			    
			    
			

			?>
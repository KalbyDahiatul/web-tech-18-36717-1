<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../CSS/style.css">
<title></title>
    <style>

    </style>
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-icon">
              <img src="Home-page.png" height="80px" width="80px">

            </div>
            <div class="nav-name">
              <h1>Foodie </h1>
              <p><i>Online Food delivery Website</i></p>
            </div>
            
                <ul><div>
                    <?php if(isset($_SESSION['username'])){ ?>
                    <li><button class="button"><?php echo "Logged in as "?><a href="#"><?php echo $_SESSION['username']; ?></button></a></li>
                    <li><a href="../Controller/Logout.php"><button class="button">Logout</button></a></li>
                    
                    <?php }else{ ?>
                       
                    <li ><a href="../View/Public Home.php"><button class="button">Home</button></a></li>
                    <li><a href="../View/Login.php"><button class="button">Login</button></a></li>
                    <li><a href="../View/Registration.php"><button class="button">Registration</button></a></li>
                    <li><a href="../View/about.php"><button class="button">About Us</button></a></li>
               
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>


<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title></title>
    <style>

    </style>
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-icon">
              <img src="Home-page.png" height="70px" width="50px">

            </div>
            <div class="nav-name">
              <h1>Foodie </h1>
              <p><i>Online Food delivery Website</i></p>
            </div>
            
                <ul><div>
                    <?php if(isset($_SESSION['username'])){ ?>
                    <li><?php echo "Logged in as "?><a href="#"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                    
                    <?php }else{ ?>
                    <li><a href="../View/Public Home.php">Home</a></li>
                    <li><a href="../View/Login.php">Login</a></li>
                    <li><a href="../View/Registration.php">Registration</a></li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>


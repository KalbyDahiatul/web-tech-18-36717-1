<?php 
    session_start();
    require("../models/data-model.php");

    if(isset($_POST["change"])){

        $sl = $_POST["sl"];
        $name = $_POST["pd_name"];
        $product_buying_price = $_POST["pd_buying_price"];
        $product_selling_price = $_POST["pd_selling_price"];

        $_SESSION["pd_msg"] = "";

        if(!empty($name) && !empty($product_buying_price) && !empty($product_selling_price)){
            $data = array(
                "name" => $name,
                "pd_buying_price" => $product_buying_price,
                "pd_selling_price" => $product_selling_price
            );
            if(updateProduct($sl, $data)){
                $_SESSION["pd_msg"] = " Produt Added ";
                
            }else{
                $_SESSION["pd_msg"] = " Data Updation Error ";
            }
            
        }else{
            $_SESSION["pd_msg"] = " All Fields are required ";
        }
        header("location: ../views/list-product-view.php");
    }

?>
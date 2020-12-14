<?php
    session_start();
    include_once "model/product.php";
    include_once "view/home/index.php";
    // include_once "Model/user.php";
    
    // if (isset($_SESSION['sid']) && ($_SESSION['sid']>0)) {
        
    //     include_once "View/admin/index.php";
    // }else{
    //     header("location: index.php?ctrl=login");
    // }
?>
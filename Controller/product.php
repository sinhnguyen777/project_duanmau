<?php
include "Model/product.php";
include "Model/catalog.php";


    $action = 'index';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    
    switch ($action) {
        case 'index':
            $products = getAllProduct();
            $dsdm_hot = Catalog_hot(0,1);
            include_once 'View/Product/index.php';
        break;
        case 'product':
            $dsdm_hot = Catalog_hot(0,1);
            $cataId=$_GET['cataId'];
            $products=getProductByCateID($cataId);
            include_once "View/Product/index.php";
        break;
        case 'product-detail':
            if (isset($_GET['idsp']) && $_GET['idsp']) {
                $pr =$_GET['idsp'];
                $Pro = getProductByCateID($pr);
            }else{
                $id = 0;
            }
            include_once "View/Product-detail/index.php";
        break;
        default:
            include_once 'View/Product/index.php';
        break;
    }
?>


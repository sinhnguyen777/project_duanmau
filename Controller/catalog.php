<?php
    include_once "Model/product.php";
    include_once "Model/catalog.php";

    $action = 'index';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    switch ($action) {
        case 'index':
                $catalogs = getAllCatalog();
                include_once 'index.php';
            break;
        // case 'addnew':
        //     if(isset($_POST['add']) && ($_POST['add'])){
        //         $name=$_POST['nameCatalog'];
        //         $addcatalog = addNewCatalog($name);
        //         header("location: index.php?ctrl=catalog");
        //     }
        //     include_once 'View/admin/catalog/addnew.php';
        //     break;
        // case 'edit':
        //     if(isset($_GET['idedit']) && ($_GET['idedit'])){
        //         $id=$_GET['idedit'];
        //         $dm=getCatalogID($id);
        //     }
        //     if(isset($_POST['update']) && ($_POST['update'])){
        //         $id = $_POST['id'];
        //         $name = $_POST['nameCata'];
        //         updateCatalog($id,$name);
        //         $dm=getCatalogID($id);
        //         header("location: index.php?ctrl=catalog");
        //     }
        //     include_once 'View/admin/catalog/edit.php';
        //     break;
        default:
            include_once "View/Product/index.php";
            break;
    }

?>
<?php
    include_once "Model/catalog.php";
    $action = 'index';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    switch ($action) {
        case 'index':
            if (isset($_GET['iddelete']) && ($_GET['iddelete'])) {
                $id = $_GET['iddelete'];
                // $name = $_GET['name'];
                daleteCatalog($id);
            }
            $catalogs = getAllCatalog();
                include_once '../admin/view/catalog/index.php';
            break;
        case 'addnew':
            if(isset($_POST['add']) && ($_POST['add'])){
                $name=$_POST['nameCatalog'];
                $addcatalog = addNewCatalog($name);
                header("location: index.php?ctrl=catalog");
            }
            include_once '../admin/view/catalog/addnew.php';
            break;
        case 'edit':
            if(isset($_GET['idedit']) && ($_GET['idedit'])){
                $id=$_GET['idedit'];
                $dm=getCatalogID($id);
            }
            if(isset($_POST['update']) && ($_POST['update'])){
                $id = $_POST['id'];
                $name = $_POST['nameCata'];
                updateCatalog($id,$name);
                $dm=getCatalogID($id);
                header("location: index.php?ctrl=catalog");
            }
            include_once '../admin/view/catalog/edit.php';
            break;
        default:
            include_once "View/admin/catalog/index.php";
            break;
    }

?>
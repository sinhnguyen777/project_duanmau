<?php
include_once "Model/catalog.php";
include_once "Model/product.php";
    $action = 'index';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    switch ($action) {
        case 'index':

            // ---------------------------------------------------------------------------
            // Viết code delete ngay tại index vì khi click vào button ở trang index 
            // sẽ xoá ngay lập tức ko cần phải chuyển trang
            // ---------------------------------------------------------------------------

            if (isset($_GET['iddelete']) && ($_GET['iddelete'])) {
                $id = $_GET['iddelete'];
                deleteProduct($id);
            }

            


            $products = getAllProduct();
            include_once '../admin/view/product/index.php';
            break;
        case 'add-product':
            $products = getAllCatalog();
            if(isset($_POST['add']) && ($_POST['add'])){
                $id_catalog= $_POST['nameCataID'];
                $name=$_POST['nameProduct'];
                $price=$_POST['priceProduct'];
                $img = $_FILES['imageProduct']['name']; //lấy tên hình
                $path = 'public/images/'. basename($img);
                if(move_uploaded_file($_FILES['imageProduct']['tmp_name'], $path)){
                    $add = addNewProduct($id_catalog,$name,$price,$img);
                }
                $products = getAllProduct();
                header('location: index.php?ctrl=product');
            }
            include_once '../admin/view/product/add-product.php';
            break;
    
        case 'insert':
            //lấy data từ form
            $id = $_POST['nameCataID'];
            $name = $_POST['nameProduct'];
            $price = $_POST['priceProduct'];
            $img = $_FILES['imageProduct']['name']; //lấy tên hình
            $path = 'public/images/'.$img;
            if (move_uploaded_file($_FILES['imageProduct']['tmp_name'], $path)){
                addNewProduct($id, $name, $price, $img, $id_catalog);
            }
            header('location: index.php?ctrl=product');
            break;
        case 'edit':
            if(isset($_GET['idedit']) && ($_GET['idedit'])){
                $id=$_GET['idedit'];
                $sp=getProductID($id);
            }

            //Update sản phẩm
            if(isset($_POST['update']) && ($_POST['update'])){
                $id = $_POST['idProduct'];
                $name = $_POST['nameProduct'];
                $price = $_POST['priceProduct'];
                $img = $_FILES['imgProduct']['name'];
                $path = 'public/images/'. basename($img);
                if (move_uploaded_file($_FILES['imgProduct']['tmp_name'], $path)){
                   $sp = updateProduct($id, $name, $price, $img);
                }
                $sp=getAllProduct($id);
                header("location: index.php?ctrl=product");
            }
            include_once '../admin/view/product/edit-product.php';
            break;
        
        default:
            include_once '../admin/view/catalog/index.php';
        break;
    }
?>
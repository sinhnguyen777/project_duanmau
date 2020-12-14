<?php
    include_once "Model/connect.php";
    function getAllProduct(){
        $sql = "SELECT * FROM product ORDER BY id";
        return query($sql);
    }
    
    function addNewProduct($id_catalog, $name, $price, $img){   
        $sql = "INSERT INTO product (id_catalog, name, price, img) values('$id_catalog','$name', '$price', '$img')";
        return execute($sql);
    }
    function getProductID($id){
        $sql = "SELECT *FROM product WHERE 1 AND id=".$id;
        return queryOne($sql);
    }

    function updateProduct($id, $name, $price, $img){
        $sql = "UPDATE product SET name='$name', price='$price', img='$img' WHERE id=".$id;
        return execute($sql);
    }
    function deleteProduct($id){
        $sql="DELETE FROM product WHERE id=".$id;
        execute($sql);
    }

?>
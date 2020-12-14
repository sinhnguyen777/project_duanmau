<?php
    include_once "Model/connect.php";
    function getAllCatalog(){
        $sql = "SELECT * FROM catalog ORDER BY id";
        return query($sql);
    }
    
    function addNewCatalog($name){
        $sql = "INSERT INTO catalog(name) values('$name')";
        return execute($sql);
    }
    function getCatalogID($id){
        $sql = "SELECT *FROM catalog WHERE 1 AND id=".$id;
        return queryOne($sql);
    }
    function updateCatalog($id, $name){
        $sql = "UPDATE catalog SET name='$name' WHERE id=".$id;
        return execute($sql);
    }
    function daleteCatalog($id){
        $sql="DELETE FROM catalog WHERE id=".$id;
        execute($sql);
    }

?>
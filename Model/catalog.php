<?php
    include_once "Model/connect.php";
    function getAllCatalog(){
        $sql = "SELECT * FROM catalog ORDER BY id";
        return query($sql);
    }
    
    function getCatalogID($id){
        $sql = "SELECT * FROM catalog WHERE 1 AND id=".$id;
        return queryOne($sql);
    }
    

    function Catalog_hot($hot){
        $sql = "SELECT * FROM catalog WHERE 1";
        if ($hot==1) {
            $sql.=" AND hot=1";
        }
        
        $sql .=" ORDER BY sort desc";
        return query($sql);
    }

    function getcataloglevel1(){
        $sql="SELECT * from catalog where parent=0";
        return query($sql);
    }
    function getcataloglevel2($id_parent){
        $sql="SELECT * from catalog where parent=".$id_parent;
        return query($sql);
    }

?>
<?php
    include_once "Model/connect.php";
    function getAllProduct(){
        $sql = "SELECT * FROM product ORDER BY id";
        return query($sql); 
    }
    function getProductID($id){
        $sql = "SELECT *FROM product WHERE 1 AND id=".$id;
        return queryOne($sql);
    }

    function getProductByCateID($pr){
        $sql="SELECT * from product where id='$pr'";
        return query($sql);
    }
    function getTopView(){
        $sql="SELECT * from product 
        order by view DESC limit 4";
        return query($sql);
    }
    function getLowPrice(){
        $sql="SELECT * from product 
        order by price limit 4";
        return query($sql);
    }

      function getProductgByID($id)
      {
          $sql="SELECT * from product where 1 AND id=".$id;
          return queryOne($sql);

      }

?>
<?php
    function statistical(){
        $sql = "SELECT catalog.name, count(product.id) as tongso
                from catalog, product
                where catalog.id = product.id_catalog
                GROUP BY catalog.name";
        return query($sql);
    }
?>  
<?php
    include_once "Model/catalog.php";
    include_once "Model/product.php";
    $catalogs = getAllCatalog();
    $toppro = getTopView();
    $lwopro = getLowPrice();
    include_once "View/Home/index.php";
?>
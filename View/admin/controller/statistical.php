<?php
    include_once "Model/statistical.php"; 
    include_once "Model/catalog.php";
    include_once "Model/connect.php";
    $action = 'index';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    switch ($action) {
        case 'index':
            $statistical = statistical();
            include_once '../admin/view/statistical/index.php';
        break;
        case 'chart':
            if(statistical("chart")){
                $VIEW_NAME = "../admin/view/statistical/chart.php";
            }
            else{
                $VIEW_NAME = "../admin/view/statistical/index.php";
            }
            $items = statistical();
            include_once "../admin/view/statistical/chart.php";
        break;
        
    }
?>
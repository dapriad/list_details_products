<?php
session_start();
//include  with absolute route
include ($_SERVER['DOCUMENT_ROOT'] . "/Projecte_1.0/utils/common.inc.php");

if (isset($_GET["idProduct"])) {
    $id = $_GET["idProduct"];
    $path_model = $_SERVER['DOCUMENT_ROOT'].'/Projecte_1.0/modules/frontend_products/model/model/';
    $arrValue = loadModel($path_model, "frontend_products_model", "details_products",$id);
    if ($arrValue[0]) {
        loadView('modules/frontend_products/view/', 'details_products.php', $arrValue[0]);
        
    } else {
        $message = "NOT FOUND PRODUCT";
        loadView('view/inc/', '404.php', $message);
    }
} else {
    
    $path_model = $_SERVER['DOCUMENT_ROOT'].'/Projecte_1.0/modules/frontend_products/model/model/';
    $arrValue = loadModel($path_model, "frontend_products_model", "list_products");
    // print_r($arrValue);
    if ($arrValue) {
        loadView('modules/frontend_products/view/', 'list_products.php', $arrValue);
    } else {
        $message = "NOT PRODUCTS";
        loadView('view/inc/', '404.php', $message);
    }
}
<?php 
require_once __DIR__ . "/models/products-model.php";


$productId = "";

if(!empty($_GET['productId'])) {
    $productId = $_GET['productId'];
} 

$product = getOneProductById($productId);

require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-checkout.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
?>

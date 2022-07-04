<?php


require_once __DIR__ . "/Models/Product.php";

// USING MODELS
use Models\Product\Product;

if(empty($_GET['productId'])) {
    header("Location: ./not-found.php");
    
}

$productId = $_GET['productId'];
$product = Product::getOneProductById($productId);
$numberOfGuests = 1;

if(!$product) {
    header("Location: ./not-found.php");
}

$relatedProducts = $product->getRelatedProducs();



// Header
require __DIR__ . "/views/_layout/v-header.php";


// PAGE CONTENT
require __DIR__ . "/views/v-single-product.php";


// Footer
require __DIR__ . "/views/_layout/v-footer.php";


?>
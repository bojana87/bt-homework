<?php
require_once __DIR__ . "/models/products-model.php";

$systemMessage = "PAGE NOT FOUND 404!!!";

if(empty($_GET['page'])) {
    die($systemMessage);
}
$productId = $_GET['page'];

$product = getOneProductById($productId);

$relatedProducts = getRelatedProducs($product);

if(!$product) {
    die($systemMessage);
}

// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-single-product.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
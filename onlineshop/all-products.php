<?php
session_start();

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Cart.php";

// USING MODELS
use Models\Product\Product;

$products = Product::getAvailableProducts();

$filter = '';
$sort = '';

if(!empty($_GET['sort'])) {
    $sort = $_GET['sort'];
}

if(!empty($_GET['filter'])) {
    $filter = $_GET['filter'];
}
if(!empty($_GET['sort'])) {
    $sort = $_GET['sort'];
}


$products = Product::getAllProducts();
$page = 1;
$productsPerPage = 8;

$numberOfPages = ceil(count($products) / $productsPerPage);

if ($filter !== "" || $sort !== "") {
    $products = Product::filteredProducts($products, $filter, $sort);
}

// SHOPPING CART (SESSION)
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if(isset($_POST['productId']) && !empty($_POST['productId'])) {
    $_SESSION['cart'][] = $_POST['productId'];
}


// Header
require __DIR__ . "/views/_layout/v-header.php";


// PAGE CONTENT
require __DIR__ . "/views/v-products.php";


// Footer
require __DIR__ . "/views/_layout/v-footer.php";


?>
<?php

require_once __DIR__ . "/models/products-model.php";

$filter = "";
$sort = "";

if(!empty($_GET['filter'])) {
    $filter = $_GET['filter'];
}
if(!empty($_GET['sort'])) {
    $sort = $_GET['sort'];
}


$products = getAllProducts();

if ($filter !== "" || $sort !== "") {
    $products = filteredProducts($products, $filter, $sort);
}

require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-products.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
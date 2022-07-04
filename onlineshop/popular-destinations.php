<?php
session_start();
require_once __DIR__ . "/Models/Product.php";

// USING MODELS
use Models\Product\Product;

$randomProducts = Product::getRandomProducts();

//header
require __DIR__ . "/views/_layout/v-header.php";

//main
require __DIR__ . "/views/v-related-products.php";

//footer
require __DIR__ . "/views/_layout/v-footer.php";

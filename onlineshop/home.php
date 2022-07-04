<?php
session_start();
require_once __DIR__ . "/Models/Product.php";

// USING MODELS
use Models\Product\Product;

$randomProducts = Product::getRandomProducts();

// Header
require __DIR__ . "/views/_layout/v-header.php";

// Homepage Hero Header
require __DIR__ . "/views/_layout/v-hero.php";

// PAGE CONTENT
require __DIR__ . "/views/_layout/v-carousel.php";

require __DIR__ . "/views/v-related-products.php";

// Footer
require __DIR__ . "/views/_layout/v-footer.php";


?>
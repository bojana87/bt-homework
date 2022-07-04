<?php

session_start();

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Cart.php";
require_once __DIR__ . "/Models/ShoppingCartProduct.php";


// USING MODELS
use Models\Product\Product;
use Models\Cart\Cart;
use Models\ShoppingCartProduct\ShoppingCartProduct;


$items = [];
$productId = '';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$shoppingCart = new Cart($_SESSION['cart']);


if(!empty($_POST['productId']) && !empty($_POST['numberOfGuests'])) {
    // Check if product exists before adding it to cart
    $productId = $_POST['productId'];
    $quantity = $_POST['numberOfGuests'];

    $product = Product::getOneProductById($productId);
   
    if(!$product) {
        header("Location: ./not-found.php");
    }
    
    $newCartItem = new ShoppingCartProduct($product, 5);


    $shoppingCart->addToCart($product, $quantity);
    $shoppingCart->updateSession();

}

$items = $shoppingCart->getItems();

$numberOfGuests = '';


if(!$items) {
    header("Location: ./" . "all-products.php");
}


// Header
require __DIR__ . "/views/_layout/v-header.php";


// PAGE CONTENT
require __DIR__ . "/views/v-shopping-cart.php";


// Footer
require __DIR__ . "/views/_layout/v-footer.php";


?>
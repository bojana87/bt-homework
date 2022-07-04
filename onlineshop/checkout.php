<?php
session_start();
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Cart.php";
require_once __DIR__ . "/Models/checkout-model.php";

// USING MODELS
use Models\Product\Product;
use Models\Cart\Cart;

$productId = "";
$errors = [];
$name = "";
$lastname = "";
$email = "";
$city = "";
$phone = "";
$streetandnumber ="";
$zip = "";
$comment = "";

if (isset($_POST["checkoutSubmitted"])) {

    $errors = validateCheckout($_POST);

    if (!isset($errors['name'])) {
        $name = trim($_POST['name']);
        $_SESSION["buyerName"] = $name;
    }

    if (!isset($errors['last_name'])) {
        $lastname = trim($_POST['last_name']);
        $_SESSION["buyerLastName"] = $lastname;
    }

    if (!isset($errors['email'])) {
        $email = trim($_POST['email']);
    }

    if (!isset($errors['city'])) {
        $city = trim($_POST['city']);
    }

    if (!isset($errors['phone'])) {
        $phone = trim($_POST['phone']);
    }

    if (!isset($errors['street_and_number'])) {
        $streetandnumber = trim($_POST['street_and_number']);
    }
    if (!isset($errors['zip'])) {
        $zip = trim($_POST['zip']);
    }

    if (count($errors) == 0) {
        header("Location: ./thank-you.php");
    }
    

}



if(!empty($_GET['productId'])) {
    $productId = $_GET['productId'];
} 

$shoppingCart = new Cart($_SESSION['cart']);
$cartProducts = $shoppingCart->getItems();
$product = Product::getOneProductById($productId);

if(!$cartProducts) {
    header("Location: ./" . "all-products.php");
}

// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-checkout.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
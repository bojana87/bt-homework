<?php
session_start();

$removeProductId = "";
$pageRedirect = "";

function redirectToPage($pageUrl) {
    if (!$pageUrl) {
        header("Location: ./shopping-cart.php");
        return;
    } else {
        header("Location: ./" . $pageUrl);
        return;
    }
}

if (isset($_POST['pageRedirect'])) {
    $pageRedirect = $_POST['pageRedirect'];
}

if (isset($_POST['product_id'])) {
    $removeProductId = $_POST['product_id'];
}



if(!empty($_SESSION['cart'])) {
    if($removeProductId) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if($item["id"] == $removeProductId || $item == null) {
                unset($_SESSION['cart'][$key]);
            }
        }
    }
} 

redirectToPage($pageRedirect);



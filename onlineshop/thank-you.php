<?php

session_start();

$error = '';
$name = $_SESSION["buyerName"];
$lastname = $_SESSION["buyerLastName"];

if (!$name || !$lastname) {
    
    header("Location: ./all-products.php");
} 
session_unset();


require __DIR__ . "/views/_layout/v-header.php";

require __DIR__ . "/views/v-thank-you.php";

require __DIR__ . "/views/_layout/v-footer.php";



?>
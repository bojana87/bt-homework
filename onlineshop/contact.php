<?php
session_start();
$error = '';
$name = '';
$email = '';
$message = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);
    header("Location: ./thank-you-contact.php");
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


//include DB
include "database/user.php"; 
$user = new Users();
try {
    $user->setUser($name, $email, $message);
  }
   catch (\Throwable $exception) {
    echo  "Error message: " . $exception->getMessage() . "<hr>";
  }

// Header
require __DIR__ . "/views/_layout/v-header.php";


// PAGE CONTENT
require __DIR__ . "/views/v-contact.php";


// Footer
require __DIR__ . "/views/_layout/v-footer.php";


?>
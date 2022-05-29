<?php

$error = '';

if (
    isset($_POST['name']) && !empty(trim($_POST['name'])) && !is_numeric(trim($_POST['name'])) &&
    isset($_POST['last_name']) && !empty(trim($_POST['last_name'])) && !is_numeric(trim($_POST['last_name'])) &&
    isset($_POST['email']) && !empty($_POST['email']) && str_contains($_POST['email'], '@') &&
    isset($_POST['city']) && !empty($_POST['city']) && !is_numeric($_POST['city']) &&
    isset($_POST['phone']) && !empty($_POST['phone']) && 
        is_numeric($_POST['phone']) && 
        strlen($_POST['phone']) <= 11 && 
        strlen($_POST['phone']) >= 9 &&
    isset($_POST['street_and_number']) && !empty($_POST['street_and_number']) &&
    isset($_POST['zip']) && !empty($_POST['zip']) && is_numeric($_POST['zip']) && 
    isset($_POST['comment']) &&
    isset(($_POST['checkbox'])) && ($_POST['checkbox'] == '1')
) {
    $name = trim($_POST['name']);
    $lastname = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $city = trim($_POST['city']);
    $phone = trim($_POST['phone']);
    $streetandnumber = trim($_POST['street_and_number']);
    $zip = trim($_POST['zip']);
    $comment = trim($_POST['comment']);
    $checkbox = ($_POST['checkbox']);

} else {

    if (empty(trim($_POST['name']))) {
        $error = $error . " Name field is required <br>";
    }
    
    if (is_numeric(trim($_POST['name']))) {
        $error = $error . " Name can't be a numeric value <br>";
    }
    
    if (is_numeric(trim($_POST['last_name']))) {
        $error = $error . " Last name can't be a numeric value <br>";
    }

    if (empty(trim($_POST['last_name']))) {
        $error = $error . " Last name field is required <br>";
    }

    
    if (!str_contains($_POST['email'], '@')) {
        $error = $error . " Email not valid <br>";
    }

    if (!is_numeric($_POST['phone'])) {
        $error = $error . " Phone number must be a numeric value <br>";
    }
    
    if (strlen($_POST['phone']) > 11 || strlen($_POST['phone']) < 9) {
        $error = $error . " Phone number must contain between 9 and 11 digits <br>";
    }
    
    if (!is_numeric($_POST['zip'])) {
        $error = $error . " ZIP number must be a numeric value <br>";
    }

    if (is_numeric($_POST['city'])) {
        $error = $error . " City can't be a numeric value<br>";
    }


}


require __DIR__ . "/views/_layout/v-header.php";

require __DIR__ . "/views/v-purchase.php";

require __DIR__ . "/views/_layout/v-footer.php";

?>
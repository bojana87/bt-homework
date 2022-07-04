<?php 

function validateCheckout($post) {

    $error = [];

    if (
        isset($post['name']) && !empty(trim($post['name'])) && !is_numeric(trim($post['name'])) &&
        isset($post['last_name']) && !empty(trim($post['last_name'])) && !is_numeric(trim($post['last_name'])) &&
        isset($post['email']) && !empty($post['email']) && str_contains($post['email'], '@') &&
        isset($post['city']) && !empty($post['city']) && !is_numeric($post['city']) &&
        isset($post['phone']) && !empty($post['phone']) && 
            is_numeric($post['phone']) && 
            strlen($post['phone']) <= 11 && 
            strlen($post['phone']) >= 9 &&
        isset($post['street_and_number']) && !empty($post['street_and_number']) &&
        isset($post['zip']) && !empty($post['zip']) && is_numeric($post['zip']) && 
        isset($post['comment']) &&
        isset(($post['checkbox'])) && ($post['checkbox'] == '1')
    ) {

        return $error;

        $name = trim($post['name']);
        $lastname = trim($post['last_name']);
        $email = trim($post['email']);
        $city = trim($post['city']);
        $phone = trim($post['phone']);
        $streetandnumber = trim($post['street_and_number']);
        $zip = trim($post['zip']);
        $comment = trim($post['comment']);
        $checkbox = ($post['checkbox']);
    
    } else {
    
        if (empty(trim($post['name']))) {
            $error['name'] = "Name field is required!" ;
        }
        
        if (is_numeric(trim($post['name']))) {
            $error['name'] = "Name can't be a numeric value!";
        }
        
        if (is_numeric(trim($post['last_name']))) {
            $error['last_name'] = "Last name can't be a numeric value!";
        }
    
        if (empty(trim($post['last_name']))) {
            $error['last_name'] = "Last name field is required!";
        }
    
        
        if (!str_contains($post['email'], '@')) {
            $error['email'] = "Email not valid!";
        }
    
        if (!is_numeric($post['phone'])) {
            $error['phone'] = "Phone number must be a numeric value!";
        }
        if (empty($post['street_and_number'])) {
            $error['street_and_number'] = "Street and number field is required!";
        }
        
        if (strlen($post['phone']) > 11 || strlen($post['phone']) < 9) {
            $error['phone'] = "Phone number must contain between 9 and 11 digits!";
        }
        
        if (!is_numeric($post['zip'])) {
            $error['zip'] = "ZIP number must be a numeric value!";
        }
    
        if (is_numeric($post['city'])) {
            $error['city'] = "City can't be a numeric value!";
        }
        if (empty($post['city'])) {
            $error['city'] = "City is required!";
        }
    
    }
    return $error;
   
}


?>
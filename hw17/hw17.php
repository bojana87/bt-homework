<?php

$users = [
    ["name" => "Pera", "last_name" => "Miric", "img" => ""],
    ["name" => "Mitar", "last_name" => "Miric", "img" => ""],
    ["name" => "Marko", "last name" => "ILic", "img" => ""],
    ["name" => "Jelena", "last name" => "Mirkovic", "img" => ""],
];


function searchUsers ($listOfUsers, $searchContent) {
    $filtriraniNiz = [];
    
    foreach ($listOfUsers as $user) {

        foreach ($user as $key => $value) {
            $lowerCaseValue = strtolower($value);
            if (
                str_contains($value, $searchContent) || 
                str_contains($lowerCaseValue, $searchContent)
            ) {
               array_push($filtriraniNiz, $user);
            } 
        }
    }        

    return $filtriraniNiz;
};

function stampajNadjeneKorisnike($list) {

    if ($list === []) {
        echo "Lista je prazna";
        return;
    }

    foreach ($list as $key => $value) {
        echo implode($value) . '<br>';
    }
}

$newUserList = searchUsers($users, "Jelena");

stampajNadjeneKorisnike($newUserList);

?>

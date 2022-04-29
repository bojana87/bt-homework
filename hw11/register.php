<?php

if (   
    isset($_GET['gender']) && 
    isset($_GET['name']) && !empty($_GET['name']) && 
    isset($_GET['surname']) && !empty($_GET['surname']) &&
    isset($_GET['email']) && !empty($_GET['email']) &&
    isset($_GET['password']) && !empty($_GET['password']) &&
    isset($_GET['courses']) 
    ) {
        $gender = $_GET['gender'];
        $ime = $_GET['name'];
        $prezime = $_GET['surname'];
        $email = $_GET['email'];
        $lozinka = $_GET['password'];
        $kursevi = $_GET['courses'];

        if ($gender == "muski") {
            echo "Postovani, ";
        } else if ($gender == "zenski") {
            echo "Postovana, ";
        }  
        echo $ime . " " . $prezime . "<br>" . "Uspesno ste se registrovali na nasem sajtu. <br>";

        echo "Vasa email adresa je: " . $email . "<br>" .
        "Vasa lozinka je: " . $lozinka . "<br>" .
        "Vasi odabrani kursevi su: <br>";  
        
        for ($i = 0; $i < count($kursevi); $i++) {
            echo $kursevi[$i] . "<br>";
        }

} else {
    echo "Molimo popunite sva polja <br>";

}
?>
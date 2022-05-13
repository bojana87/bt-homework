<?php

function izracunaj($gorivo, $potrosnja, $ostatak = false) {
    $brojKamionaKojiMoguDaPredjuRutu = $gorivo / $potrosnja;
    if (!$ostatak) {
        $tacanBrojKamiona = intval($brojKamionaKojiMoguDaPredjuRutu);
        echo "Broj kamiona koji mogu da predju rutu je: " . $tacanBrojKamiona;
        return $tacanBrojKamiona;

    } else {
        $visakGoriva = $brojKamionaKojiMoguDaPredjuRutu - intval($brojKamionaKojiMoguDaPredjuRutu);
        $ostatakUlitrima = $visakGoriva * $potrosnja; 
        echo "Ostatak goriva u litrima je : " . $ostatakUlitrima;
        return $ostatakUlitrima;
    }
}

izracunaj(126, 25, true);




?>
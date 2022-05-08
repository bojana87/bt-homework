<?php


function izracunajFaktorAktivnosti($zanimanje) {
    if ($zanimanje === "programer" || $zanimanje === "administrativni radnik" || $zanimanje === "menadzer" ) {
      return 100;
    } else if ($zanimanje === "policajac" || $zanimanje === "vojnik") {
      return 200;
    } else if ($zanimanje === "sportista") {
      return 300;
    } else {
      return 150;
    }
  }

  
function izracunajFaktorStarosti($broj) {
    if ($broj >= 0 && $broj <=3) {
      return 1.9;
    } else if ($broj >=  4 && $broj <=10) {
      return 1.5;
    } else if ($broj >= 11 && $broj <=18) {
      return 1.2;
    } else if ($broj >=19 && $broj <=26 ) {
      return 1;
    } else if (($broj >=27 && $broj <= 30) || ( $broj >= 50 && $broj <= 60)) {
      return 0.8;
    } else if (($broj >= 31 && $broj <= 35) || ($broj >= 45 &&  $broj <= 49)) {
      return 0.7;
    } else if (($broj >= 36 && $broj <= 44) || $broj > 60 ) {
      return 0.6;
    } 
  }
  


$sum = "";

if (
    isset($_POST['submit']) &&
    isset($_POST['zanimanje']) && !empty($_POST['zanimanje']) &&
    isset($_POST['godine']) && !empty($_POST['godine']) &&
    isset($_POST['tezina']) && !empty($_POST['tezina'])
    ) {
    $zanimanje = $_POST['zanimanje'];
    $godine = $_POST['godine'];
    $tezina = $_POST['tezina'];
    $indexaktivnosti = izracunajFaktorAktivnosti($zanimanje);
    $indexstarosti = izracunajFaktorStarosti($godine);

$sum = $indexstarosti * $tezina * $indexaktivnosti;
echo "Maksimum kalorija je: " . $sum; 
} else {
    echo "Unesite sve parametre!";
}

?>
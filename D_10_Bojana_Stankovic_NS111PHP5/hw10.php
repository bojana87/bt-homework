<?php

// zadatak 1//
$a = 200;
$b = 80;
$c = $a + $b;
echo $c;

$d = $a * $b;
echo $d;

$e = $a - $b;
echo $e;

$f = $a / $b;
echo $f;

//zadatak 2 //

$a = rand(0,6);

if ($a==0) {
    echo "Danas je ponedeljak!";
} else if ($a==1) {
    echo "Danas je utorak!";
} else if ($a==2) {
    echo "Danas je sreda!";
} else  if ($a==3) {
    echo "Danas je cetvrtak!";
} else if ($a==4) {
    echo "Danas je petak!";
} else if ($a==5) {
    echo "Danas je subota!";
} else if ($a==6) {
    echo "Danas je nedelja!";
}

//zadatak 3 //

$a = 2;
$b = 5;
$c = 10;
$d = $a + $b + $c;

echo "Zbir brojeva " . $a . ", " . $b . " " . "i" . " " . $c . " je " .$d;



?>
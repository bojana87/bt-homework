<?php

$calculateRectangle = 1;
$calculateCircleArea =1;
$izracunajUkupnuPovrsinu = 0;

$a = 2;       //rand(1,1000);
$b = 3;      //rand (1, 1000);
$pi = round(pi(),2);

// pravougaonik
function calculateRectangleArea($x, $y) {
    return $x * $y;
}

//krug
function calculateCircleArea ($p, $y) {
    return $p * ($y * $y);
}

//polukrug
function calculateSemicircleArea ($p, $y) {
    return $p * ($y * $y) / 2;
}

// povrsina celog bazena
function totalArea($x, $y, $p) {
    
    $povrsinaPravougaonika = calculateRectangleArea($x, $y);
    $povrsinaPolukruga = calculateSemicircleArea($p, $y);
    
    echo "<br> Povrsina polukruga je: ". calculateSemicircleArea ($p, $y);  
    echo "<br> Povrsina pravougaonika je: ". calculateRectangleArea($x, $y);  
    echo "<br> Ukupna povrsina je: " . $povrsinaPolukruga + $povrsinaPravougaonika;  
}

totalArea($a, $b, $pi);

?>
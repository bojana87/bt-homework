<?php
//zadatak 1
$ucenici = array("Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira");
print_r($ucenici);
array_push($ucenici,"Bojana");
echo "<br>";
print_r($ucenici);
$dodaj = array ("Ana");
array_splice($ucenici,2, 0, $dodaj);
echo "<br>";
print_r($ucenici);
print_r(count($ucenici));
array_unshift($ucenici, "Luka");
echo "<br>";
print_r($ucenici);
unset($ucenici[6]);
echo "<br>";
print_r($ucenici);
$novinizucenika = array_values($ucenici);  
echo "<br>";
print_r($novinizucenika);
$noviNedupliraniNiz = array_unique($novinizucenika, $f = SORT_STRING);
echo "<br>";
print_r($noviNedupliraniNiz);

if(array_search("Bojana", $ucenici) !=false) {
    echo "Niz sadrzi ime.";
} else {
    array_push($ucenici,"Bojana");
    echo "<br>";
    print_r($ucenici);
}

//zadatak 2

$data = array(
    array("name" => "Pera",	"last_name" => "Peric",	"age" => 28, "gender" => "male","avg_rating" => 7.5,"married" => false,	"courses" => ["laravel", "react", "jQuery"]),
    array("name" => "Bojana","last_name" => "Stankovic","age" => 35,"gender" => "female","avg_rating" => 6,"married" => true,"courses" => ["php", "css", "html"]),
    array("name" => "Vlada","last_name" => "Ilic","age" => 40, "gender" => "male","avg_rating" => 9.5,"married" => false,"courses" => ["html", "css", "js"]),
    array("name" => "Ana","last_name" => "Jovanovic","age" => 32, "gender" => "female","avg_rating" => 8.5,"married" => true,"courses" => ["laravel", "react", "css"]),

);


foreach ( $data as $niz ) {

     if ($niz['gender']=="male"&& $niz['married']==false){
         echo "<br>". $niz['name']." " . $niz['last_name'] . " ima " .$niz['age'] ." godina i nije ozenjen. Prosek ocena je " . $niz['avg_rating']." i slusa kurseve: " .$niz['courses'][0]. ", ".$niz['courses'][1]. ", ".$niz['courses'][2];}
     else if ($niz['gender']=="female"&& $niz['married']==true){
         echo "<br>". $niz['name']." " . $niz['last_name'] . " ima " .$niz['age'] ." godina i udata je. Prosek ocena je " . $niz['avg_rating']." i slusa kurseve: " .$niz['courses'][0]. ", ".$niz['courses'][1]. ", ".$niz['courses'][2];}
     else if ($niz['gender']=="male"&& $niz['married']==true) {
         echo "<br>". $niz['name']." " . $niz['last_name'] . " ima " .$niz['age'] ." godina i ozenjen je. Prosek ocena je " . $niz['avg_rating']." i slusa kurseve: " .$niz['courses'][0]. ", ".$niz['courses'][1]. ", ".$niz['courses'][2];}
     else if ($niz['gender']=="female"&& $niz['married']==false) {
         echo "<br>". $niz['name']." " . $niz['last_name'] . " ima " .$niz['age'] ." godina i nije udata. Prosek ocena je " . $niz['avg_rating']." i slusa kurseve: " .$niz['courses'][0]. ", ".$niz['courses'][1]. ", ".$niz['courses'][2];}
    }
   

   
?>

<?php 

//zadatak 1
$listaMejlova = array("bbbbb@bbb.com", "cccccc@ccc.com", "eeeee.com");

function proveriDaLiJeMejl($value) {
   if (str_contains($value, "@")) {
      return true;
   } else {
      return false;
   }
}

function filtrirajMejlove($lista) {
   $listaValidnihMejlova = array();

   foreach ($lista as $item) {
      $mejlJeValidan = proveriDaLiJeMejl($item);
      if ($mejlJeValidan) {
         array_push($listaValidnihMejlova, $item);
      } 
   }
   return $listaValidnihMejlova;
}

$validniMejlovi = filtrirajMejlove($listaMejlova);

print_r($validniMejlovi);

// zadatak 2

$nizBrojeva = array(100,40,60);

function racunanje($niz, $operacija = "+") {

   $temporaryValue = 0;
   if ($operacija === "*") {
      $temporaryValue = 1;
   } 

   if ($operacija === "/") {
      $temporaryValue = $niz[0];
   } 

   foreach ($niz as $item) {
      if ($operacija === "+") {
         $temporaryValue += $item;
      } else if  ($operacija === "=") {
         $temporaryValue -= $item;
      } elseif ( $operacija === "*") {
         $temporaryValue *= $item;
      }
      elseif ($operacija === "/") {
         $temporaryValue /= $item;
      }
   }

   print_r($temporaryValue);

}

racunanje($nizBrojeva, "/");


// zadatak 3 

$asocijativniNiz = array(
   array("ime"=>"Bojana", "grad"=>"Leskovac", "godine"=>34),
   array("ime"=>"Vlada", "grad"=>"Leskovac", "godine"=>35)
);

function proveriDaLiPostojiKljuc($key, $array) {

   foreach ($array as $lista ) {
      if (array_key_exists($key, $lista)) {
      echo $key . " postoji u listi";
      return true;
   } else {
      echo $key . " ne postoji u listi";
      return false;
   }
   }

}

$provera = proveriDaLiPostojiKljuc("ddd", $asocijativniNiz);


?>

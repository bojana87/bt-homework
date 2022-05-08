<?php
$dan = 1;
$puz = 3;
$drvo = 100;

while ($puz < $drvo) {
    $dan ++;
    $puz = $puz + 3;
    $drvo = $drvo + 1;

    echo "Dan " .$dan ." : Puz je presao " .$puz . " cm. Drvo je poraslo " .$drvo ." cm." . "<br>";  
}

echo "Puzu je trebalo " . $dan . " dana da se popne na drvo.";


?>
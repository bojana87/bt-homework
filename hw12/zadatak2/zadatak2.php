<?php

$sum = "";

if (
    isset($_POST['submit']) &&
    isset($_POST['sirinazida']) && !empty($_POST['sirinazida']) &&
    isset($_POST['visinazida']) && !empty($_POST['visinazida']) &&
    isset($_POST['sirinaplocice']) && !empty($_POST['sirinaplocice']) &&
    isset($_POST['visinaplocice']) && !empty($_POST['visinaplocice'])
    ) {
        $sirinazida = $_POST['sirinazida'];
        $visinazida = $_POST['visinazida'];
        $sirinaplocice = $_POST['sirinaplocice'];
        $visinaplocice = $_POST['visinaplocice'];
        $povrsinazida = $sirinazida * $visinazida;
        $povrsinaplocice = $sirinaplocice * $visinaplocice;

        $sum = $povrsinazida / $povrsinaplocice;
        echo "Potreban broj plocica je " .round($sum, 2) . ".";
    } else {
        echo "Niste uneli sve potrebne parametre!";
    }




?>
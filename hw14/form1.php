<?php
if (empty($_POST)) {
    die("ERROR!");
}
if (
    isset($_POST['date']) && !empty($_POST['date']) &&
    isset($_POST['month']) && !empty($_POST['month']) &&
    isset($_POST['year']) && !empty($_POST['year'])
    ) {
        $dan = $_POST['date'];
        $mesec = $_POST['month'];
        $godina = $_POST['year'];
        
        if (!is_numeric($dan) || !is_numeric($mesec) || !is_numeric($godina)) {
            die("Parametri moraju biti brojevi!");
        }

        if (!checkdate($mesec, $dan, $godina)) {
            echo "datum nije validan!";
        } else {
            echo "uneti datum je: " . $dan."-" .$mesec."-".$godina;
        }
    }

?>
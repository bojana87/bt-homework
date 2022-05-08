<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator kalorija</title>
    <link rel="stylesheet" href="zadatak1.css">
</head>

<body>
    <div class="container">
        <div class="form-wrapper">
            <h4>Kalkulator kalorija</h4>
            <form method="POST" action="zadatak1.php" target="rezultat">
                <label> Unesite tezinu:
                    <input type="number" name="tezina" placeholder="Vasa tezina">
                </label> <br>
                <label>Unesite zanimanje:
                    <input type="text" name="zanimanje" placeholder="Vase zanimanje">
                </label><br>
                <label>Unesite broj godina:
                    <input type="number" name="godine" placeholder="Vas broj godina">
                </label><br>
                <input type="submit" name="submit" value="izracunaj" id="button"></input>
            </form><br>
            <iframe name="rezultat"></iframe>
        </div>
    </div>

</body>

</html>
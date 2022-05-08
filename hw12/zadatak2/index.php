<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator plocica</title>
    <link rel="stylesheet" href="zadatak2.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h3>Kalkulator plocica</h3>
            <form method="POST" action="zadatak2.php" target="rezultat">
            <label>Sirina zida (cm):
                <input type="number" name="sirinazida" placeholder="sirina zida">
            </label></br>
            <label>Visina zida (cm):
                <input type="number" name="visinazida" placeholder="visina zida">
            </label></br>
            <label>Sirina plocice (cm):
                <input type="number" name="sirinaplocice" placeholder="sirina plocice">
            </label></br>
            <label>Visina plocice (cm):
                <input type="number" name="visinaplocice" placeholder="visina plocice">
            </label></br>
            <input type="submit" name="submit" value="izracunaj" id="button"></input>    
            </form></br>
            <iframe name="rezultat"></iframe>
        </div>
    </div>
    
</body>
</html>
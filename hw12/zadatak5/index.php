<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php $current = 'index';?>
    <div class="main-wrapper">
        <div class="container">
            <?php include './components/header.php';?>

            <?php include './components/hero.php';?>

            <?php include './components/footer.php';?>
        </div>
    </div>
</body>
</html>
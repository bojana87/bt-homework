<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php $current = 'aboutus';?>
    <div class="main-wrapper">
        <div class="container">
            <?php include './components/header.php';?>
        
            <div class="page-content">
                <div class="aboutus-content">
                    <div class="about-block width-3">
                        <h3>Mission</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel non laborum exercitationem accusantium sed iusto perspiciatis facilis.</p>
                    </div>
                    <div class="about-block width-1">
                        <h3>Vision</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio maiores nihil nisi harum suscipit expedita laboriosam debitis.</p>
                    </div>
                    <div class="about-block width-1">
                        <h3>Core Values</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, libero quod? Iste consequuntur laborum vel veritatis praesentium nam fugiat.</p>
                    </div>
                    <div class="about-block width-3">
                        <h3>Company history</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore exercitationem hic asperiores culpa praesentium commodi totam voluptatem accusantium.</p>
                    </div>
                </div>
            </div>

            <?php include './components/footer.php';?>
        </div>
    </div>
</body>
</html>
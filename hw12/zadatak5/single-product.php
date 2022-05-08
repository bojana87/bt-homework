<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="main-wrapper">
        <div class="container">
            <?php include './components/header.php';?>
            <div class="page-content">
                <div class="product-wrapper">
                        <div class="product">
                            <div class="product-info-wrapper">
                                <div class="product-info-top">
                                    <h4>English</h4>
                                    <div class="product-image-wrapper">
                                        <a href="single-product.php"><img class="product-image" src="./img/products/en.png" alt="English"></a>
                                    </div>
                                </div>
                                <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="product-details">
                                    <div class="product-price">
                                        <p class="price">Price: $250.00</p>
                                        <p class="availability">Available now</p>
                                    </div>
                                    <button class="btn btn-secondary">Buy Course</button>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="related-products">
                    <div class="related-product">
                        <img class="product-image" src="./img/products/rc.png" alt="Chinese">
                        <h4>Chinese</h4>
                        <button class="btn btn-secondary">Buy Course</button>
                    </div>

                    <div class="related-product">
                        <img class="product-image" src="./img/products/es.png" alt="Spanish">
                        <h4>Spanish</h4>
                        <button class="btn btn-secondary">Buy Course</button>
                    </div>

                    <div class="related-product">
                        <img class="product-image" src="./img/products/de.png" alt="German">
                        <h4>German</h4>
                        <button class="btn btn-secondary">Buy Course</button>
                    </div>

                    <div class="related-product">
                        <img class="product-image" src="./img/products/it.png" alt="Italian">
                        <h4>Italian</h4>
                        <button class="btn btn-secondary">Buy Course</button>
                    </div>

                    <div class="related-product">
                        <img class="product-image" src="./img/products/fr.png" alt="French">
                        <h4>French</h4>
                        <button class="btn btn-secondary">Buy Course</button>
                    </div>
                </div>
            </div>

            <?php include './components/footer.php';?>
        </div>
    </div>
</body>

</html>
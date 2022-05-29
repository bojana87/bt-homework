<main>
    <section id="single-product">
        <div class="container">
            <div class="row gy-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-6">
                                <img src="<?php echo $product['img'] ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col col-6">
                                <h5 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h5>
                                <p class="card-text">

                                <small class="text-muted">
                                        $<?php echo htmlspecialchars(number_format((float)$product['price'], 2, '.', '')); ?>
                                    </small>
                                    <small>Availability: 
                                    <?php if($product['available'] === true) { 
                                        echo "In stock!";
                                    } else {
                                        echo "Out of stock!";
                                    }
                                    ?>
                                    </small>

                                </p>
                                <p class="card-text">
                                    <small class="text-muted"> 
                                        Brand:
                                        <?php echo htmlspecialchars($product['brand']); ?>
                                    </small>
                                </p>
                                <p class="card-text">
                                    Category: <?php echo htmlspecialchars($product['category']); ?>
                                </p>
                                <?php if($product['available'] === true) { ?>
                                    <a class="btn btn-outline-danger" href="./checkout-page.php?productId=<?php echo $product['id']?>">Buy now</a>
                                <?php } ?>

                                <a class="btn btn-danger" href="./single-product-page.php?page=<?php echo getPreviousProductId($product['id']) ?>">PREV</a>

                                <a class="btn btn-success" href="./single-product-page.php?page=<?php echo getNextProductId($product['id']) ?>">NEXT</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer bg-transparent border-danger">
                        <h5>Product description</h5>
                        <p>
                            <?php echo htmlspecialchars($product['description']); ?>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($relatedProducts as $key => $relatedProduct) { ?>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-body d-grid">
                                                <a href="./single-product-page.php?page=<?php echo $relatedProduct['id']; ?>">
                                                    <h5 class="card-title text-danger"><?php echo $relatedProduct['title']; ?></h5>
                                                </a>
                                                <p class="card-text">
                                                    <small class="text-muted">
                                                        $<?php echo number_format((float)$relatedProduct['price'], 2, '.', ''); ?>
                                                    </small>
                                                </p>
                                                <p class="card-text"><?php echo $relatedProduct['description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
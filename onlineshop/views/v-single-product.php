<main>
    <section id="single-product">
        <div class="container">
            <div class="row gy-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-6">
                                <img src="<?php echo $product->img ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col col-6">
                                <h3 class="card-title"><?php echo htmlspecialchars($product->title); ?></h3>
                                <p class="card-text">

                                <p class="fw-bold">
                                        Price: $<?php echo htmlspecialchars(number_format((float)$product->price, 2, '.', '')); ?>
                                </p>
                                    <small class="font-italic">Availability: 
                                    <?php if($product->available == true) { 
                                        echo "Book now!";
                                    } else {
                                        echo "Not available!";
                                    }
                                    ?>
                                    </small>

                                </p>
                                <p class="card-text mt-2">
                                    <small class="text-muted"> 
                                        Country:
                                        <?php echo htmlspecialchars($product->country); ?>
                                    </small>
                                </p>
                                <p class="card-text">
                                    Category: <?php echo htmlspecialchars($product->category); ?>
                                </p>
                                <form action="./shopping-cart.php" method="POST" >
                                    <input hidden name="productId" value="<?php echo htmlspecialchars($product->id); ?>">

                                    <div class="form-group">
                                        <label for="numberOfGuests">Number of guests:</label>
                                        <select class="form-control w-25" id="numberOfGuests" name="numberOfGuests">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        </select>
                                    </div>
                                    <p>
                                    <?php if($product->available == true) { ?>
                                        <input type="submit" value="Book now" class="btn btn-outline-info mt-2"></input>
                                    <?php } ?>
                                    </p>
                                </form>
                                <p>
                                    <a class="btn btn-outline-dark" href="./single-product.php?productId=<?php echo $product->getPreviousProductId($product->id) ?>">PREV</a>
                                    <a class="btn btn-outline-dark" href="./single-product.php?productId=<?php echo $product->getNextProductId($product->id) ?>">NEXT</a>
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer bg-transparent border-danger">
                        <h5>Destination description:</h5>
                        <p>
                            <?php echo htmlspecialchars($product->description); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>        
    </section>
</main>
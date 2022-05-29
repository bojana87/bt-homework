<section id="filters"> 
    <div class="container">
        <form class="row" method="GET" action="./all-products-page.php">
            <div class="col col-4">
                <select class="form-select" name="sort" id="sort" aria-label="Sorting">
                    <option selected disabled>Order by</option>
                    <option value="asc">Price Ascending</option>
                    <option value="dsc">Price Descending</option>
                </select>
            </div>
            <div class="col col-8">
                <div class="row">
                    <div class="col col-10">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="filter" name="filter"  placeholder="Search...">
                        </div>
                    </div>
                    <div class="col col-2">
                        <button type="submit" class="btn btn-outline-danger">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<main>
    <div class="container">
        <section id="all-articles"> 
            <div class="row">
            <?php foreach ($products as $key => $singleProduct) { ?>
                <div class="col col-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo $singleProduct['img'] ?>" class="img-fluid rounded-start mx-3 my-3" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-grid">
                                    <a href="./single-product-page.php?page=<?php echo $singleProduct['id']; ?>">
                                        <h5 class="card-title text-danger"><?php echo $singleProduct['title']; ?></h5>
                                    </a>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            $<?php echo number_format((float)$singleProduct['price'], 2, '.', ''); ?>
                                        </small>
                                        <small>
                                        <?php if($singleProduct['available'] === true) { 
                                            echo "In stock!";
                                        } else {
                                            echo "Out of stock!";
                                        }
                                        ?>
                                        </small>
                                    </p>
                                    <p class="card-text"><?php echo $singleProduct['description']; ?></p>
                                    <?php if($singleProduct['available'] === true) { ?> 
                                        <a class="btn btn-outline-danger" 
                                            href="./checkout-page.php?productId=<?php echo $singleProduct['id']; ?>" type="button">Add to Cart</a>
                                    <?php } else { ?> 
                                        <button type="button" class="btn btn-light disabled">Item not available</button>                                                                              
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div> 
        </section>
    </div>
</main>

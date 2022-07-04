<main>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach($items as $key => $singleProduct) { ?> 
                    <div class="col mb-12">
                    <div class="card h-100">
                        <?php if($singleProduct->getProduct()->onsale == true) { ?>
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <?php } ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo $singleProduct->getProduct()->img; ?>" alt="image" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $singleProduct->getProduct()->title; ?></h5>
                                <!-- Product quantity -->
                                <?php echo $singleProduct->getQuantity(); ?> x 
                                <!-- Product price-->
                                $<?php echo number_format((float)$singleProduct->getProduct()->price,2, '.', ''); ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a 
                                    class="btn btn-outline-dark mt-auto" 
                                    href="./single-product.php?productId=<?php echo $singleProduct->getProduct()->id; ?>"
                                >View</a>
                                <form action="./remove-cart-item.php" method="POST" >
                                    <input hidden name="pageRedirect" value="shopping-cart.php">
                                    <input hidden name="product_id" value="<?php echo $singleProduct->getProduct()->id ?>" >
                                    <button type="submit" class="btn btn-danger mt-3">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <?php  }  ?>

            </div>
        </div>
    </section>
    <div class="class d-flex justify-content-center">
        <a class="btn btn-outline-dark mb-3 mx-2" href="./all-products.php">Browse more</a>
        <a class="btn btn-outline-info mb-3" href="./checkout.php">Confirm booking!</a>

    </div>


</main>
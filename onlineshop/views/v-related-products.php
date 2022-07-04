<div class="bg-dark py-5">
    <div class="container px-3 px-lg-4 my-4">
        <div class="text-center text-white">
            <h3 class="fw-bolder">Most popular destinations</h>
        </div>
    </div>
</div>
<section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach($randomProducts as $key => $singleProduct) { ?> 

                        <div class="col mb-5">
                        <div class="card h-100">
                            <?php if($singleProduct->onsale === true) { ?>
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <?php } ?>
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $singleProduct->img ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $singleProduct->title ?></h5>
                                    <!-- Product price-->
                                    $<?php echo number_format((float)$singleProduct->price,2, '.', '') ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a 
                                        class="btn btn-outline-dark mt-auto" 
                                        href="./single-product.php?productId=<?php echo $singleProduct->id; ?>"
                                    >View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <?php  }  ?>

                </div>
            </div>
        </section>
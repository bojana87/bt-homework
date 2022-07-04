      
       <!-- Section-->
       <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb mb-3 ms-3">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item"><a href="about.php">About</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Products</li>
            </ol>
        </nav>
<section id="filters"> 
    <div class="container">
        <form class="row" method="GET" action="./all-products.php">
            <div class="col col-4">
                <select class="form-select w-30" name="sort" id="sort" aria-label="Sorting">
                    <option <?php if ($sort == '') { echo "selected"; }?> disabled>Order by</option>
                    <option <?php if ($sort == 'asc') { echo "selected"; }?>  value="asc">Price Ascending</option>
                    <option <?php if ($sort == 'dsc') { echo "selected"; }?> value="dsc">Price Descending</option>
                </select>
            </div>
            <div class="col col-8">
                <div class="row">
                    <div class="col col-10">
                        <div class="mb-3 w-60">
                            <input 
                                type="text" 
                                class="form-control" 
                                id="filter" 
                                name="filter" 
                                placeholder="Search..."
                                value="<?php echo $filter  ?  $filter : '';?>" 
                            >
                        </div>
                    </div>
                    <div class="col col-2">
                        <button type="submit" class="btn btn-outline-dark">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach($products as $key => $singleProduct) { ?> 

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
  
<div class="container">
    <div class="row">
        <div class="col col-5">
            <h3> <?php echo $product["title"] ?></h3>
            <p> Description: <?php echo $product["description"] ?></p>
            <p> Category: <?php echo $product["category"] ?></p>
            <img style="width:100%" src="<?php echo $product['img'] ?>">  
        </div>
        <div class="col col-7">
            <form method="POST" action="purchase-page.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Last name:</label>
                        <input type="text" class="form-control" name="last_name" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">City:</label>
                        <input type="text" class="form-control" name="city" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone:</label>
                        <input type="numeric" class="form-control" name="phone" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Street and number:</label>
                        <input type="text" class="form-control" name="street_and_number" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ZIP:</label>
                        <input type="numeric" class="form-control" name="zip" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Comment:</label>
                        <input type="text" class="form-control" name="comment">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="checkbox" value="1" required>
                        <label class="form-check-label" for="exampleCheck1" required>I agree with terms and conditions</label>
                    </div>
                    <p> Total price: $<?php echo $product["price"] ?></p>
                    <?php if($product['available'] === true) { ?> 
                        <button type="submit" class="mb-3 btn btn-danger">BUY</button>
                        <button type="reset" class="mb-3 btn btn-outline-danger">CLEAR</button>
                    <?php } else {
                        echo '<p class="text-danger">Item Out of stock!</p>';
                    } ?>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    <div class="col col-6">
       <div class="row">
        <?php 
            foreach ($cartProducts as $key => $product) { ?>
                <div class="col col-6">
                    <h3> <?php echo htmlspecialchars($product->getProduct()->title)?>
                    <form action="./remove-cart-item.php" method="POST" >
                    <input hidden name="pageRedirect" value="checkout.php">

                    <input hidden name="product_id" value="<?php echo htmlspecialchars($product->getProduct()->id); ?>">
                    <button type="submit" class="btn btn-danger mt-3">Remove</button>
                    </form>
                    </h3>
                    <p class="fw-bold"> Price:  <?php echo $product->getQuantity(); ?> x  $<?php echo $product->getProduct()->price ?></p>
                    <p> Destination cost: <?php echo $product->getSubtotal(); ?></p>
                    <p> Category: <?php echo $product->getProduct()->category ?></p>
                    <img style="width:100%" src="<?php echo $product->getProduct()->img ?>">  
                </div>
        <?php } ?>    
        </div>
    </div>

        <div class="col col-6">
            <form method="POST" action="./checkout.php">
                    <input type="hidden" value="checkoutSubmitted" name="checkoutSubmitted">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" 
                            <?php 
                                if(!isset($errors['name'])) { ?>
                                value="<?php echo $name; ?>"  
                            <?php } ?>
                            >
                        <?php 
                            if(isset($errors['name'])) { ?>
                            <small class="text-danger"><?php echo $errors['name'] ?></small>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Last name:</label>
                        <input type="text" class="form-control" name="last_name"
                        <?php 
                                if(!isset($errors['last_name'])) { ?>
                                value="<?php echo $lastname; ?>"  
                            <?php } ?>
                            > 
                        <?php 
                            if(isset($errors['last_name'])) { ?>
                            <small class="text-danger"><?php echo $errors['last_name'] ?></small>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email"
                        <?php 
                                if(!isset($errors['email'])) { ?>
                                value="<?php echo $email; ?>"  
                            <?php } ?> 
                            >
                        <?php 
                            if(isset($errors['email'])) { ?>
                            <small class="text-danger"><?php echo $errors['email'] ?></small>
                        <?php } ?>                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">City:</label>
                        <input type="text" class="form-control" name="city" 
                        <?php 
                                if(!isset($errors['city'])) { ?>
                                value="<?php echo $city; ?>"  
                            <?php } ?> 
                        >
                        <?php 
                            if(isset($errors['city'])) { ?>
                            <small class="text-danger"><?php echo $errors['city'] ?></small>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone:</label>
                        <input type="numeric" class="form-control" name="phone"
                        <?php 
                                if(!isset($errors['phone'])) { ?>
                                value="<?php echo $phone; ?>"  
                            <?php } ?> 
                         >
                        <?php 
                            if(isset($errors['phone'])) { ?>
                            <small class="text-danger"><?php echo $errors['phone'] ?></small>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Street and number:</label>
                        <input type="text" class="form-control" name="street_and_number"
                        <?php 
                                if(!isset($errors['street_and_number'])) { ?>
                                value="<?php echo $streetandnumber; ?>"  
                            <?php } ?> 
                         >
                        <?php 
                            if(isset($errors['street_and_number'])) { ?>
                            <small class="text-danger"><?php echo $errors['street_and_number'] ?></small>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ZIP:</label>
                        <input type="numeric" class="form-control" name="zip"
                        <?php 
                                if(!isset($errors['zip'])) { ?>
                                value="<?php echo $zip; ?>"  
                            <?php } ?> 
                        >
                        <?php 
                            if(isset($errors['zip'])) { ?>
                            <small class="text-danger"><?php echo $errors['zip'] ?></small>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Comment:</label>
                        <input type="text" class="form-control" name="comment">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="checkbox" value="1" required>
                        <label class="form-check-label" for="exampleCheck1" required>I agree with terms and conditions</label>
                    </div>
                    <h3 class="mt-2 mb-3"> Total price: $<?php echo $shoppingCart->getTotalCost(); ?></h3>
                    <?php if($product->getProduct()->available == true) { ?> 
                        <button type="submit" class="mb-3 btn btn-outline-info" >BUY</button>
                        <button type="reset" class="mb-3 btn btn-outline-danger">CLEAR</button>
                    <?php  } else {
                        echo '<p class="text-danger">Item Out of stock!</p>';} ?>
            </form>
        </div>
    </div>
</div>
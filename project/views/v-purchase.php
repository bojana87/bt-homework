<main>
    <div class="container">
        <?php 
            if ($error) { ?>
                <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
                </div>
            <?php
            } else {
                ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo "Dear <strong>" .trim($name, "") . " " . trim($lastname, "") . ",". "</strong></br>";
                        echo "Here are your details: </br>";
                        echo "Email: <strong>" .$email . "</strong></br>";
                        echo "City: <strong>" .$city . "</strong></br>";
                        echo "Phone number: <strong>" .$phone . "</strong></br>";
                        echo "Address: <strong>" .$streetandnumber . "</strong></br>";
                        echo "Zip code: <strong>".$zip . "</strong></br>";
                        echo "Comment: <strong>".$comment . "</strong></br>";
                    ?>
                </div>
            <?php } ?>
    </div>
</main>


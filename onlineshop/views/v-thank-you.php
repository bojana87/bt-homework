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
                <div class="alert alert-info text-center" role="alert">
                    <?php 
                        echo "<h4>Dear <strong>" . $name . " " . $lastname . ",". "</strong></h4></br>";
                        echo "<h6>Thank you for choosing our company!</h6></br>";
                        echo "<h6>Enjoy your trip!</h6></br>"
                    ?>
                </div>
            <?php } ?>
    </div>
</main>


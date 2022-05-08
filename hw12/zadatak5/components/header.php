<header class="header-main">
    <div class="logo">
        <img src="./img/logo.png" alt="Logo">
    </div>
    <nav class="nav-main">
        <ul class="navigation-links">
            <li <?php if(isset($current) && $current == 'index') {echo 'class="current"';} ?>><a href="index.php">Home</a></li> 
            <li <?php if(isset($current) && $current == 'products') {echo 'class="current"';} ?> ><a href="products.php">Products</a></li>
            <li <?php if(isset($current) && $current == 'aboutus') {echo 'class="current"';} ?> ><a href="aboutus.php">About us</a></li>
            <li <?php if(isset($current) && $current == 'contactus') {echo 'class="current"';} ?> ><a href="contactus.php">Contact us</a></li>
        </ul>
    </nav>
</header>
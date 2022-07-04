<?php 

function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
        echo 'active'; //class name in css 
    } 
  }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Travel Around the World</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./public/theme/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="home.php"><img src="./public/theme/assets/logo.png" alt="logo">HelloTravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link <?php active('home.php');?>" aria-current="page" href="home.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Destinations</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="all-products.php">All Destinations</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="popular-destinations.php">Popular</a></li>                                
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link <?php active('about.php');?>" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link <?php active('contact.php');?>" href="contact.php">Contact Us</a></li>                        
                        <li class="nav-item"><a class="nav-link <?php active('register.php');?>" href="register.php">Register</a></li>
                        <li class="nav-item"><a class="nav-link <?php active('login.php');?>" href="login.php">Login</a></li>
                    </ul>
                    <div>
                        <?php
                            //info message
                            if(isset($_SESSION['message'])){
                                ?>
                                    <div class="alert alert-warning  text-center me-5" role="alert">
                                        <?php echo $_SESSION['message']; ?>
                                    </div>
                                    
                                <?php
                                unset($_SESSION['message']);
                            }?>
                    </div>
                    <form class="d-flex">
                        <a href="./shopping-cart.php" class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                                <?php 
                                    if (!empty($_SESSION['cart'])) {
                                        echo count($_SESSION['cart']);
                                    } else {
                                        echo 0;
                                    }
                                ?>
                            </span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>

        
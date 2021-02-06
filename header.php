<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moblie Shoppee</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <!-- Owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <?php
    //require MySQLi Connection
    require('./functions.php');
    ?>
</head>

<body>
    <!-- start header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="./cart.php" class="px-3 border-right  text-dark">Whishlist(<span><?php echo count($product->getData('wishlist')) ?? '0' ?></span>)</a>
            </div>
        </div>
        <!-- primary navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Mobile Shoppee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#special-price">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#top-sale">Products</a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link" href="#blogs">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#new-phones">New Arrivals</a>
                        </li>

                    </ul>
                    <form action="#" class="font-size-14 font-rale">
                        <a href="./cart.php" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-white "><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- end of primary navigation -->
    </header>
    <!-- end of header -->
    <!-- start main -->
    <main id="main-site">
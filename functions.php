<?php
require('./database/DBController.php');
require('./database/Product.php');
require('./database/Cart.php');

$db = new DBController();

//product object
$product = new Product($db);
$product_shuffle = $product->getData();

//cart object
$cart = new Cart($db);

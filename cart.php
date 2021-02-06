<?php
include('./header2.php');
?>



<?php
//include cart-partial file
count($product->getData('cart')) ? include('./php partials/cart-partial.php') :  include('./php partials/notFound/cartNotFound.php');

/*  include top sale section */
count($product->getData('wishlist')) ? include('./php partials/wishlist-partial.php') :  include('./php partials/notFound/wishlistNotFound.php');


//include new-phone file
include('./php partials/new-phones.php');
?>


<?php
include('./footer.php');
?>
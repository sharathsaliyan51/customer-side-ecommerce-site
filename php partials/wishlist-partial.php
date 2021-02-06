  <?php


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   if (isset($_POST['delete-wishlist-submit'])) {
    $deleteRecord = $cart->deleteCart($_POST['item_id'], 'wishlist');
   }
   if (isset($_POST['add-wishlist-submit'])) {
    $cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
   }
  }
  ?>

  <!-- Shopping cart section  -->
  <section id="cart" class="py-3">
   <div class="container-fluid w-75">
    <h5 class="font-baloo font-size-20">WishList</h5>

    <!--  shopping cart items   -->
    <div class="row">
     <div class="col-sm-9">
      <?php
      foreach ($product->getData('wishlist') as $item) {
       $cartArray = $product->getProduct($item['item_id']);
       $sub_total[] = array_map(function ($cart_item) {
      ?>
        <!-- cart item -->
        <div class="row border-top py-3 mt-3">
         <div class="col-sm-2">
          <img src="<?php echo $cart_item['item_image']; ?>" style="height: 120px;" alt="cart1" class="img-fluid">
         </div>
         <div class="col-sm-8">
          <h5 class="font-baloo font-size-20"><?php echo $cart_item['item_name']; ?></h5>
          <small><?php echo $cart_item['item_brand']; ?></small>
          <!-- product rating -->
          <div class="d-flex">
           <div class="rating text-warning font-size-12">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
           </div>
           <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
          </div>
          <!--  !product rating-->

          <!-- product qty -->
          <div class="qty d-flex pt-2">
           <form method="POST">
            <input type="hidden" value="<?php echo $cart_item['item_id'] ?? 0; ?>" name="item_id">
            <button type="submit" name="delete-wishlist-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
           </form>

           <form method="POST">
            <input type="hidden" value="<?php echo $cart_item['item_id'] ?? 0; ?>" name="item_id">
            <button type="submit" name="add-wishlist-submit" class="btn font-baloo text-danger px-3 border-right">Add to Cart</button>
           </form>
          </div>
          <!-- !product qty -->

         </div>

         <div class="col-sm-2 text-right">
          <div class="font-size-20 text-danger font-baloo">
           $<span class="product_price" data-id="<?php echo $cart_item['item_id']; ?>"><?php echo $cart_item['item_price']; ?></span>
          </div>
         </div>
        </div>
        <!-- !cart item -->
       <?php
        return $cart_item['item_price'];
       }, $cartArray)

       ?>

      <?php
       # code...
      }

      ?>


     </div>

    </div>
    <!--  !shopping cart items   -->
   </div>
  </section>
  <!-- !Shopping cart section  -->
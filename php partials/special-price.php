  <!-- Special Price -->
  <?php
  shuffle($product_shuffle);
  $brand = array_map(function ($pro) {
    return $pro['item_brand'];
  }, $product_shuffle);
  $unique = array_unique($brand);
  sort($unique);
  $in_cart = $cart->getCartId($product->getData('cart'));

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['special_price_submit'])) {
      $cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
  }
  ?>
  <section id="special-price">
    <div class="container py-5 ">
      <h4 class="font-rubik font-size-20">Special Price</h4>
      <div id="filters" class="button-group text-right font-baloo font-size-16">
        <button class="btn is-checked" data-filter="*">All Brand</button>
        <?php
        array_map(function ($brand) { ?>
          <button class="btn" data-filter=".<?php echo $brand; ?>"><?php echo $brand; ?></button>
        <?php
        }, $unique)
        ?>

      </div>

      <div class="grid">
        <?php array_map(function ($item) use ($in_cart) { ?>
          <div class="grid-item border <?php echo $item['item_brand'] ?>">
            <div class="item py-2" style="width:200px;">
              <div class="product font-rale">
                <a href="<?php printf('%s?item-id=%s', 'product.php', $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?> " alt="product1" class="img-fluid"></a>
                <div class="text-center">
                  <h6><?php echo $item['item_name'] ?></h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$<?php echo $item['item_price'] ?></span>
                  </div>
                  <form method="POST">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1' ?> ">
                    <input type="hidden" name="user_id" value="<?php echo '1' ?> ">
                    <?php
                    if (in_array($item['item_id'], $in_cart ?? [])) {
                      echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                    } else {
                      echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                    }
                    ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <?php }, $product_shuffle) ?>


      </div>
    </div>
  </section>
  <!-- !Special Price -->
<div class="row">
  <div class="col-sm-5">
    <div class="mainphoto">
      <img src="<?php echo BASE_URL; ?>media/products/<?php echo $product_images[0]['url']; ?>" />
    </div>
    <div class="gallery">
      <?php foreach($product_images as $img): ?>
        <div class="photo_item">
          <img src="<?php echo BASE_URL; ?>media/products/<?php echo $img['url']; ?>" />
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="col-sm-7">
    <h2><?php echo $product_info['name']; ?></h2>
    <small><?php echo $product_info['brand_name']; ?></small><br/>
    <?php if($product_info['rating'] != '0'): ?>
      <?php for($q=0;$q<intval($product_info['rating']);$q++): ?>
        <img src="<?php echo BASE_URL; ?>assets/images/star.png" border="0" height="15" />
      <?php endfor; ?>
    <?php endif; ?>
    <hr/>
    <p><?php echo $product_info['description']; ?></p>
    <hr/>
    De: <span class="price_from" >R$ <?php echo number_format($product_info['price_from'], 2); ?></span><br/>
    Por: <span class="original_price">R$ <?php echo number_format($product_info['price'], 2); ?></span>    
    
    <form method="POST" class="addtocartform" action="<?php echo BASE_URL; ?>cart/add">
      <input type="hidden" name="id_product" value="<?php echo $product_info['id']; ?>" />
      <input type="hidden" name="qt_product" value="1" /> 
      <button data-action="decrease">-</button>
      <input type="text" name="qt" value="1" class="addtocart_qt" disabled/>
      <button data-action="increase">+</button>
      <input type="submit" value="<?php $this->lang->get("ADD_TO_CART"); ?>" class="addtocart_submit"/>
    </form>
  </div>
</div>
<hr/>
<div class="row">
  <div class="col-sm-6">
    <h3><?php echo $this->lang->get('PRODUCT_SPECIFICATIONS'); ?></h3>
    <?php foreach($product_options as $po): ?>
      <strong><?php echo $po['name']; ?></strong>: <?php echo $po['value']; ?><br/>
    <?php endforeach; ?>
  </div>
  <div class="col-sm-6">
    <h3><?php echo $this->lang->get('PRODUCT_REVIEWS'); ?></h3>
    <!--<?php print_r($product_rates); ?>-->
    <?php foreach($product_rates as $rate): ?>
      <strong><?php echo $rate['user_name']; ?></strong> -
      <?php for($q=0;$q<intval($rate['points']);$q++): ?>
        <img src="<?php echo BASE_URL; ?>assets/images/star.png" border="0" height="15" />
      <?php endfor; ?>
      <br/>
      "<?php echo $rate['comment']; ?>"
      <hr/>
    <?php endforeach; ?>
  </div>
</div>
<!-- icuclub_club template -->
<div class="container-inline">
<?php if($clubhasimage): ?>
<img src="<?php echo url('activities/a-to-z/'.$clubcentre.'/image'); ?>" alt="" style="width: 90%">
<?php endif; ?>
<p><?php echo $clubdesc; ?></p>
<div class="club-sec club-sec-<?php echo $clubsection; ?>"><?php echo $clubsectionname; ?></div>
<h2>Contacts</h2>
<h3>Website</h3>
<div class="contact-detail"><?php echo $clubwebsite; ?></div>
<h3>Email</h3>
<div class="contact-detail"><?php echo $clubemail; ?></div>
<h3>Committee</h3>
<ul class="contact-detail">
<?php
foreach($clubcommittee as $post => $name) {
  echo '<li>'.$post.': '.$name.'</li>';
}
?>
</ul>
<div class="shop_items">
<div class="membership_item">
<?php if(!$is_member): ?>
<div class="membership_shop_item">
<?php foreach($shop_nodes as $product): ?>
<?php if($product->type == variable_get('icuclub_membership_category')): ?>
<div class="shop_product">
  <div class="product_logo">
    <?php if(array_key_exists('und', $product->uc_product_image)): ?>
    <?php echo theme_image_formatter(array('item' => $product->uc_product_image['und'][0], 'image_style' => 'thumbnail')); ?>
    <?php endif; ?>
  </div>
  <div class="product_title">
    <?php echo $product->title; ?>
  </div>
  <div class="price">
    <?php echo theme('uc_product_price', array('element' => array('#value' => $product->price))); ?>
  </div>
  <div class="see-more">
    <?php if($is_erpol_user): ?>
    <a href="<?php echo url('node/'.$product->nid); ?>">More details</a>
    <?php else: ?>
    <span class="not-erpol">Please log in as a member of ICU to purchase this membership</span>
    <?php endif; ?>
  </div>
</div>
<?php endif; ?>
<?php endforeach; ?>
</div>
<?php else: ?>
<div class="membership_shop_item_is_member">
You are a member
</div>
<?php endif; ?>
<ul>
<li><?php echo $clubcurrentmembers; ?> current members</li>
<li><?php echo $clublastmembers; ?> members last year</li>
</ul>
</div>
<?php foreach($shop_nodes as $product): ?>
<?php if($product->type != variable_get('icuclub_membership_category')): ?>
<div class="shop_product">
  <div class="product_logo">
    <?php if(array_key_exists('und', $product->uc_product_image)): ?>
    <?php echo theme_image_formatter(array('item' => $product->uc_product_image['und'][0], 'image_style' => 'thumbnail')); ?>
    <?php endif; ?>
  </div>
  <div class="product_title">
    <?php echo $product->title; ?>
  </div>
  <div class="price">
    <?php echo theme('uc_product_price', array('element' => array('#value' => $product->price))); ?>
  </div>
  <div class="see-more">
    <a href="<?php echo url('node/'.$product->nid); ?>">More details</a>
  </div>
</div>
<?php endif; ?>
<?php endforeach; ?>
</div>
</div>
<!-- /icuclub_club template -->

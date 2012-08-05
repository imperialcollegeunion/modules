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
<ul>
<li><?php echo $clubcurrentmembers; ?> current members</li>
<li><?php echo $clublastmembers; ?> members last year</li>
</ul>
</div>
<!-- /icuclub_club template -->

<!-- icuclub_block_memberships template -->
<?php if(count($clubs) > 0): ?>
<ul class="my-clubs">
<?php foreach($clubs as $centre => $name): ?>
<li><a href="<?php echo url('activities/a-to-z/'.$centre); ?>"><?php echo $name; ?></a></li>
<?php endforeach; ?>
</ul>
<?php else: ?>
<?php echo t('You are not a member of any clubs'); ?>
<?php endif; ?>
<!-- /icuclub_block_memberships template -->

<!-- icuclub_block_atoz template -->

<ul>
<?php
  foreach(array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '#') as $letter):
    echo '<li>'.$letter.'</li>';
  endforeach;
?>
</ul>

<?php $i = 0; ?>
<?php foreach($atozclubs as $letter => $clubs): ?>
<ul class="atoz-block-list atoz-block-list-<?php echo $letter; ?>" style="display: none;"><?php /* The default status of each list is hidden */ ?>
<?php foreach($clubs as $club): ?>
<li class="atoz-soc"><a href="<?php echo url('activities/a-to-z/'.$club['centre']); ?>"><?php echo $club['name']; ?></a></li>
<?php endforeach; ?>
</ul>
<?php endforeach; ?>

<!-- /icuclub_block_atoz template -->

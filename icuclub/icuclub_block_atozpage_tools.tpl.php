<!-- icuclub_block_atozpage_tools template -->
<div class="atoz-block atoz-block-about">
<h2><?php echo t('Understanding our Clubs'); ?></h2>
<p><?php echo $atozabout; ?></p>
</div>

<div class="atoz-block atoz-block-filter">
<h2>Filter the A to Z</h2>
<h3>By type</h3>
<ul>
<?php
  ksort($alltypes);
  foreach($alltypes as $type => $code):
    echo '<li><input type="checkbox" checked name="club-sec-'.$code.'" id="club-sec-'.$code.'">&nbsp;<label class="atoz-filter-sec club-sec-'.$code.'" for="club-sec-'.$code.'">'.$type.'</label></li>';
  endforeach;
?>
</ul>
<h3>By alphabet</h3>
<ul>
<?php
  foreach(array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '#') as $letter):
    echo '<li>'.$letter.'</li>';
  endforeach;
?>
</ul>
</div>
<!-- /icuclub_block_atozpage_tools template -->

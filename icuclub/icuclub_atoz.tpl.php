<!-- icuclub_atoz template -->
<div class="container-inline">
<p><?php echo $atozintro; ?></p>
<?php
// count how many societies we have
$socs = count($atozclubs);
$socs_in_list = ceil($socs / 2); // number in each side of the list
?>

<ul class="atoz-list-left">
<?php $i = 0; ?>
<?php foreach($atozclubs as $club): ?>
<?php
  if($i == $socs_in_list): continue; endif; // only allow a certain number of socs into list 
  $i++; // we are adding a new soc to this list

  if(array_key_exists($club['type'], $atozcats)) {
    $typename = $atozcats[$club['type']]['name'];
    $typecode = $atozcats[$club['type']]['code'];
  } else {
    $typename = 'Unknown club type';
    $typecode = 'unknown';
  }
?>
<li class="atoz-soc atoz-soc-cat-<?php echo $typecode; ?> atoz-soc-let-<?php echo $club['letter']; ?>"><a href="<?php echo url('activities/a-to-z/'.$club['centre']); ?>"><?php echo $club['name']; ?></a><div class="atoz-sec club-sec-<?php echo $typecode; ?>"><?php echo $typename; ?></div></li>
<?php endforeach; ?>
</ul>

<ul class="atoz-list-right">
<?php $i = 0; ?>
<?php foreach($atozclubs as $club): ?>
<?php
  if($i < $socs_in_list): $i++; continue; endif; // only allow socs not in the first list in

  if(array_key_exists($club['type'], $atozcats)) {
    $typename = $atozcats[$club['type']]['name'];
    $typecode = $atozcats[$club['type']]['code'];
  } else {
    $typename = 'Unknown club type';
    $typecode = 'unknown';
  }
?>
<li class="atoz-soc atoz-soc-cat-<?php echo $typecode; ?> atoz-soc-let-<?php echo $club['letter']; ?>"><a href="<?php echo url('activities/a-to-z/'.$club['centre']); ?>"><?php echo $club['name']; ?></a><div class="atoz-sec club-sec-<?php echo $typecode; ?>"><?php echo $typename; ?></div></li>
<?php endforeach; ?>
</ul>

<div class="atoz-block atoz-block-about">
<h2><?php echo t('Understanding our Clubs'); ?></h2>
<p><?php echo $atozabout; ?></p>
</div>

<div class="atoz-block atoz-block-filter">
<h2>Filter the A to Z</h2>
<h3>By type</h3>
<ul>
<?php
  foreach($atozcats as $cat):
    echo '<li><input type="checkbox" checked name="club-sec-'.$cat['code'].'" id="club-sec-'.$cat['code'].'">&nbsp;<label class="atoz-filter-sec club-sec-'.$cat['code'].'" for="club-sec-'.$cat['code'].'">'.$cat['name'].'</label></li>';
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

</div>
<!-- /icuclub_atoz template -->

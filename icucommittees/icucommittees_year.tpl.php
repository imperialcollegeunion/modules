<!-- icuccommittees_year template -->
<div class="container-inline">
 <?php
  // Year Tabs
  echo "<div class=\"tabs\"><ul class=\"tabs primary yearbar\">";
  
  foreach($allyears as $year_tab) {
    if($year_tab['desc'] == $year): $selected = " class=\"active\""; else: $selected = ""; endif;
    echo "<li".$selected."><a href=\"".url('committees/'.$year_tab['desc']).'">20';
    echo $year_tab['desc'];
    echo "</a></li>";
  }
  echo "</ul></div>";
  
  for($j=0; $j<=3; $j++) {
    // Are there committees at this tier
    if(array_key_exists($j, $committees) && $committees[$j] != '') {
      echo "<ul class=tier".$j.">";

		  foreach($committees[$j] as $name) {
         echo '<li class="leaf"><a href="'.url('committees/'.$year.'/'.str_replace(" ","_",$name)).'">'.$name.'</a></li>';
      }
      echo "</ul>";
    }  
  }
  ?>
</div>
<!-- /icucommittees_year template -->

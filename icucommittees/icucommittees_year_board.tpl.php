<!-- icuccommittees_year_board template -->
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

  // Board Tabs
  echo "<div class=\"tabs\"><ul class=\"tabs primary boardbar\">";
  
  foreach($committees as $committee_tab) {
    if(str_replace(' ', '_', $committee_tab) == $committee): $selected = " class=\"active\""; else: $selected = ""; endif;
    echo "<li".$selected."><a href=\"".url('committees/'.$year.'/'.str_replace(" ","_",$committee_tab)).'">';
    echo $committee_tab;
    echo "</a></li>";
  }
  echo "</ul></div>";

  echo "<ul>";
  foreach($meetings as $id => $meeting) {
    echo '<li class="leaf"><a href=/presidents/drupal/committees/'.$year.'/'.$committee.'/'.$id.'>'.$meeting['date'].', '.$meeting['room'].'</a>';
    if($meeting['cancelled'] == TRUE){ echo ' - CANCELLED'; }	
    echo '</li>';
  }
  echo "</ul>";

?>

</div>
<!-- /icucommittees_year_board template -->

<!-- icuccommittees_year_board_meeting template -->
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

  // Meeting Tabs
  echo "<div class=\"tabs\"><ul class=\"tabs primary meetingbar\">";
  
  foreach($meetings as $id => $meeting_tab) {
    if($id == $meeting): $selected = " class=\"active\""; else: $selected = ""; endif;
    echo "<li".$selected."><a href=\"".url('committees/'.$year.'/'.str_replace(" ","_",$committee)).'/'.$id.'">';
    echo date('M jS Y', strtotime($meeting_tab['date']));
    echo "</a></li>";
  }
  echo "</ul></div>";
?>
  
<h2><?php echo $this_meeting['date']; ?></h2>
<p><?php echo $this_meeting['room']; ?></p>
<?php if($this_meeting['cancelled'] == TRUE) { echo '<p class="meeting-cancelled">CANCELLED</p>'; } ?>
<?php

if($request != 0){
  echo "<ul>";
  for($k=0; $k<$request; $k++) {
    echo '<li><a href="'.url('committees/'.$year.'/'.str_replace(" ","_",$committee_tab)).'/file/'.$result1[$k].'">'.$result2[$k].'</a>';
    if($result3[$k] != 'False') { echo ' (Agenda item) '; }
    echo '<i>('.$result4[$k].')</i></li>';
  }
  echo "</ul>";
} else {
  echo "There are currently no files attached to this meeting.";
}

?>

</div>
<!-- /icucommittees_year_board_meeting template -->

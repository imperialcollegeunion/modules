<!-- icuccommittees_year_board_meeting template -->
<div class="container-inline">
 <?php
  echo "<div class=\"tabs\"><ul class=\"tabs primary yearbar\">";
 foreach($row1 as $years){
    if($years == $year): $selected = " class=\"active\""; else: $selected = ""; endif;
    echo "<li".$selected."><a href=/presidents/drupal/committees/";
    echo $years;
    echo "/";
    echo $board;
    echo ">20";
    echo $years;
    echo "</a>
    </li>";
    }
    echo "</ul></div>";
?>
  
<h2><? echo $MeetingDate; ?></h2>
<p><? echo $MeetingRoom; ?></p>
<? if($MeetingCancelled != 'False'){ echo '<p class="meeting-cancelled">CANCELLED</p>'; } ?>
<?


if($request != 0){
  echo "<ul>";
  for($k=0;$k<$request;$k++){

         echo '<li><a href=/presidents/drupal/committees/'.$years.'/'.$board.'/file/'.$result1[$k].'>'.$result2[$k].'</a>';
	if($result3[$k] != 'False'){ echo '(Agenda item)'; }
		
echo '<i>('.$result4[$k].')</i></li>';

  }

  echo "</ul>";

}else{
echo "There are currently no files attached to this meeting.";
}


?>

</div>
<!-- /icucommittees_year_board_meeting template -->

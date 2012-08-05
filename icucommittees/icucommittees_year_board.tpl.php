<!-- icuccommittees_year_board template -->
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

  echo "<ul>";
  for($k=0;$k<$request;$k++){

         echo '<li class="leaf"><a href=/presidents/drupal/committees/'.$year.'/'.$board.'/'.$result4[$k].'>'.$result1[$k].', '.$result2[$k].'</a>';
	if($result3[$k] != 'False'){ echo ' - CANCELLED'; }	
echo '</li>';

  }
  echo "</ul>";

?>

</div>
<!-- /icucommittees_year_board template -->

<!-- icuccommittees_year template -->
<div class="container-inline">
 <?php
  echo "<div class=\"tabs\"><ul class=\"tabs primary yearbar\">";
 foreach($row1 as $years){
    if($years == $year): $selected = " class=\"active\""; else: $selected = ""; endif;
    echo "<li".$selected."><a href=/presidents/drupal/committees/";
    echo $years;
    echo ">20";
    echo $years;
    echo "</a>
    </li>";
    }
    echo "</ul></div>";
  
  for($j=0;$j<=3;$j++){
		  echo "<ul class=tier";
		  echo $j;
		  echo ">";
		if(array_key_exists($j, $result1) && $result1[$j] != ''){
		  foreach($result1[$j] as $name) {
         echo '<li class="leaf"><a href=/presidents/drupal/committees/'.$year.'/'.str_replace(" ","_",$name).'>'.$name.'</a></li>';
      		}
	}
      echo "</ul>";
	}

?>

</div>
<!-- /icucommittees_year template -->

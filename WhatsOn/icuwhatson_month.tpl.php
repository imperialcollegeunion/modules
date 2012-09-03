<?php

/* draws a calendar */

if($month == 01){
$yearr = $year -1;
echo '<a href="'.url('whats-on/month/'.$yearr.'/12/').'">Back a month</a>';
}else{
$monthh = sprintf("%02s", $month-1);
echo '<a href="'.url('whats-on/month/'.$year.'/'.$monthh).'">Back a month</a>';
}

echo ' ';

echo date("F", mktime(0, 0, 0, $month)).' '.$year;

echo ' ';

if($month == 12){
$yeart = $year+1;

echo '<a href="'.url('whats-on/month/'.$yeart.'/01/').'">Forward a month</a>';
}else{
$montht = sprintf("%02s", $month+1);
echo '<a href="'.url('whats-on/month/'.$year.'/'.$montht).'">Forward a month</a>';
}

?>
<BR><BR>

<form method="post" action="">
<?php 
$t=0;
while($t<$p){
echo '<input type="checkbox" name="things'.$event[$t][0].'"';
for($y=0;$y<$j;$y++){
	if($events1[$y] == $event[$t][0]){
		echo '  checked="checked"';
	}

}
echo'">'.$event[$t][1];
$t++;
}
?>


<input type="submit" name="submit" value="submit">
</form>



<?php

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np">&nbsp;</td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';
$j=0;
$calendar.= '<ul class=calendar-event>';

while($j<$k){
$stripdays = date("m/d/Y",strtotime($row1[$j][1]));
$addmonths = $month.'/'.$list_day.'/'.$year;
if($stripdays == $addmonths){
$calendar.= '<li><a href='.url('whats-on/event/').$row1[$j][2].'>'.$row1[$j][3].' '.$stripdays.'</a>';
}
$j++;
}
	
$calendar.= '</ul>';

		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np">&nbsp;</td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	echo $calendar;



?>

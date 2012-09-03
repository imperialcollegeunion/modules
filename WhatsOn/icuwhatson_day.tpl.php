<?php

/* draws a calendar 

$date - as appears in URL
$date1[0] - year
$date1[1] - month
$date1[2] - day
*/

$earlierdate = array();
$laterdate = array();

if($date1[2] == '01'){
	if($date1[1] == '01'){
		$earlierdate[1] = 12;
		$earlierdate[0] = $date1[0]-1;
	}else{
		$earlierdate[1] = sprintf("%02s", $date1[1]-1);
		$earlierdate[0] = $date1[0];
	}
	$daysinearliermonth = cal_days_in_month(CAL_GREGORIAN, $earlierdate[1], $earlierdate[0]);
	$earlierdate[2] = sprintf("%02s", $daysinearliermonth);
}else{
	$earlierdate[2] = sprintf("%02s", $date1[2]-1);
	$earlierdate[1] = sprintf("%02s", $date1[1]);
	$earlierdate[0] = $date1[0];
}
echo '<a href="'.url('whats-on/day/'.$earlierdate[0].'-'.$earlierdate[1].'-'.$earlierdate[2]).'">Previous day</a>';


echo ' '.date('l jS F Y', strtotime($date)).' ';


$daysinmonth = cal_days_in_month(CAL_GREGORIAN, $date1[1], $date1[0]);
if($date1[2] == $daysinmonth){
	if($date1[1] == '12'){
		$laterdate[1] = sprintf("%02s", 1);
		$laterdate[0] = $date1[0]+1;
	}else{
		$laterdate[1] = sprintf("%02s", $date1[1]+1);
		$laterdate[0] = $date1[0];
	}
	$laterdate[2] = sprintf("%02s", 1);
}else{
	$laterdate[2] = sprintf("%02s", $date1[2]+1);
	$laterdate[1] = sprintf("%02s", $date1[1]);
	$laterdate[0] = sprintf("%02s", $date1[0]);
}
echo '<a href="'.url('whats-on/day/'.$laterdate[0].'-'.$laterdate[1].'-'.$laterdate[2]).'">Next day</a>';

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
$j=0;
$calendar= '<ul>';

while($j<$k){
$stripdays = date("m/d/Y",strtotime($row1[$j][1]));
$calendar.= '<li><a href="/whats-on/event/'.$row1[$j][2].'">'.$row1[$j][3].' '.$stripdays.'</a>';
$j++;
}
	
$calendar.= '</ul>';

		
	echo $calendar;



?>

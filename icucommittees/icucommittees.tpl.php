<!-- icuccommittees template -->
<div class="container-inline">
 <?php
 echo "<ul class=\"yearbar\">";
 foreach($row1 as $years){
    echo "<li class=\"leaf\"><a href=/presidents/drupal/committees/";
    echo $years;
    echo ">20";
    echo $years;
    echo "</a>
    </li>";
    }
    echo "</ul><BR><BR>";

?>

</div>
<!-- /icucommittees template -->

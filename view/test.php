<?php


function dateDifference($date_1, $date_2, $differenceFormat = '%a'){

    $datetime1 = date_create($date_1, timezone_open('America/Sao_Paulo'));
    $datetime2 = date_create($date_2, timezone_open('America/Sao_Paulo'));
    
    $interval = date_diff($datetime1, $datetime2);
    
    return $interval->format($differenceFormat);
}

$datetime1 = date_create(date("Y"), timezone_open('America/Sao_Paulo'));
$datetime2 = date_create("2015-04-12", timezone_open('America/Sao_Paulo'));
    
$interval = date_diff($datetime1, $datetime2);


echo dateDifference(date("Y"),"2015-04-12","%y %m Meses");
echo "<br><br>";


print_r($datetime1);
echo "<br><br>";
print_r($datetime2);
echo "<br><br><pre>";
print_r($interval);
echo "</pre><br><br>";
echo $interval->format('%y');
echo "</pre><br><br>";

$date = strtotime("-5 year");
$date = date("Y",$date);
$date = date("Y-m-d",strtotime("31 march $date"));
echo $date;
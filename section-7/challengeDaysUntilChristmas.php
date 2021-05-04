<?php

date_default_timezone_set('Europe/Romania');

$date = strtotime('25 December 2021');
$days = ($date - time())/60/60/24; // seconds/hours/day

echo "Days until Christmas: " . ceil($days);


/*

//Another way to solve

<?php

$christmasDay = strtotime("December 25");

$daysToChristmas = ceil(($christmasDay - time()) / 60 / 60 / 24);

echo "There are " . $daysToChristmas . " days until Christmas.";

?>



*/
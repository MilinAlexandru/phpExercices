<?php

$cities = array('London', 'Tokyo', 'New York', 'Berlin', 'Brisbane');

sort($cities);

echo '<ol>';

foreach($cities as $city){

echo "<li>$city</li>";

}

echo '<br>';

array_push($cities, 'Sydney','Helsinki', 'Beijing', 'Dublin', 'Rome');

sort($cities);

foreach($cities as $city){

echo "<li>$city</li>";

}

echo '</ol>';
<?php

$cities = array('London' , 'Paris');

echo "<pre>";
print_r($cities);

array_push($cities, 'New York','Berlin');

print_r($cities);
array_unshift($cities, 'Dubai','Arad');

print_r($cities);
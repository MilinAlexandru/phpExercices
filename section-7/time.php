<?php

$date = strtotime('1st January 2020');

$seconds = $date - time();

$minutes = $seconds / 60;

$hours = $minutes / 60;

$days = $hours / 24;

//or same solve another way
//


echo ceil($days);
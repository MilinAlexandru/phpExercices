<?php

date_default_timezone_set('Europe/Romania');

echo "Today date is " . date('Y M D');
echo "<br>";

echo "Today is " . date('D');
echo "<br>";
echo "Today is " . date('l jS F Y , g:i a');
echo "<br>";

if (date('L') == 1){

    echo date('Y') . " is a leap year";
    
    } else {
    
    echo date('Y') . " is not a leap year";
    
    }
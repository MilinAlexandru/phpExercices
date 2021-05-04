<?php

function calculate($number1 , $number2){

        $add = $number1 + $number2;
        $substract = $number1 - $number2;
        return array($add,$substract);

}

$result = calculate(10,3);

echo "<pre>";
print_r($result);
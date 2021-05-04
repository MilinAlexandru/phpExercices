<?php

$cities = array("London","Paris","New York","Dublin","Berlin");

foreach($cities as $city){
    echo $city . "<br>";
}

$students = array("Sam"=>12,"Bob"=>13,"Alex"=>14);

foreach($students as $student=>$age){
    echo $student . ' is ' . $age . ' years old';
    echo "<br>";
    
}



//EXERCICES

$capitals = array( "Italy"=>"Rome"
, "Luxembourg"=>"Luxembourg"
, "Belgium"=> "Brussels"
, "Denmark"=>"Copenhagen"
, "Finland"=>"Helsinki"
, "France" => "Paris"
, "Slovakia"=>"Bratislava"
, "Slovenia"=>"Ljubljana"
, "Germany" => "Berlin"
, "Greece" => "Athens"
, "Ireland"=>"Dublin"
, "Netherlands"=>"Amsterdam"
, "Portugal"=>"Lisbon"
, "Spain"=>"Madrid"
, "Sweden"=>"Stockholm"
, "United Kingdom"=>"London"
, "Cyprus"=>"Nicosia"
, "Lithuania"=>"Vilnius"
, "Czech Republic"=>"Prague"
, "Estonia"=>"Tallin"
, "Hungary"=>"Budapest"
, "Latvia"=>"Riga"
, "Malta"=>"Valetta"
, "Austria" => "Vienna"
, "Poland"=>"Warsaw") ;

//this will sort the array by the city (the VALUE)

asort($capitals);

foreach($capitals as $country => $city){

echo 'The capital city of ' . $country . ' is ' . $city . '<br>';

}
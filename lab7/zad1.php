<?php
    $capitals = array("Italy"=>"Rome",
        "Luxembourg"=>"Luxembourg",
        "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen",
        "Finland"=>"Helsinki",
        "France" => "Paris",
        "Slovakia"=>"Bratislava",
        "Slovenia"=>"Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland"=>"Dublin",
        "Netherlands"=>"Amsterdam",
        "Portugal"=>"Lisbon",
        "Spain"=>"Madrid",
        "Sweden"=>"Stockholm",
        "United Kingdom"=>"London",
        "Cyprus"=>"Nicosia",
        "Lithuania"=>"Vilnius",
        "Czech Republic"=>"Prague",
        "Estonia"=>"Tallin",
        "Hungary"=>"Budapest",
        "Latvia"=>"Riga","Malta"=>"Valetta",
        "Austria" => "Vienna",
        "Poland"=>"Warsaw");

        asort($capitals);
        foreach($capitals as $capital => $name) {
            echo  "The capital of $capital is $name\n <br>";
        }


?>
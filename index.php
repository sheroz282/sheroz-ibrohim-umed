<?php 
 
 
$islands = [ 
"Banana_Island" => ["needs" => "GunPowder", "name" => "Banana_Island", "has" => "banana"], 
"GunPowder_Island" => ["needs" => "Banana", "name" => "Gunpowder_Island", "has" => "gunpowder"], 
"Drug_Island" => ["needs" => "banana", "name" => "Drug_Island", "has" => "drug"], 
"Desert_Island" => ["needs" => "?", "name" => null,"property" => null] 
]; 
 
$boat = [ 
    "has" => "gunpowder", 
    "needs" => "drug" 
]; 
 
function SupplyTrade($boat, $islands){ 
    foreach ($islands as $island){ 
        $island_name = $islands["name"]; 
        if ($islands["needs"] === $boat["has"] && $islands["has"] === $boat["needs"]){ 
            echo "Exchange is required with $islands_name \n"; 
        } 
        echo "Exchange is not required with $islands_name island \n"; 
    } 
} 
 
SupplyTrade($boat, $islands);
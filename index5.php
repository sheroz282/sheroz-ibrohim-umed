<?php

$storage = [
    [
        "name" => "banan",
        "type" => "edible"
    ],

    [
        "name" => "Grape",
        "type" => "medicinal",
    ]
];

function productEdible($storage)
{
    $all_products = [];
    $found_product = [
        ["name" => "vegetable", "type" => "medicinal"],
        ["name" => "juice", "type" => "edible"],
    ];
    foreach($found_product as $product){
        if($product["type"] == "edible" or $product["type"] == "medicinal"){
            array_push($all_products, $product);
        }
    }
    $all_products = array_unique($all_products, SORT_REGULAR);
    echo "<pre>";
    print_r(array_merge($all_products, $storage));
}
productEdible($storage);

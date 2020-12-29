<?php 
$options = [
    "sizes" => [
        "s" => [
            "qty" => 20,
            "price" => 10
        ],
        "m" => [
            "qty" => 30,
            "price" => 10
        ],
        "l" => [
            "qty" => 10,
            "price" => 10
        ],
        "xl" => [
            "qty" => 0,
            "price" => 10
        ],
        "xxl" => [
            "qty" => 5,
            "price" => 15
        ]
    ]
];
echo json_encode($options);
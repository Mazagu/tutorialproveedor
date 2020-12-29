<?php 

require "modules/ProveedorRequest.php";

$script = new ProveedorRequest;

$sizes = json_decode($script->sizes("http://localhost:82/tutorialproveedor/proveedor/clothingmiss/info.php"), true);

$output = [];
foreach ($sizes["sizes"] as $key => $value) {
    $output[$key] = [
        "uds" => $value['qty']
    ];
}

echo json_encode($output);
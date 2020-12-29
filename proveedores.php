<?php 
$proveedores = [
    "clothingcerberus" => "Clothing Cerberus",
    "clothingmiss" => "Clothing Miss",
    "rumpelstiltskinclothing" => "Rumpelstiltskin Clothing",
    "zandinskyclothing" => "Zandisky Clothing"
];
echo "<select id='proveedor'>";
foreach ($proveedores as $key => $value) {
    echo "<option value='$key'>$value</option>";
}
echo "</select>";
?>

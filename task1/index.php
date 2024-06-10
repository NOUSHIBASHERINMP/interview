<?php
header('Content-Type:application/json');
$items = [
    ["id" => 1, "name" => "Women's Cotton Rayon Duppatta", "price"=>"200", "category"=>"Fashion","subcategory"=>"Duppatta","color"=>"Violet","brand"=>"Beauty Wears"],
    ["id" => 2, "name" => "iPhone 13 Plus", "price"=>"50000","category"=>"Electronic Devices","subcategory"=>"Mobile Phone","color"=>"Forest Green","brand"=>"Apple"],
    ["id" => 3, "name" => "Fast Trendy Comfy Shoes for Boys ","price"=>"500","category"=>"Foot wear","subcategory"=>"Men's Shoes","color"=>"White","brand"=>"Bata"],
    ["id" => 4, "name" => "Acer Aspire 7 intel corei5 ","price"=>"5000","category"=>"electronic Devices","subcategory"=>"Laptop","color"=>"Black","brand"=>"Acer"],
    ["id" => 5,"name"=> "Ponds Super lite gel Moisturizer","price"=>"250","category"=>"Beauty","subcategory"=>"Moisturizer","color"=>"White","brand"=>"Ponds"],
];
try {
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        echo json_encode($items);
    }else{
        throw new Exception("Invalid Request Method", 405);
    }
} catch (Exception $e) {
   error_log($e->getMessage());
   http_response_code(500);
   echo json_encode(["error" => "Internal Server Error"]);
}

?>
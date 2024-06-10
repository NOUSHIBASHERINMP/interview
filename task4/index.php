<?php

function getDatabaseConnection() {
    $username = 'root';
    $servername = 'localhost';
    $password = '';
    $dbname = 'example';
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die ('Connection Failed'.mysqli_connect_error());
    }
    return $conn;
}


function fetchALLProducts() {
    static $cachedProducts = null; 

    if ($cachedProducts !== null) {
        return $cachedProducts;
    }
    $db = getDatabaseConnection();
    $result = $db->query("SELECT * FROM products"); 
    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    $db->close();
    $cachedProducts = $products;
    return $products;
}


function calculateTotalStockValue() {
    $products = fetchALLProducts();
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}

$totalStockValue = calculateTotalStockValue();
echo "Total stock value: $" . number_format($totalStockValue, 2);

?>

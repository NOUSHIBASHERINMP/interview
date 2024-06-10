<?php

$products = [
    ['id' => 1, 'name' => 'Keyboard', 'price' => 29.99, 'quantity' => 100],
    ['id' => 2, 'name' => 'Mouse', 'price' => 19.99, 'quantity' => 150],
    ['id' => 3, 'name' => 'Monitor', 'price' => 199.99, 'quantity' => 80],
    ['id' => 4, 'name' => 'PC', 'price' => 749.99, 'quantity' => 30],
    ['id' => 5, 'name' => 'Headset', 'price' => 49.99, 'quantity' => 60],
];

function sortByPrice(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n -1; $i++) {
        for ($j = 0; $j < $n - $i -1; $j++) {
            if ($array[$j]['price'] > $array[$j + 1]['price']) {

                $result = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $result;
            }
        }
    }
}

sortByPrice($products);
echo '<p>The Sorted Array  By Price</p> ';
print_r($products);



function filtering(&$array){
  $n = count($array);
  $filteredArray = [];
  for($i = 0 ; $i < $n ; $i++){
    if($array[$i]['quantity'] < 50){
     $filteredArray[] = $array[$i];
    }
  }
     $array = $filteredArray ;
     return $filteredArray;
}
$filteredProducts = filtering($products);
echo'<p> filtered array by quantity</p> ';
print_r($products);



function findTotalValue($array){
    $totalValue = 0 ;
    $n = count($array);
    for($i = 0 ; $i < $n ; $i++){
        $total = $array[$i]['price'] * $array[$i]['quantity'] ;
        $totalValue += $total ; 
        

    }
    return $totalValue ;
}
$theTotal = findTotalValue($products);
echo '<p> The Grand Total is '.$theTotal.'</p>';



?>

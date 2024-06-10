<?php
try {
    function calculateDiscount($totalAmount, $customerType) {
        $discountRate = 0.0;
        if(!is_numeric($totalAmount) || $totalAmount <= 0){
            throw new Exception ('Invalid Total Amount.It should be numeric and price of products');
        }
    
        if ($customerType == 'VIP') {
            $discountRate = 0.20;
        } else if ($customerType == 'Regular') {
            $discountRate = 0.10;
        }else{
            throw new Exception ('Invalid customer type.It should be VIP or Regular');
        }
    
        $discountAmount = $totalAmount * $discountRate;
        $discountedAmount = $totalAmount - $discountAmount ; 
    
        echo "Original Amount: ₹" . number_format($totalAmount, 2) . "<br>";
        echo "Discounted Amount: ₹" .number_format($discountedAmount, 2). "<br>"; 
        echo "You saved: ₹" . number_format($discountAmount, 2) ;
    }
} catch (Exception $e) {
     error_log($e->getMessage());
     echo "Error: " . $e->getMessage();
}

calculateDiscount(200, 'Regular');

?>
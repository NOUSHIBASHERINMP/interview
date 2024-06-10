# Explanation

<?php

function calculateDiscount($totalAmount, $customerType) {
    try {
        // Validate inputs
        if (!is_numeric($totalAmount) || $totalAmount <= 0) {
            throw new Exception('Invalid total amount. It should be a positive number.');
        }

        $validCustomerTypes = ['VIP', 'Regular'];
        if (!in_array($customerType, $validCustomerTypes)) {
            throw new Exception('Invalid customer type. It should be either VIP or Regular.');
        }

        // Determine the discount rate based on customer type
        $discountRate = 0.0;
        if ($customerType == 'VIP') {
            $discountRate = 0.20;
        } else if ($customerType == 'Regular') {
            $discountRate = 0.10;
        }

        // Calculate discounted amount
        $discountedAmount = $totalAmount * $discountRate;

        // Output the results
        echo "Original Amount: $" . number_format($totalAmount, 2) . "<br>";
        echo "Discounted Amount: $" . number_format($totalAmount - $discountedAmount, 2) . "<br>"; 
        echo "You saved: $" . number_format($discountedAmount, 2) ;

    } catch (Exception $e) {
        // Log the error
        error_log($e->getMessage());

        // Display an error message to the user
        echo "Error: " . $e->getMessage();
    }
}

// Sample call to the function
calculateDiscount(200, 'VIP');
?>
 -- The above was the script given to correct.
 ## Errors
 --The error i encountered was the payable amount or the amount after discount was shown in Discounted Amount.As there should      display the discount amount after substract  the discounted amount from total amount , 
-- so i changed it as       
        $discountAmount = $totalAmount * $discountRate;
        $discountedAmount = $totalAmount - $discountAmount ; 
    
        echo "Original Amount: $" . number_format($totalAmount, 2) . "<br>";
        echo "Discounted Amount: $" .number_format($discountedAmount, 2). "<br>"; 
        echo "You saved: $" . number_format($discountAmount, 2) ;
 
And the naming was also incorrect,as interchanged between the dicounted amount and you saved,

## Error Handling

### Input Validation
-- Input validation of totalAmount and customerType , If the totalAmount should be numeric and greate than Zero , otherwise it will  throw exception error as 'Invalid Total Amount, it should be numeric and price of products'.The same error as 'Invalid customer Type.It should be regular or VIP ' error will show for the incorrect input for the Customer Type.

### Error Message
-- provide more user friendly error message.

### Logging 
-- Improved logging to include stack traces, aiding in debugging by providing more context for errors.

## Real-world Scenario Improvements

### Reliability
-- Enhanced input validation ensures that the function only processes valid data, reducing the risk of runtime errors.

### Debugging
-- Detailed error logs with stack traces help developers identify and fix issues more efficiently.

### User Experience
-- Clear error messages inform users about issues without exposing technical details, maintaining a professional interface.
 
    




# Product Inventory Management in PHP
-This repository contains PHP scripts for managing and analyzing a product inventory. The main functionalities include filtering products based on quantity, calculating the total value of products, and sorting products by price . Each function is designed to be efficient and well-commented to explain the logic clearly. The computational complexity (Big O notation) of each operation is discussed, along with the potential impact on performance with larger datasets.

# Table Of Content
1.Sorting Product By Price.
2.Filtering Product By Quantity.
3.Calculate Total Inventory Value.

## 1.Sorting Products by Price
### Explanation
#### Input
 -The function takes an array of products by reference (&$array), which means changes made to the array inside the function will reflect in the original array.
#### Output
 -The function sorts the array of products in ascending order by price.
#### Logic:
 -Use a nested for loop to iterate through the array multiple times.
 -The outer loop iterates through each element of the array except for the last one during each pass.
 -The outer loop runs from 0 to $n - 1. Since Bubble Sort compares adjacent elements, and the last element is already in its correct position after each pass, there is no need to compare it with the element next to it.
 -The inner loop iterates through the unsorted part of the array and compares adjacent elements to perform the swapping operation.
 -The inner loop runs from 0 to $n - $i - 1, where $i represents the number of iterations of the outer loop.
 -In each pass of the outer loop, the largest element bubbles up to its correct position at the end of the array. Therefore, the inner loop doesn't need to iterate over the already sorted elements (at the end of the array), hence $n - $i - 1.
 -As the outer loop progresses, fewer comparisons are needed in the inner loop, which improves the efficiency of the sorting algorithm. This is because the largest elements are progressively placed at the correct positions towards the end of the array.
 -Hence, the outer loop runs until the second-to-last element ($n - 1), ensuring that all elements are properly compared and swapped in each pass.
 -Compare each pair of adjacent elements and swap them if they are in the wrong order.
 -Repeat this process until the array is sorted.

 #### Computational Complexity
-Outer Loop runs n-1 times , which is O(n),
-Inner loop runs n-i-1 times for each iteration of the outer loop,which is also O(n)in some case.
-Overall Complexity is the time complexity of the  Sort algorithm is O(n^2), where n is the number of elements in the array.

### Impact On Performance
#### Quadratic Complexity 
 -The 0(n^2) time complexity means that the function is less efficient for large datasets. The number of comparisons and swaps increases quadratically as the size of the array grows. 
#### Scalability
 -The  Sorting algorithm is suitable for small datasets but may perform poorly with very large datasets. For larger datasets, more efficient sorting algorithms like Quick Sort or Merge Sort, which have O(n log n) complexity are recommended.




## 2.Filtering Product By Quantity
### Explanation
#### Input
 -The function takes an array of products by reference.
#### Output
-The function returns a filtered array of products with quantities less than 50. 
#### Logic
-Initialize an empty array filteredArray to store the filtered products.
-Iterate through each product in the input array.
-If a product's quantity is less than 50, add it to the filteredArray.
-Update the original array to the filteredArray.
### Computational Complexity
 -Initialising filtered array is O(1).
 -The for loop iterates n times, where n is the number of products.
 -Each iteration involves a constant-time check and a potential append operation, which is O(1).
 -Overall Complexity is O(n).
### Impact on Performance
-The function's time complexity is linear, making it efficient for large datasets. The performance scales directly with the size of the input array.
-For large datasets, the function will perform efficiently. However, if the array size grows significantly, the execution time will increase proportionally.



## 3.Calculate Total Inventory Value.
### Explanation
#### Input
-The function takes an array of products.
#### Output
-The function returns the total value of all products.
#### Logic
-Initialize totalValue to 0.
-Iterate through each product in the input array.
-For each product, calculate its value by multiplying price and quantity.
-Accumulate this value into totalValue.

### Computational Complexity
-Initializing `totalValue` as O(1).
-The for loop iterates `n` times, where `n` is the number of products.
-Each iteration involves a constant-time multiplication and addition operation, which is  O(1).
-Overall Complexity is O(n)

### Impact on Performance
-The function's time complexity is linear, making it efficient for large datasets. The performance scales directly with the size of the input array.
-For large datasets, the function will perform efficiently. However, if the array size grows significantly, the execution time will increase proportionally.

# Conclusion
These PHP functions provide essential operations for managing a product inventory. While the filtering and total value calculation functions are efficient with O(n) complexity, the  sort function has O(n^2) complexity and may not scale well with very large datasets. Consider these complexities and potential performance impacts when working with larger datasets.





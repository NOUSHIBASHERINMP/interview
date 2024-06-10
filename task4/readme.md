# Identify Bottlenecks

## Database Connection and Query Execution
-Opening a new database connection and executing a query every time the function fetchALLProducts is called can be time-consuming, especially if the database has thousands of entries.

-Fetching all products in one go can be inefficient if the database is large and the server has limited resources.

## Data Processing
-Calculating the total stock value iterates over all products, which can be optimized if we avoid redundant calculations.

# Evaluate Changes

## Initial code
###  Bottlenecks
 -- Frequent database connections and queries.
### Complexity
 -- Database Query: O(n) where n is the number of rows in the table.
 -- Calculation: O(n) for iterating through all products.
### Impact
 -- High server load and slow response times due to repeated database access and processing.

## Optimized Code
### Bottlenecks
 -- Reduced by caching query results.
### Complexity
 -- Database Query: O(n) initially, but O(1) on subsequent calls due to caching.
 -- Calculation: O(n) remains the same for processing.
### Impact
 -- Database is queried only once, reducing load.
 -- Subsequent calls use cached data, providing quicker responses.
 --  By reusing cached data, CPU and memory usage is optimized.

 # Summary
 The optimized approach using caching significantly improves performance by reducing the frequency of database queries, thereby lowering server load and providing faster response times. This makes the script more efficient, particularly with large datasets. The caching mechanism ensures that the data is fetched only once and reused, which is beneficial for applications with frequent read operations and infrequent data changes.
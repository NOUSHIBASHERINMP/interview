<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'example';
$conn = mysqli_connect($servername,$username,$password,$databasename);
if(!$conn){
    die('connection Failed'.mysqli_connect_error());
}
$sql ="SELECT id, order_date, status, 
CASE
 WHEN status = 'Pending' AND DATEDIFF(CURDATE(), order_date) <= 7 THEN 'Pending Review'
 WHEN status = 'Pending' AND DATEDIFF(CURDATE(), order_date) > 7 THEN 'Urgent Review'
 WHEN status = 'Processing' AND DATEDIFF(CURDATE(), order_date) < 10 THEN 'Processing'
 WHEN status = 'Processing' AND DATEDIFF(CURDATE(), order_date) > 10 THEN 'Delayed' 
 WHEN status = 'Shipped' THEN 'Shipped' 
 WHEN status = 'Cancelled' THEN 'Cancelled' 
 ELSE 'Unknown Status' 
 END AS order_status_category 
 FROM orders";
$result = mysqli_query($conn,$sql);
if(!$result){
    die('Query Failed'.mysqli_error($conn));
}
while ($row = mysqli_fetch_assoc($result)) {
    echo 'Order Id: '.$row['id'].'<br>';
    echo 'Order Date: '.$row['order_date'].'<br>';
    echo "Status: " . $row['status'] . "<br>";
    echo "order_status_category: ".$row['order_status_category'].'<br><br>';
}
mysqli_free_result($result);

mysqli_close($conn);
?>
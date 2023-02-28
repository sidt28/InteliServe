<?php
//servername
$servername = "localhost";
//username
$username = "root";
//empty password
$password = "12345";
//geek is the database name
$dbname = "placement";
  
// Create connection by passing these connection parameters
$conn = new mysqli($servername, $username, $password, $dbname);
  
//sql query to find average weight  of food items in food table
$sql = "SELECT  max(package) FROM a_products";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo $row['max(package)'];
}
  
//close the connection
  
$conn->close();
?>
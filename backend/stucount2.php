<?php
  
// localhost is localhost
// servername is root
// password is empty
// database name is database
$con = mysqli_connect("localhost","root","12345","placement");
  
    // SQL query to display row count
    // in building table
    $sql = "SELECT * from studata where place = 'No'";
  
    if ($result = mysqli_query($con, $sql)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
      
    // Display result
    printf(" %d\n", $rowcount);
}
  
// Close the connection
mysqli_close($con);
  
?>
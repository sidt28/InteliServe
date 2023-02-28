<?php
  

$con = mysqli_connect("localhost","root","12345","placement");
  
    $sql = "SELECT * from studata";
  
    if ($result = mysqli_query($con, $sql)) {

    $rowcount = mysqli_num_rows( $result );
      
    
    printf(" %d\n", $rowcount);
}
  
mysqli_close($con);
  
?>
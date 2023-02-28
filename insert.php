<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "12345", "placement");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $cgpa = $_REQUEST['cgpa'];
        $skills =  $_REQUEST['skills'];
        $xthclassmarks = $_REQUEST['xthclassmarks'];
        $xxthclassmarks = $_REQUEST['xxthclassmarks'];
        $back = $_REQUEST['back'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO college  VALUES ('$name','$cgpa','$skills','$xthclassmarks','$xxthclassmarks', '$back')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n $cgpa\n ". "$skills\n $xthclassmarks\n $xxthclassmarks \n $back");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>